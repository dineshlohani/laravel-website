@extends('layouts.app')

@section('title', 'Shinjiru | Call to action')

@section('content')

<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Call To Action</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index-2.html">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Call To Action</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts service post area  Start-->
    <div class="rts-service-area rts-section-gap">
        <div class="container-fluid service-main plr--120-service plr_md--0 pl_sm--0 pr_sm--0">
            <div class="row">
                <div class="cta-one-bg col-12">
                    <div class="cta-one-inner">
                        <div class="cta-left">
                            <h3 class="title">Let’s discuss about how we can help make your education better</h3>
                        </div>
                        <div class="cta-right">
                            <a class="rts-btn btn-white" href="{{ route('appointment') }}">Lets Work Together</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service post area ENd -->

    <!-- cta section start -->
    <div class="rts-cta-section-start rts-section-gap cta-bg-h2">
        <div class="container">
            <div class="row">
                <div class="cta-h2-wrapper text-center">
                    <div class="icon">
                        <a href="#"><i class="fas fa-phone-alt"></i></a>
                    </div>
                    <div class="body">
                        <p class="info">Contact Our Advisor For Any Kind of Educational Help <span>(24/7 Available)</span></p>
                        <a href="tel: 015920716" class="number">+ 977 9851361016</a>
                        <a href="#" class="rts-btn btn-primary-2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rts-callto-acation-area rts-callto-acation-area4 bg-call-to-action-two mt--120 mb--120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-two-wrapper">
                        <div class="title-area">
                            <h3 class="title">Let's discuss how we can help <br> improve your education
                                </h3>
                        </div>
                        <a class="rts-btn btn-secondary-3" href="{{ route('contact') }}">Lets Work Together</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end call to action area -->

    <!-- rts cta area start -->
    <div class="rts-cta-area ptb--100 rts-cta-bg mt--120 mb--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-three-wrapper">
                        <h4 class="title">NEED ANY EDUCATIONAL CONSULTANCY? <a href="#">Contact With Us</a>
                        </h4>
                        <a class="rts-btn btn-secondary-3" href="{{ route('contact') }}">Lets Work Together</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection