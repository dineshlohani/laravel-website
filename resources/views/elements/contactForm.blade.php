@extends('layouts.app')

@section('title', 'Shinjiru | Contact Form')

@section('content')

<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Contact Form</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="/">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Contact Form</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- contact area start -->
    <div class="rts-contact-area contact-one">
        <div class="container">
            <div class="row align-items-center g-0">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="contact-image-one">
                        <img src="assets/images/contact/01.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="contact-form-area-one">
        <div class="rts-title-area contact-appoinment text-start">
            <p class="pre-title">
                Make An Appointment
            </p>
            <h2 class="title">Request a free quote</h2>
            <div id="form-messages">
            @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form id="contact-form" action="{{ route('quote.store') }}" method="POST">
                @csrf
                <div class="name-email">
                    <input type="text" placeholder="Your Name" name="name" required>
                    <input type="email" placeholder="Email Address" name="email" required>
                </div>
                <input type="text" placeholder="Topic" name="subject">
                <textarea placeholder="Type Your Message" name="message" required></textarea>
                <button type="submit" class="rts-btn btn-primary">Submit Message</button>
            </form>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

    <!-- start project with us section -->
    <div class="rts-project-area rts-section-gap bg-project-three margin-controlerproject mt--170 mt_sm--0">
        <div class="container controler">
            <div class="row g-0">
                <div class="col-lg-7">
                    <!-- project area left wrapper -->
                    <div class="title-area-project-w-in">
                        <span class="sub">
                        BOOK A CONSULTATION


                        </span>
                        <h2 class="title">
                        TO START YOUR JOURNEY <br> <span>WITH US!</span>
                        </h2>
                        <p class="disc">
                        Embark on Your Journey with Us: Where Every Step Counts Towards Empowerment <br> and Success in Your Educational Pursuits..........
                        </p>
                        <div class="bg-email">
                            <div class="content-wrapper">
                                <!-- single-contact info -->
                                <div class="contact-info">
                                    <div class="icon">
                                        <img src="assets/images/product/icon/01.jpg" alt="Product_icon">
                                    </div>
                                    <div class="discription">
                                        <span>Need any help?</span>
                                        <h5 class="title-sm">+977 9851361016</h5>
                                    </div>
                                </div>
                                <!-- single-contact info End -->
                                <!-- single-contact info -->
                                <div class="contact-info">
                                    <div class="icon">
                                        <img src="assets/images/product/icon/02.jpg" alt="Product_icon">
                                    </div>
                                    <div class="discription">
                                        <span>Email us anytime</span>
                                        <h5 class="title-sm">shinjirueducational@gmail.com</h5>
                                    </div>
                                </div>
                                <!-- single-contact info End -->
                            </div>
                        </div>
                    </div>
                    <!-- project area left wrapper end -->
                </div>
                <div class="col-lg-5">
                    <div class="bg-input-project">
                        <div class="product-form">
                            <div id="form-messages">
                            @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </div>
                        <form id="contact-form" action="{{ route('quote.store') }}" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your Name" name="name" required>
                                    </div>
                                    <div class="col-lg-6 mt_md--20 mt_sm--20">
                                        <input type="email" placeholder="Your Email" name="email" required>
                                    </div>
                                    <div class="col-12 mt--20">
                                        <input type="text" placeholder="Your Subject" name="subject">
                                    </div>
                                    <div class="col-12 mt--20">
                                        <textarea placeholder="Your Comment" name="message"></textarea>
                                    </div>
                                    <div class="col-12 mt--35">
                                    <button type="submit" class="rts-btn btn-primary-3 color-h-black">SGet in Touch</button>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contact-form');
            const formMessages = document.getElementById('form-messages');

            form.addEventListener('submit', function(event) {
                // Prevent the form from submitting normally
                event.preventDefault();

                // Perform the AJAX request
                fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.text())
                .then(data => {
                    // Display the success message
                    formMessages.innerHTML = '<div class="alert alert-success">Your message has been sent successfully!</div>';

                    // Clear the form fields
                    form.reset();
                })
                .catch(error => {
                    console.error('Error:', error);
                    formMessages.innerHTML = '<div class="alert alert-danger">There was an error submitting your message. Please try again.</div>';
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contact-form');
            const submitButton = form.querySelector('button[type="submit"]');

            form.addEventListener('submit', function() {
                // Disable the submit button to prevent multiple submissions
                submitButton.disabled = true;
            });
        });
    </script>
@endsection