@extends('layouts.app')

@section('title', 'Shinjiru | Address Box')

@section('content')

<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Address Box</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="/">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Elements</a>
                        <span> / </span>
                        <a href="#" class="active">Address Box</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- map area start -->
    <div class="rts-map-area bg-light-white rts-section-gap">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- map area left -->
                    <div class="mapdetails-inner-one inner">
                    <div class="left-area single-wized">
                            <h5 class="title">Get in touch</h5>
                            <div class="details">
                                <p>Work and general inquiries</p>
                                <a class="number" href="#">+977 9851361016, 01-5920716</a>

                                <p class="time-header">
                                    Assistance hours:
                                </p>
                                <p class="time">
                                    Sunday – Friday <br> 6 am to 5 pm EST
                                </p>
                            </div>
                        </div>
                        <div class="right-area single-wized">
                            <h5 class="title">Post Address</h5>
                            <div class="details">
                                <p>Service Office</p>
                                <a href="#">kathmandu metropolitan city - 16, Balaju chwok<br>
                                   Kathmandu, Nepal</a>

                                <p class="headoffice">
                                    Head Office
                                </p>
                                <p class="office">Kathmandu, Nepal</p>
                            </div>
                        </div>
                    </div>
                    <!-- map area right -->
                </div>
            </div>

        </div>
    </div>
    <!-- map area end -->


    <div class="rts-contact-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="assets/images/contact/call.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="assets/images/contact/shape/01.svg" alt="">
                            </div>
                            <div class="info">
                                <span>Call Us 24/7</span>
                                <a href="tel: 01-5920716">
                                    <h5>01-5920716</h5>
                                </a> <p> +977 9851361016</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="assets/images/contact/02.png" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="assets/images/contact/shape/02.svg" alt="">
                            </div>
                            <div class="info">
                                <span>MAke A Quote</span>
                                <a href="mailto:shinjirueducational@gmail.com">
                                    <h5>shinjirueducational@gmail.com</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="assets/images/contact/location.png" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="assets/images/contact/shape/03.svg" alt="">
                            </div>
                            <div class="info">
                                <span>Service Station</span>
                                <a href="#">
                                    <h5>Balaju Chowk, Kathmandu Nepal</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
            </div>
        </div>
    </div>


@endsection