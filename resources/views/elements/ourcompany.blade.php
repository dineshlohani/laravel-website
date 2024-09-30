@extends('layouts.app')

@section('title', 'Shinjiru | Our Company')

@section('content')

<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Our Company</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="/">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Elements</a>
                        <span> / </span>
                        <a href="#" class="active">Our Company</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- start about our company -->
    <div class="rts-about-our-company-h2 rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2 mt_sm--30">
                    <div class="title-area about-company">
                        <span>About Our Company</span>
                        <h2 class="title">Professional and Dedicated Consulting Services</h2>
                    </div>
                    <div class="about-company-wrapper">
                        <p class="disc">
                        With over many years of experience, Shinjiru Educational Consultancy Pvt. Ltd. is licensed and insured to provide top-rated 
                        guidance for studying and working in Japan. Trust our expertise to help you achieve your dreams.
                        </p>
                        <div class="rts-tab-style-one">
                            <div class="d-flex align-items-start contoler-company">
                                <div class="nav flex-column nav-pills me-3 button-area" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">01. The Great Mission</button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">02. Amazing Vision</button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">03. Our Destination</button>
                                </div>
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p class="disc">
                                            Empowering students and professionals to achieve their 
                                            educational and career goals in Japan through exceptional guidance and support.
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                Personalized support to achieve educational and career goals in Japan
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                Prepare clients comprehensively for success in their journey to Japan
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Contact Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p class="disc">
                                            To be the leading consultancy, known for dedication, expertise, and helping
                                             clients seamlessly transition to studying and working in Japan.
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                Renowned for dedication, reliability, and excellence in consultancy services
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                Innovate continuously to meet the evolving needs of clients
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Contact Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p class="disc">
                                            A world where studying and working in Japan is a reality for everyone,
                                             creating successful and fulfilling futures.
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                Create global opportunities for studying and working in Japan
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                Foster successful and fulfilling futures for all our clients
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="{{ route('contact') }}">Contact Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 order-xl-1 order-lg-1 order-md-1 order-sm-1 order-1">
                    <div class="about-company-thumbnail">
                        <img src="assets/images/about/01.png" alt="Business_company">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection