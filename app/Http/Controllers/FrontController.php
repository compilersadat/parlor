<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }
    public function home()
    {
        $service=Service::all();
        return view('welcome',compact('service'));
    }

    public function service_show(){
        $services=Service::all();
        return view('service',compact('services'));
    }

}
