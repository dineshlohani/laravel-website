<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('title', 'Shinjiru Educational Consultancy')

@section('content')
   
<body>

  

<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>

<div id="anywhere-home">
</div>
<!-- ENd Header Area -->

<!-- banner blank space area -->
<div class="rts-banner-area rts-banner-one">
    <div class="swiper mySwiper banner-one">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <!-- banner single content -->
                <div class="banner-one-inner text-start">
                    <p class="pre-title">
                        <span>WELCOME!</span>  TAKE YOUR EDUCATION TO THE NEXT LEVEL
                    </p>
                    <h1 class="title ">Achieve <span>Academic Excellence </span> <br>
                    In Japan</h1>
                    <p class="disc banner-para">
                    Explore cutting-edge learning opportunities in Japan's top universities
                    Embark on a journey of cultural enrichment and academic success
                    </p>
                    <a href="#" class="rts-btn btn-primary color-h-black">Get Consultant</a>
                    <img class="shape-img one" src="assets/images/banner/shape/01.png" alt="banner_business">
                </div>
                <!-- banner single content end -->
            </div>
            <div class="swiper-slide two">
                <!-- banner single content -->
                <div class="banner-one-inner text-start">
                    <p class="pre-title">
                        <span>Welcome!</span> DISCOVER YOUR FUTURE IN JAPAN
                    </p>
                    <h1 class="title ">Transform <span>Your Education</span> <br> Abroad</h1>
                    <p class="disc banner-para">
                    Experience world-class education and immerse yourself in Japan's vibrant culture
                    Unlock endless possibilities with advanced academic programs
                    </p>
                    <a href="#" class="rts-btn btn-primary color-h-black">Get Consultant</a>
                    <img class="shape-img one" src="assets/images/banner/shape/01.png" alt="banner_business">
                </div>
                <!-- banner single content end -->
            </div>
            <div class="swiper-slide three">
                <!-- banner single content -->
                <div class="banner-one-inner text-start">
                    <p class="pre-title">
                        <span>Welcome!</span> EXPAND YOUR HORIZONS TODAY
                    </p>
                    <h1 class="title ">Take   <span>Your Education </span> <br> Global</h1>
                    <p class="disc banner-para">
                    Experience diverse cultures and top-tier education around the world
                    Unlock new opportunities with international academic programs
                    </p>
                    <a href="#" class="rts-btn btn-primary color-h-black">Get Consultant</a>
                    <img class="shape-img one" src="assets/images/banner/shape/01.png" alt="banner_business">
                </div>
                <!-- banner single content end -->
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="animation-img">
        <img class="shape-img two" src="assets/images/banner/shape/02.png" alt="banner_business">
        <img class="shape-img three" src="assets/images/banner/shape/03.png" alt="banner_business">
    </div>
</div>
<!-- banner blank space area end -->

