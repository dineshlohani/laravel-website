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


//partials
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



// Pages route

Route::get('/about-us', function () {
    return view('Spages.aboutus');
})->name('about');

Route::get('/take-appointment', function () {
    return view('Spages.appointment');
})->name('appointment');

Route::get('/Our-testimonial', function () {
    return view('Spages.testimonial');
})->name('testimonial');

Route::get('/Our-Team', function () {
    return view('Spages.team');
})->name('team');





//Services route
Route::get('/service-details', function () {
    return view('Sservices.service');
})->name('service');

Route::get('Our-Service', function () {
    return view('Sservices.serviceone');
})->name('serviceone');

Route::get('/Our-Services', function () {
    return view('Sservices.servicetwo');
})->name('servicetwo');


Route::get('our-services', function () {
    return view('Sservices.servicethree');
})->name('servicethree');



// Elements route


Route::get('/heading', function () {
    return view('elements.heading');
})->name('heading');

Route::get('/address', function () {
    return view('elements.address');
})->name('address');


Route::get('/accordion', function () {
    return view('elements.accordion');
})->name('accordion');


Route::get('/call-to-action', function () {
    return view('elements.cta');
})->name('cta');

Route::get('/contact-form', function () {
    return view('elements.contactForm');
})->name('contactForm');

Route::get('/Our-videos', function () {
    return view('elements.video');
})->name('video');

Route::get('/Blog-Slider', function () {
    return view('elements.blogSlider');
})->name('blogSlider');


Route::get('/Blog-Slider', function () {
    return view('elements.blogSlider');
})->name('blogSlider');

Route::get('/Our-Company', function () {
    return view('elements.ourcompany');
})->name('ourcompany');

Route::get('/counter-Up', function () {
    return view('elements.counter');
})->name('counter');

//blog
Route::get('/blog-list', function () {
    return view('blog.blogList');
})->name('blogList');

Route::get('/blog-grid', function () {
    return view('blog.blogGrid');
})->name('blogGrid');

Route::get('/blog-details', function () {
    return view('blog.blogDetails');
})->name('blogDetails');
