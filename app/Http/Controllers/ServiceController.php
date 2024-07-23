<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        return view('Sservices.service');
    }

    public function serviceOne()
    {
        return view('Sservices.serviceone');
    }

    public function serviceTwo()
    {
        return view('Sservices.servicetwo');
    }

    public function serviceThree()
    {
        return view('Sservices.servicethree');
    }
}