<!-- rts about us section start -->
<div class="rts-about-area rts-section-gap bg-about-sm-shape">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- about left -->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                <div class="rts-title-area">
                    <p class="pre-title">
                        More About Us
                    </p>
                    <h2 class="title">We Provide Guidance for Your Educational Journey.
                        </h2>
                </div>
                <div class="about-inner">
                    <p class="disc">
                    We offer expert advice and support to help you navigate your educational path.
                     From choosing the right university to understanding the application process,
                      our team is here to ensure your success.
                    </p>
                    <!-- start about success area -->
                    <div class="row about-success-wrapper">
                        <!-- left wrapper start -->
                        <div class="col-lg-6 col-md-6">
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">24/7 Call Services Avilable</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Highly Skilled Consultants</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Expert Team Members</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Personalized Study Plans</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Accommodation and Travel Support</p>
                            </div>
                        </div>
                        <!-- left wrapper end -->
                        <div class="col-lg-6 col-md-6">
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Japanese Language Preparation
                                </p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Highly Skilled Consultants</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Interview Preparation</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Support Documentation</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Ongoing Support Throughout Your Studies</p>
                            </div>
                        </div>
                    </div>
                    <!-- start about success area -->

                    <!-- about founder & get in touch start -->
                    <div class="row about-founder-wrapper align-items-center mt--40">
                        <!-- left area start -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="author-inner">
                                <a class="thumbnail" href="#"><img src="assets/images/about/image.png" alt=" _founder"></a>
                                <div class="founder-details">
                                    <a href="team-details.html">
                                        <h6 class="title">Bishal Dhamala</h6>
                                    </a>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                        </div>
                        <!-- left area end -->
                        <!-- right founder area -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_sm--20">
                            <div class="author-call-option">
                                <img class="authore-call" src="assets/images/about/call.svg" alt="call_founder">
                                <div class="call-details">
                                    <span>Call us anytime</span>
                                    <a href="mob:+977 9851361016">
                                        <h6 class="title">+977 9851361016</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- left founder area -->
                    </div>
                    <!-- about founder & get in touch end -->
                </div>
            </div>
            <!-- about right -->

            <!-- about-right Start-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-sm-1 order-1">
                <div class="about-one-thumbnail">
                    <img src="assets/images/about/main/about-01.png" alt="about- ">
                    <img class="small-img" src="assets/images/about/main/about-02.png" alt=" -small">
                    <div class="experience">
                        <div class="left single">
                            <h2 class="title">8+</h2>
                            <p class="time">Years</p>
                        </div>
                        <div class="right single">
                            <p class="disc">
                                Of experience
                                in consulting
                                service
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-right end -->
        </div>
    </div>
</div>
<!-- rts about us section end -->

<!-- rts service post area  Start-->
<div class="rts-service-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area service text-center">
                    <p class="pre-title">
                        Our Services
                    </p>
                    <h2 class="title">High Quality Services</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service-main plr--120-service mt--50 plr_md--0 pl_sm--0 pr_sm--0">
        <div class="background-service row">
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner one">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/01.svg" alt=" _service">
                    </div>
                    <div class="service-details">
                        <a href="service-details.html">
                            <h5 class="title">Educational / Working Planning</h5>
                        </a>
                        <p class="disc">
                        At Shinjiru, we provide personalized educational and career planning 
                        services. Whether you're pursuing studies or looking to work in Japan,
                        our expert advisors help you navigate the best pathways to achieve your 
                        goals, ensuring a successful and fulfilling experience.
                        </p>
                        <a class="rts-read-more btn-primary" href="service-details.html"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner two">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/visa.png" alt=" _service">
                    </div>
                    <div class="service-details">
                        <a href="service-details.html">
                            <h5 class="title">Visa Process</h5>
                        </a>
                        <p class="disc">
                        We'll help you with your visa application from start to finish. Our team ensures
                         that all necessary steps are completed accurately and efficiently. 
                        Trust us to make your journey abroad stress-free.
                        </p>
                        <a class="rts-read-more btn-primary" href="service-details.html"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner three">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/document.png" alt=" _service">
                    </div>
                    <div class="service-details">
                        <a href="service-details.html">
                            <h5 class="title">Documentation Guidance</h5>
                        </a>
                        <p class="disc">
                        We offer expert documentation guidance to ensure your application process is smooth and hassle-free. From visa applications 
                        to school enrollment paperwork, our experienced team is here to assist you every step of the way.
                        </p>
                        <a class="rts-read-more btn-primary" href="service-details.html"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner four">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/04.svg" alt=" _service">
                    </div>
                    <div class="service-details">
                        <a href="service-details.html">
                            <h5 class="title">Language Classes</h5>
                        </a>
                        <p class="disc">

At Shinjiru Educational Consultancy, we offer high-quality language courses taught by experienced teachers with international 
backgrounds.We provide comprehensive Japanese courses (NAT, JLPT N5 to N1) in a peaceful, friendly,
 and well-equipped environment. Join us to master Japanese with expert guidance!
                        </p>
                        <a class="rts-read-more btn-primary" href="service-details.html"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner five">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/05.svg" alt=" _service">
                    </div>
                    <div class="service-details">
                        <a href="service-details.html">
                            <h5 class="title">Interview Preparation Class</h5>
                        </a>
                        <p class="disc">
                        Our Interview Preparation Class equips you with the skills 
                        and confidence needed to excel in interviews. Through personalized coaching 
                        and mock interviews, we help you master effective communication and presentation techniques to make a lasting impression.
                        </p>
                        <a class="rts-read-more btn-primary" href="service-details.html"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner six">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/06.svg" alt=" _service">
                    </div>
                    <div class="service-details">
                        <a href="service-details.html">
                            <h5 class="title">Career Counselling</h5>
                        </a>
                        <p class="disc">
                        Our Career Counselling services provide personalized guidance to
                         help you navigate your professional journey. Whether you're exploring career options, seeking job opportunities,
                         or planning your future, our experienced advisors offer expert advice and support tailored to your goals.
                        </p>
                        <a class="rts-read-more btn-primary" href="service-details.html"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner four">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/test.webp" alt=" _service">
                    </div>
                    <div class="service-details">
                        <a href="service-details.html">
                            <h5 class="title">Test Preparation </h5>
                        </a>
                        <p class="disc">
                        Get ready for language exams with our help! Our teachers will show you everything
                         you need to know for the test. We make studying easy with personalized lessons and lots of helpful materials.
                        </p>
                        <a class="rts-read-more btn-primary" href="service-details.html"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner five">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/education.webp" alt=" _service">
                    </div>
                    <div class="service-details">
                        <a href="service-details.html">
                            <h5 class="title">Educational Pathway Planning</h5>
                        </a>
                        <p class="disc">
                        Our Educational Pathway Planning services help you chart a clear and
                         effective course for your academic journey. We provide tailored advice and support to ensure you 
                        choose the right programs and institutions to achieve your educational and career objectives.
                        </p>
                        <a class="rts-read-more btn-primary" href="service-details.html"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner six">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/post.svg" alt=" _service">
                    </div>
                    <div class="service-details">
                        <a href="service-details.html">
                            <h5 class="title">Post Arrival Support</h5>
                        </a>
                        <p class="disc">
                        Our Post Arrival Support services ensure a smooth transition to life in Japan. 
                        We assist with everything from settling in, navigating local customs, to finding accommodation and
                         accessing essential services, providing you with peace of mind as you embark on your new journey.
                        </p>
                        <a class="rts-read-more btn-primary" href="service-details.html"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
        </div>
        <div class="row">
            <div class="cta-one-bg col-12">
                <div class="cta-one-inner">
                    <div class="cta-left">
                        <h3 class="title">Let’s discuss about how we can help
                            make your education better</h3>
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

<!-- business goal area -->
<div class="rts-business-goal mt--0 rts-section-gapBottom">
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
                        <h2 class="title">We know how to guide you to success in Japan.</h2>
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
                                <h6 class="title">24/7 Customer Support</h6>
                                <p class="disc">
                                "With our 24/7 Customer Support, you can count on us for reliable assistance anytime, day or night,
                                 ensuring you always have the help you need."</p>
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

<!-- rts-counter up area start -->
<div class="rts-counter-up-area rts-section-gap counter-bg">
        <div class="container">
            <div class="row">
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <img src="assets/images/counterup/icon/01.svg" alt="Business_counter">
                        <div class="counter-details">
                            <h2 class="title"><span class="counter animated fadeInDownBig">858</span></h2>
                            <p class="disc">SUCCESSFUL STUDENTS PLACED</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center two pl--30">
                        <img src="assets/images/counterup/icon/02.svg" alt="Business_counter">
                        <div class="counter-details">
                            <h2 class="title"><span class="counter animated fadeInDownBig">20</span></h2>
                            <p class="disc">PARTNER SCHOOL</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center three pl--50">
                        <img src="assets/images/counterup/icon/03.svg" alt="Business_counter">
                        <div class="counter-details">
                            <h2 class="title"><span class="counter animated fadeInDownBig">5</span></h2>
                            <p class="disc">SKILLED COUNSELORS</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-end four">
                        <img src="assets/images/counterup/icon/04.svg" alt="Business_counter">
                        <div class="counter-details">
                            <h2 class="title happy"><span class="counter animated fadeInDownBig">1</span></h2>
                            <p class="disc">SATISFIED Students</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
            </div>
        </div>
    </div>
<!-- rts-counter up area end -->

<!-- start gallery section -->
<div class="rts-gallery-area rts-section-gap gallery-bg bg_image">
    <div class="container">
        <div class="row">
            <div class="rts-title-area gallery text-start pl_sm--20">
                <p class="pre-title">
                    Popular Projects
                </p>
                <h2 class="title">Our Completed Projects</h2>
            </div>
        </div>
        <div class="row mt--45">
            <div class="col-12">
                <div class="swiper mygallery mySwipers">
                    <div class="swiper-wrapper gallery">
                        <div class="swiper-slide">
                            <div class="row g-5 w-g-100">
                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="thumbnail-gallery">
                                        <img src="assets/images/gallery/gallery-01.jpg" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="assets/images/gallery/icon/success.png" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">Language Proficiency Achievements</h4>
                                        </a>
                                        <span>Case Study, Growth</span>
                                        <p class="disc">Language Proficiency Achievements showcase our success in
                                             helping students attain high fluency levels, opening doors to global opportunities.
                                        </p>
                                        <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-5 w-g-100">
                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="thumbnail-gallery">
                                        <img src="assets/images/gallery/gallery-03.jpg" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="assets/images/gallery/icon/success.png" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">Study Abroad Success Stories</h4>
                                        </a>
                                        <span>Case Study, Growth</span>
                                        <p class="disc">Study Abroad Success Stories highlight our students' achievements
                                             and experiences in top international institutions, paving the way for their global careers.
                                        </p>
                                        <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-5 w-g-100">
                                <div class="col-lg-7">
                                    <div class="thumbnail-gallery">
                                        <img src="assets/images/gallery/gallery-02.jpg" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="assets/images/gallery/icon/success.png" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">  Successful Student Placements</h4>
                                        </a>
                                        <span>Case Study, Growth</span>
                                        <p class="disc"> Student Placements highlight our success in guiding students to
                                             secure admissions in top institutions, ensuring their academic and career growth.</p>
                                        <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-5 w-g-100">
                                <div class="col-lg-7">
                                    <div class="thumbnail-gallery">
                                        <img src="assets/images/gallery/gallery-03.jpg" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="assets/images/gallery/icon/success.png" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">Collaborations with International Institutions</h4>
                                        </a>
                                        <span>Case Study, Growth</span>
                                        <p class="disc">But a very wide of business because it
                                            covers every human activity. Business is really concerned with the
                                            production.
                                        </p>
                                        <a class="rts-btn btn-primary" href="project-details.html">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start gallery section -->

<!-- start trusted client section -->
<!-- <div class="rts-trusted-client rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area-client text-center">
                    <p class="client-title">Our Trusted Clients</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="client-wrapper-one">
                <a href="#"><img src="assets/images/client/01.png" alt="business_ "></a>
                <a href="#"><img src="assets/images/client/02.png" alt="business_ "></a>
                <a href="#"><img src="assets/images/client/03.png" alt="business_ "></a>
                <a href="#"><img src="assets/images/client/04.png" alt="business_ "></a>
                <a href="#"><img src="assets/images/client/05.png" alt="business_ "></a>
                <a href="#"><img src="assets/images/client/06.png" alt="business_ "></a>
            </div>
        </div>
    </div>
