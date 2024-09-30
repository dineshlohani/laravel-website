<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
Route::get('/One-page-home', [PageController::class, 'home'])->name('home');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');

// Partials
Route::view('/header', 'header');
Route::view('/headers', 'headers');
Route::view('/footer', 'footer');
Route::view('/sidebar', 'sidebar');
Route::view('/script', 'script');

Route::view('/header1', 'header1');
Route::view('/head', 'head');
Route::view('/scripts', 'scripts');
Route::view('/footers', 'footers');
Route::view('/sidebars', 'sidebars');

// Pages route
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about');
Route::get('/take-appointment', [PageController::class, 'appointment'])->name('appointment');
Route::get('/Our-testimonial', [PageController::class, 'testimonial'])->name('testimonial');
Route::get('/Our-Team', [PageController::class, 'team'])->name('team');

// Services route
Route::get('/service-details', [ServiceController::class, 'service'])->name('service');
Route::get('Our-Service', [ServiceController::class, 'serviceOne'])->name('serviceone');
Route::get('/Our-Services', [ServiceController::class, 'serviceTwo'])->name('servicetwo');
Route::get('our-services', [ServiceController::class, 'serviceThree'])->name('servicethree');

// Elements route
Route::get('/heading', [ElementController::class, 'heading'])->name('heading');
Route::get('/address', [ElementController::class, 'address'])->name('address');
Route::get('/accordion', [ElementController::class, 'accordion'])->name('accordion');
Route::get('/call-to-action', [ElementController::class, 'callToAction'])->name('cta');
Route::get('/contact-form', [ElementController::class, 'contactForm'])->name('contactForm');
Route::get('/Our-videos', [ElementController::class, 'video'])->name('video');
Route::get('/Blog-Slider', [ElementController::class, 'blogSlider'])->name('blogSlider');
Route::get('/Our-Company', [ElementController::class, 'ourCompany'])->name('ourcompany');
Route::get('/counter-Up', [ElementController::class, 'counter'])->name('counter');

// Blog
Route::get('/blog-list', [PageController::class, 'blogList'])->name('blogList');
Route::get('/blog-grid', [PageController::class, 'blogGrid'])->name('blogGrid');
Route::get('/blog-details', [PageController::class, 'blogDetails'])->name('blogDetails');


Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');






// Show the admin login form
Route::get('/admin-login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::get('/admin/signup', function () {  return view('admin.signup');})->name('signup')->middleware('auth:admin');


// Handle the admin login submission
Route::post('/admin-login', [AdminController::class, 'login'])->name('admin.login.submit');

// // Show the admin dashboard (protected by 'auth:admin' middleware)
Route::get('/admin-dashboard', [ContactController::class, 'showDashboard'])->middleware('auth:admin')->name('admin.dashboard');



// Handle admin logout
Route::post('/admin-logout', [AdminController::class, 'logout'])->middleware('auth:admin')->name('admin.logout');

// Create a new admin user
Route::post('/create-admin', [AdminController::class, 'createAdmin'])->middleware('auth:admin')->name('admin.create');

Route::get('/total-messages', [ContactController::class, 'getTotalMessages']);
Route::get('/total-quotes', [QuoteController::class, 'getTotalQuotes']);

Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->middleware('auth:admin');

