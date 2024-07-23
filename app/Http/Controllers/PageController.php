<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutUs()
    {
        return view('Spages.aboutus');
    }

    public function appointment()
    {
        return view('Spages.appointment');
    }

    public function testimonial()
    {
        return view('Spages.testimonial');
    }

    public function team()
    {
        return view('Spages.team');
    }

    public function blogList()
    {
        return view('blog.blogList');
    }

    public function blogGrid()
    {
        return view('blog.blogGrid');
    }

    public function blogDetails()
    {
        return view('blog.blogDetails');
    }
}


