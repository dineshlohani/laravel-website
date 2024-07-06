<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/One-page-home', function () {
    return view('home');
})->name('home');


Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('aboutus');
})->name('about');

Route::get('/service-details', function () {
    return view('service');
})->name('service');

Route::get('/Our-Service', function () {
    return view('serviceone');
})->name('serviceone');

Route::get('/Our-Services', function () {
    return view('servicetwo');
})->name('servicetwo');


Route::get('/our-services', function () {
    return view('servicethree');
})->name('servicethree');


Route::get('/take-appointment', function () {
    return view('appointment');
})->name('appointment');

Route::get('/header', function () {
    return view('header');
});
Route::get('/headers', function () {
    return view('headers');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/script', function () {
    return view('script');
});