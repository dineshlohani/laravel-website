@extends('layouts.app')

@section('title', 'Shinjiru Educational | Videos')

@section('content')

<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Videos</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index-2.html">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Videos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- business goal area -->
    <div class="rts-business-goal mt--0 rts-section-gap">
        <div class="container">
            <div class="row">
                <!-- business goal left -->
                <div class="col-lg-6">
                    <div class="business-goal-one">
                        <img src="assets/images/business-goal/01.jpg" alt="Business_Goal">
                        <img class="small" src="assets/images/business-goal/sm-01.jpg" alt="Business_Goal">
                    </div>
                </div>
                <!-- business goal right -->

                <!-- right area business -->
                <div class="col-lg-6 mt--35 mt_md--70 mt_sm--70">
                    <div class="business-goal-right">
                        <div class="rts-title-area business text-start pl--30">
                            <p class="pre-title">
                            MORE THAN A CONSULTANCY
                            </p>
                            <h2 class="title">We know how to guide you to success in Japan</h2>
                        </div>
                        <div class="rts-business-goal pl--30">
                            <div class="single-goal">
                                <img src="assets/images/business-goal/icon/01.svg" alt="business_Icone" class="thumb">
                                <div class="goal-wrapper">
                                    <h6 class="title">Best Career Consulting</h6>
                                    <p class="disc">"Our educational consultancy provides expert guidance and support
                                         tailored to student success. We're committed to excellence in academic and career development."</p>
                                </div>
                            </div>
                            <div class="single-goal">
                                <img src="assets/images/business-goal/icon/02.svg" alt="business_Icone" class="thumb">
                                <div class="goal-wrapper">
                                    <h6 class="title">24/7 Student Support</h6>
                                    <p class="disc">"With our 24/7 Customer Support, you can count on us for reliable 
                                        assistance anytime, day or night, ensuring you always have the help you need."</p>
                                </div>
                            </div>
                            <div class="goal-button-wrapper mt--70">
                                <a href="{{ route('contact') }}" class="rts-btn btn-primary color-h-black">Contact Us</a>
                                <div class="vedio-icone">
                                    <a id="play-video" class="video-play-button" href="#">
                                        <span></span>
                                        <span class="outer-text">Watch Video</span>
                                    </a>
                                    <div id="video-overlay" class="video-overlay">
                                        <a class="video-overlay-close">×</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- right area business ENd -->
            </div>
        </div>
    </div>
    <!-- business goal area End -->

    <!-- start about area two -->
    <div class="rts-about-area-two rts-section-gap about-two-bg">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="about-three-thumbnail-left">
                        <img src="assets/images/about/main/05.jpg" alt="Business-about">
                        <div class="about-sm-thumb">
                            <img src="assets/images/about/main/about-01-sm.jpg" alt="business_about-sm">
                        </div>
                        <a href="#" class="vedio-icone">
                            <span id="play-video" class="video-play-button">
                                <img src="assets/images/about/shape/play-btn.png" alt="Play btn">
                                <span></span>
                            </span>
                            <div id="video-overlay" class="video-overlay">
                                <span class="video-overlay-close">×</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 pl--50 pl_md--15 pl_sm--15">
                    <div class="about-right-three">
                        <div class="title-area-about-three">
                            <span class="sub">EASY EDUCATIONAL CONSULTANCY</span>
                            <h2 class="title">
                            YOUR TRUSTED GUIDE
                                <span>TO <span>STUDYING ABROAD</span></span>
                            </h2>
                        </div>
                        <div class="inner-about-three">
                            <p class="disc">
                            Embark on a transformative journey with our expert guidance. Explore
                             global opportunities, achieve academic excellence,
                             and immerse yourself in diverse cultures. Start your journey today with personalized 
                             support at every step towards your international education goals
                            </p>
                            <!-- start -->
                            <div class="row">
                                <!-- start -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="solution-wrapper">
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Study abroad guidance</p>
                                        </div>
                                        <!-- single business solution -->
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Application assistance</p>
                                        </div>
                                        <!-- single business solution -->
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Visa consultation </p>
                                        </div>
                                        <!-- single business solution -->
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Language proficiency courses</p>
                                        </div>
                                        <!-- single business solution -->
                                    </div>
                                </div>
                                <!-- end -->
                                <!-- start -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="solution-wrapper-right">
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>How to Start Your Journey</p>
                                        </div>
                                        <!-- single business solution -->
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Consult with our experts</p>
                                        </div>
                                        <!-- single business solution -->
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Plan your educational path </p>
                                        </div>
                                        <!-- single business solution -->
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Achieve your academic goals</p>
                                        </div>
                                        <!-- single business solution -->
                                    </div>
                                </div>
                                <!-- end -->
                            </div>
                        </div>
                        <!--usrer aresa start -->
                        <div class="row">
                            <div class="col-l2">
                                <div class="rts-user-three-wrapper">
                                    <div class="user-wrapper">
                                        <a href="#"><img src="assets/images/about/main/user/01.png" alt="Business_User"></a>
                                        <a href="#"><img src="assets/images/about/main/user/02.png" alt="Business_User"></a>
                                        <a href="#"><img src="assets/images/about/main/user/03.png" alt="Business_User"></a>
                                    </div>
                                    <div class="reviews">
                                        <h5 class="title">500+</h5>
                                        <span>Active Reviews</span>
                                    </div>
                                    <a href="#" class="rts-btn btn-primary-3 color-h-black ml--35">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <!--usrer aresa end -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection