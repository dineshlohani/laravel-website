<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementController extends Controller
{
    public function heading()
    {
        return view('elements.heading');
    }

    public function address()
    {
        return view('elements.address');
    }

    public function accordion()
    {
        return view('elements.accordion');
    }

    public function callToAction()
    {
        return view('elements.cta');
    }

    public function contactForm()
    {
        return view('elements.contactForm');
    }

    public function video()
    {
        return view('elements.video');
    }

    public function blogSlider()
    {
        return view('elements.blogSlider');
    }

    public function ourCompany()
    {
        return view('elements.ourcompany');
    }

    public function counter()
    {
        return view('elements.counter');
    }
}
