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
                        <h2 class="title">Professional And Dedicated <br>
                            Consulting Services</h2>
                    </div>
                    <div class="about-company-wrapper">
                        <p class="disc">
                            We are licensed and insured with over 14 years of experience in providing <br> United States
                            with
                            top-rated USA business services
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
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
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
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
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
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Contact Us</a>
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