</div> -->
<!-- end trusted client section -->

<!-- start team section -->
<div class="rts-team-area rts-section-gap bg-team">
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
        <div class="row g-5 mt--0">

            <div class="swiper mySwiperh1_team">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-single-one-start">
                            <div class="team-image-area">
                                <a href="team-details.html">
                                    <img src="assets/images/team/tm/01.jpeg" alt="Business_Team_single">
                                    <div class="team-social">
                                        <div class="main">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                        <div class="team-social-one">
                                            <i class="fab fa-youtube"></i>
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="single-details">
                                <a href="team-details.html">
                                    <h5 class="title">Bishal Dhamala</h5>
                                </a>
                                <p>Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-single-one-start">
                            <div class="team-image-area">
                                <a href="team-details.html">
                                    <img src="assets/images/team/tm/02.png" alt="Business_Team_single">
                                    <div class="team-social">
                                        <div class="main">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                        <div class="team-social-one">
                                            <i class="fab fa-youtube"></i>
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="single-details">
                                <a href="team-details.html">
                                    <h5 class="title">Dinesh Lohani</h5>
                                </a>
                                <p>Co-Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-single-one-start">
                            <div class="team-image-area">
                                <a href="team-details.html">
                                    <img src="assets/images/team/tm/03.jpeg" alt="Business_Team_single">
                                    <div class="team-social">
                                        <div class="main">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                        <div class="team-social-one">
                                            <i class="fab fa-youtube"></i>
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="single-details">
                                <a href="team-details.html">
                                    <h5 class="title">Prestige Burlakoti</h5>
                                </a>
                                <p>Deputy Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-single-one-start">
                            <div class="team-image-area">
                                <a href="team-details.html">
                                    <img src="assets/images/team/tm/04.jpg" alt="Business_Team_single">
                                    <div class="team-social">
                                        <div class="main">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                        <div class="team-social-one">
                                            <i class="fab fa-youtube"></i>
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="single-details">
                                <a href="team-details.html">
                                    <h5 class="title">Indira Lohani</h5>
                                </a>
                                <p>Consultant</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-single-one-start">
                            <div class="team-image-area">
                                <a href="team-details.html">
                                    <img src="assets/images/team/tm/05.jpeg" alt="Business_Team_single">
                                    <div class="team-social">
                                        <div class="main">
                                            <i class="fal fa-plus"></i>
                                        </div>
                                        <div class="team-social-one">
                                            <i class="fab fa-youtube"></i>
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="single-details">
                                <a href="team-details.html">
                                    <h5 class="title">Bikash Dhamala</h5>
                                </a>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end team section -->

<!-- rts features area start -->
<div class="rts-feature-area rts-section-gap">
    <div class="container-fluid padding-controler plr--120">
        <div class="row bg-white-feature  pt--120 pb--120">
            <div class="col-xl-6 col-lg-12">
                <div class="feature-left-area">
                    <img src="assets/images/feature/01.png" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="rts-title-area feature text-start pl--30 pl_sm--0">
                    <p class="pre-title">
                    EMPOWER YOUR EDUCATION JOURNEY
                    </p>
                    <h2 class="title feature-title">The Most Reliable and Efficient <br>
                    Educational Consultancy</h2>
                    <p>We offer top-notch consulting services tailored to your academic needs
                        . Our expert team specializes in strategic solutions that ensure educational success.
                         Partner with us to elevate your learning experience and achieve your academic goals.</p>

                </div>

                <div class="feature-one-wrapper pl--30 mt--40 pl_sm--0">
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Expert Guidance</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Comprehensive Support</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Cultural Integration</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Network Opportunities</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts features area end -->

