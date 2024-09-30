@extends('layouts.app')

@section('title', 'Shinjiru | Blog Slider')

@section('content')

<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Blog Slider</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="#">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Blog Slider</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- blog area start -->
    <div class="rts-blog-area rts-section-gap bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area text-center">
                        <span>Blog Posts</span>
                        <h2 class="title">News & Updates</h2>
                    </div>
                </div>
            </div>
            <div class="g-5 mt--20">
                <div class="swiper mySwiperh1_blog">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-blog-one-wrapper">
                                <div class="thumbnail">
                                    <img src="assets/images/blog/01.jpg" alt="business_Blog">
                                    <div class="blog-badge">
                                        <span>25.05.2024</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p><span>Educational Solution </span>/ by Dinesh Lohani</p>
                                    <a href="#">
                                        <h5 class="title">Effective Strategies for Students to Settle Abroad </h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="#"><i
                                            class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-blog-one-wrapper">
                                <div class="thumbnail">
                                    <img src="assets/images/blog/02.jpg" alt="business_Blog">
                                    <div class="blog-badge">
                                        <span>25.06.2024</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p><span>Education Solution </span>/ by Dinesh Lohani</p>
                                    <a href="#">
                                        <h5 class="title">Quick Tips for Navigating the New Education Landscape</h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="#"><i
                                            class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-blog-one-wrapper">
                                <div class="thumbnail">
                                    <img src="assets/images/blog/03.jpg" alt="business_Blog">
                                    <div class="blog-badge">
                                        <span>25.05.2024</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p><span>Educational Solution </span>/ by Dinesh Lohani</p>
                                    <a href="#">
                                        <h5 class="title">Bridging the Gap: Traditional Education Meets Modern Technology </h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="#"><i
                                            class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="single-blog-one-wrapper">
                                <div class="thumbnail">
                                    <img src="assets/images/blog/03.jpg" alt="business_Blog">
                                    <div class="blog-badge">
                                        <span>25.05.2024</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p><span>Educational Solution </span>/ by Dinesh Lohani</p>
                                    <a href="#">
                                        <h5 class="title">Success Stories: How Our Consultancy Helped Students Achieve Their Dreams </h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="#"><i
                                            class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="single-blog-one-wrapper">
                                <div class="thumbnail">
                                    <img src="assets/images/blog/02.jpg" alt="business_Blog">
                                    <div class="blog-badge">
                                        <span>25.06.2024</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p><span>Education Solution </span>/ by Dinesh Lohani</p>
                                    <a href="#">
                                        <h5 class="title">Navigating Visa Processes: A Comprehensive Guide for Students</h5>
                                    </a>
                                    <a class="rts-read-more btn-primary" href="#"><i
                                            class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection