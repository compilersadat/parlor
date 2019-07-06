<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Hash;
use App\Order;


class UserController extends Controller
{
    public function customerRegistration(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',

        ]);
        $customer=new Customer();
        $customer->email=$request['email'];
        $customer->password=Hash::make($request['password']);
        if($customer->save()){
            return redirect()->back()->with('success','Registration Successful.');
        }
        else{
            return redirect()->back()->with('unsuccess','Registration Failed.');
        }
    }



    public function customerLogin(Request $request){
        $this->validate($request, [
            'email'   => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->route('customer.home');
        }
        else{
            if ( ! Customer::where('email', $request->name)->first() ) {
                return redirect()->back()
                    ->withInput($request->only('email', 'remember'))
                    ->withErrors([
                        'email' => Lang::get('Email Not registered.'),
                    ]);
            }

            if ( ! Customer::where('email', $request->email)->where('password', Hash::make($request->password))->first() ) {
                return redirect()->back()
                    ->withInput($request->only('email', 'remember'))
                    ->withErrors([
                        'password' => Lang::get('Invalid password'),
                    ]);
            }
        }
    }

    public function customerLoginForm()
    {
        return view('customer.customer_login');
    }

    public function customerRegistrationForm()
    {
        return view('customer.customer_register');
    }

    public function customerOrder(Request $request){
        $this->validate($request,[
            'mobile'=>'required',
            'address'=>'required',
            'date'=>'required',

        ]);
        $order=new Order();
        $order->mobile=$request['mobile'];
        $order->address=$request['address'];
        $order->date=$request['date'];
        $order->time_window=$request['time_window'];
        if($order->save()){
            return redirect()->back()->with('success','Order Successful.');
        }
        else{
            return redirect()->back()->with('unsuccess','Order Failed.');
        }
    }

    public function customerOrderForm()
    {
        return view('customer.order');
    }

}