<!-- start client feed back section -->
<div class="rts-client-feedback">
    <div class="container">
        <div class="row">
            <!-- start testimonials area -->
            <div class="col-lg-7">
                <div class="rts-title-area reviews text-start pl--30 pt--70">
                    <p class="pre-title">
                        Our Testimonials
                    </p>
                    <h2 class="title">Student’s Feedbacks</h2>

                    <!-- swiper area start -->
                    <div class="swiper mySwipertestimonial">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-inner">
                                    <p class="disc text-start">
                                    "At Shinjiru Educational Consultancy, we specialize in empowering students
                                     to thrive academically and professionally in Japan. Our commitment to quality service and success-driven strategies
                                     has garnered glowing reviews, making us a preferred choice for those pursuing educational
                                      and career opportunities in Japan."
                                    </p>
                                    <div class="testimonial-bottom-one">
                                        <div class="thumbnail">
                                            <!-- <img src="assets/images/testimonials/02.png" alt="business-testimonials"> -->
                                        </div>
                                        <div class="details">
                                            <a href="#">
                                                <h5 class="title">Dipak Palli Magar</h5>
                                            </a>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-inner">
                                    <p class="disc text-start">
                                    "Shinjiru Educational Consultancy Pvt. Ltd. is renowned for its unwavering
                                     commitment to guiding students towards successful academic pursuits and career 
                                     advancements in Japan. Our personalized approach,
                                     coupled with extensive expertise and excellent client feedback, 
                                     distinguishes us as a leading consultancy in the field."
                                    </p>
                                    <div class="testimonial-bottom-one">
                                        <div class="thumbnail">
                                            <!-- <img src="assets/images/testimonials/02.png" alt="business-testimonials"> -->
                                        </div>
                                        <div class="details">
                                            <a href="#">
                                                <h5 class="title">David Thapa</h5>
                                            </a>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-inner">
                                    <p class="disc text-start">
                                    "Shinjiru Educational Consultancy Pvt. Ltd. is your trusted partner for studying 
                                    and working in Japan. With expert guidance and comprehensive support, we ensure a
                                     seamless transition to academic success and career advancement in Japan.
                                     Our personalized approach and dedication to excellence have earned us
                                      positive reviews from students and professionals alike."
                                    </p>
                                    <div class="testimonial-bottom-one">
                                        <div class="thumbnail">
                                            <!-- <img src="assets/images/testimonials/02.jpeg" alt="business-testimonials"> -->
                                        </div>
                                        <div class="details">
                                            <a href="#">
                                                <h5 class="title">Pushpa Pandey</h5>
                                            </a>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- swiper area end -->
                </div>
            </div>
            <!-- end testimonials are -->
            <!-- images area -->
            <div class="col-lg-5">
                <div class="rts-test-one-image-inner">
                    <img src="assets/images/testimonials/01.png" alt="business_testimobials">
                </div>
            </div>
            <!-- image area end -->
        </div>
    </div>
</div>
<!-- start client feed back section End -->

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
<!-- blog area end -->

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
                    <div class="rts-title-area contact text-start">
                        <p class="pre-title">
                            Make An Appointment
                        </p>
                        <h2 class="title">Request a free quote</h2>
                    </div>
                    <div id="form-messages"></div>
                    <form id="contact-form" action="#" method="post">
                        <div class="name-email">
                            <input type="text" placeholder="Your Name" name="name" required>
                            <input type="email" placeholder="Email Address" name="email" required>
                        </div>
                        <input type="text" placeholder="Topic" name="subject">
                        <textarea placeholder="Type Your Message" name="message"></textarea>
                        <button type="submit" class="rts-btn btn-primary">Submit Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->

<!-- map area start -->
 <div class="rts-map-area bg-light-white">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- map area left -->
                    <div class="mapdetails-inner-one">
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
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d226029.2909363078!2d85.13927092454878!3d27.726310744203253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1900633612e7%3A0x34e0941a570c50be!2sShinjiru%20Educational%20Consultancy!5e0!3m2!1sen!2snp!4v1711093706556!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>

<!-- map area end -->



<!-- scripts end form hear -->
</body>


</html>
@endsection