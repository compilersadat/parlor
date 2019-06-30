<?php

namespace App\Http\Controllers\Admin;


use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ServiceController extends Controller
{
    public function index()
    {
        $users=Service::all();
        return view('admin.services.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',


        ]);
        $service= new Service();
        $service->name=$request->name;
        $service->price=$request->price;
        $service->description=$request->description;
        if($request->file('image')){
            $upload=$request->file('image');
            $fileformat= time().'.'.$upload->getClientOriginalName();
            if($upload->storeAs('service',$fileformat)){
                $service->image=$fileformat;
            }
        }
        if($service->save()){
            return redirect()->back()->with('success',' Service Added successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendent  $attendent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service=Service::findOrFail($id);
        return view('admin.services.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendent  $attendent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::findOrFail($id);
        return view('admin.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendent  $attendent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $service=Service::findOrFail($id);
        $service->name=$request->name;
        $service->price=$request->price;
        $service->description=$request->description;
        if($request->file('image')){
            $upload=$request->file('image');
            $fileformat= time().'.'.$upload->getClientOriginalName();
            if($upload->storeAs('service',$fileformat)){
                $service->image=$fileformat;
            }
        }
        if($service->update()){
            return redirect()->route('services.index');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendent  $attendent
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $service=Service::findOrFail($id);
        if(Service::where('id',$id)->delete()){
            return redirect()->back()->with('success',' Service deleted successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }
}
