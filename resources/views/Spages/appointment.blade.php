@extends('layouts.app')

@section('title', 'Shinjiru | Appointment')

@section('content')


<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Appointment</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index-2.html">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


    <!-- rts circle progress area -->
    <div class="rts-circle-progress-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single progress area -->
                    <div class="single-circle-progress-inner">
                        <!-- single -->
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">85%</div>
                        </div>
                        <!-- single -->
                        <h5 class="title">Quality Service</h5>
                    </div>
                    <!-- single progress area End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single progress area -->
                    <div class="single-circle-progress-inner">
                        <!-- single -->
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">90%</div>
                        </div>
                        <!-- single -->
                        <h5 class="title">Skilled Members</h5>
                    </div>
                    <!-- single progress area End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single progress area -->
                    <div class="single-circle-progress-inner">
                        <!-- single -->
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">78%</div>
                        </div>
                        <!-- single -->
                        <h5 class="title">Happy Student</h5>
                    </div>
                    <!-- single progress area End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single progress area -->
                    <div class="single-circle-progress-inner">
                        <!-- single -->
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">79%</div>
                        </div>
                        <!-- single -->
                        <h5 class="title">Project Success</h5>
                    </div>
                    <!-- single progress area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts circle progress area End -->

    <!-- contact area start -->
    <div class="rts-contact-area contact-one appoinment background-contact-appoinment">
        <div class="">
            <div class="row g-0 align-items-center">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="contact-image-one appoinment">
                        <img src="assets/images/appoinment/02.png" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
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

    <!-- rts team two area -->
    <div class="rts-team-area rts-section-gapTop appoinment-team  team-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area team text-center">
                        <p class="pre-title">
                            Professionals Team
                        </p>
                        <h2 class="title">Professionals Team</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <!-- single team -->
                <div class="col-lg-4">
                    <!-- single team inner -->
                    <div class="team-inner-two">
                        <a href="team-details.html" class="thumbnail">
                            <img src="assets/images/team/tm/04.jpg" alt="">
                        </a>
                        <!-- Acquaintance area -->
                        <div class="acquaintance-area">
                            <div class="header">
                                <a href="team-details.html">
                                    <h5 class="title">Indira Lohani</h5>
                                </a>
                                <span>Consultant</span>
                            </div>
                            <div class="acquaintance-social">
                                <a href="https://www.facebook.com/Endira.lohani.58"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/endiralohani/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                    <!-- single team inner End -->
                </div>
                <!-- single team End -->
                <!-- single team -->
                <div class="col-lg-4">
                    <!-- single team inner -->
                    <div class="team-inner-two">
                        <a href="team-details.html" class="thumbnail">
                            <img src="assets/images/team/tm/02.png" alt="">
                        </a>
                        <!-- Acquaintance area -->
                        <div class="acquaintance-area">
                            <div class="header">
                                <a href="team-details.html">
                                    <h5 class="title">Dinesh Lohani</h5>
                                </a>
                                <span>Co-founder / IT Officer </span>
                            </div>
                            <div class="acquaintance-social">
                                <a href="https://www.facebook.com/dinesh.lohani.969/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/dinesh-lohani-2f7og62i/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://instagram.com/dinesh.lohani4/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                    <!-- single team inner End -->
                </div>
                <!-- single team End -->
                <!-- single team -->
                <div class="col-lg-4">
                    <!-- single team inner -->
                    <div class="team-inner-two">
                        <a href="team-details.html" class="thumbnail">
                            <img src="assets/images/team/tm/01.jpeg" alt="">
                        </a>
                        <!-- Acquaintance area -->
                        <div class="acquaintance-area">
                            <div class="header">
                                <a href="team-details.html">
                                    <h5 class="title">Bishal Dhamala</h5>
                                </a>
                                <span>CEO</span>
                            </div>
                            <div class="acquaintance-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                    <!-- single team inner End -->
                </div>
                <!-- single team End -->
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
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Display the personalized success message
                    formMessages.innerHTML = '<div class="alert alert-success">Thank you ' + data.name + ' for contacting us. Your message has been sent successfully! We will contact you very soon.</div>';
                    
                    // Clear the form fields
                    form.reset();
                } else {
                    // Display the error message
                    formMessages.innerHTML = '<div class="alert alert-danger">' + data.message + '</div>';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                formMessages.innerHTML = '<div class="alert alert-danger">There was an error submitting your message. Please try again.</div>';
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
    });
</script>



@endsection
