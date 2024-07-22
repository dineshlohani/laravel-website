@extends('layouts.app')

@section('title', 'About Us | Shinjiru Educational')

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

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">About Us</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="/">Home</a>
                        <span> / </span>
                        <a href="#" class="active">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts about us section start -->
    <div class="rts-about-area rts-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-v-inner">
                        <div class="image-area">
                            <img class="mt--110 img-1" src="assets/images/about/main/about-03.jpg" alt="BUsiness_image">
                            <img class="img-over" src="assets/images/about/main/about-04.jpg" alt="BUsiness_image">
                            <div class="goal-button-wrapper">
                                <div class="vedio-icone">
                                    <a id="play-video" class="video-play-button" href="#">
                                        <span></span>
                                    </a>
                                    <div id="video-overlay" class="video-overlay">
                                        <a class="video-overlay-close">×</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-progress-inner">
                        <div class="title-area">
                            <span>JUST A CONSULTANCY</span>
                            <h2 class="title">Get Consulting For Better
                                Abroad Study</h2>
                        </div>
                        <!-- inner start -->
                        <div class="inner">
                            <p class="disc">Shinjiru Educational Consultancy is a Kathmandu-based Overseas Educational Consultancy, 
                                dedicated to provide best solutions to students seeking for education in International educational institutions.</p> 
                                <p>Shinjiru is one of the Leading Overseas Educational Consultant, acknowledged for providing best 
                                    guidance and counselling to the students. You can study abroad in best educational hubs of the world, 
                                    including Japan, Korea, Australia, USA and Canada with us. Our expert mentors fully understand the pivotal
                                     role of education in deciding the career of a student and thus are always ready to help them in taking right decision.</p>
                            <div class="rts-progress-one-wrapper">
                                <div class="single-progress">
                                    <div class="progress-top">
                                        <p class="progress-title">Student Placement Success</p>
                                        <span class="persectage">70%</span>
                                    </div>
                                    <div class="meter cadetblue">
                                        <span data-progress="70" style="width:0;"></span>
                                    </div>
                                </div>
                                <div class="single-progress">
                                    <div class="progress-top">
                                        <p class="progress-title">Client Satisfaction</p>
                                        <span class="persectage">90%</span>
                                    </div>
                                    <div class="meter">
                                        <span data-progress="93" style="width:0;"></span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="rts-btn btn-primary">Make an Appointment</a>
                        </div>
                        <!-- end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about us section end -->

    <!-- rts services area start -->
    <div class="rts-service-area rts-section-gapBottom">
        <div class="container-fluid service-main about-service-width-controler">
            <div class="background-service service-three row">
                <div class="row g-5">
                    <div class="rts-title-area service-four text-center pt--40 pt_md--0 mt_sm--0 mt_md--0">
                        <p class="pre-title">
                            Our Services
                        </p>
                        <h2 class="title">What We Provide</h2>
                    </div>
                    <!-- start single Service -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pt--15 mb--80 mb_md--40 mb_sm--30">
                        <div class="service-one-inner-four">
                            <div class="big-thumbnail-area">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/service/07.jpg" alt="Business-service">
                                </a>
                                <div class="content">
                                    <img src="assets/images/service/icon/13.svg" alt="Business-icon">
                                    <h5 class="title">Japanese Language Courses</h5>
                                    <p class="disc">Comprehensive courses to prepare students for studying in Japan, covering all proficiency levels</p>
                                </div>
                                <a href="#" class="over_link"></a>
                            </div>
                            <a href="#" class="rts-btn btn-primary"> Read More<i
                                    class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- start single Service -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pt--15 mb--80 mb_md--40 mb_sm--30">
                        <div class="service-one-inner-four">
                            <div class="big-thumbnail-area">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/service/08.jpg" alt="Business-service">
                                </a>
                                <div class="content">
                                    <img src="assets/images/service/icon/14.svg" alt="Business-icon">
                                    <h5 class="title">Visa and Immigration Assistance</h5>
                                    <p class="disc">We offer comprehensive support to help you secure your student visa, ensuring a smooth and hassle-free process</p>
                                </div>
                                <a href="#" class="over_link"></a>
                            </div>
                            <a href="#" class="rts-btn btn-primary"> Read More<i
                                    class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- start single Service -->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12 pt--15 mb--80">
                        <div class="service-one-inner-four">
                            <div class="big-thumbnail-area">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/service/09.jpg" alt="Business-service">
                                </a>
                                <div class="content">
                                    <img src="assets/images/service/icon/15.svg" alt="Business-icon">
                                    <h5 class="title">Educational Consultancy</h5>
                                    <p class="disc">Personalized guidance for studying abroad, from university selection to application assistance</p>
                                </div>
                                <a href="#" class="over_link"></a>
                            </div>
                            <a href="#" class="rts-btn btn-primary"> Read More<i
                                    class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="cta-one-bg col-12">
                    <div class="cta-one-inner">
                        <div class="cta-left">
                            <h3 class="title animated fadeIn">Let’s discuss about how we can help
                                make your business better</h3>
                        </div>
                        <div class="cta-right">
                            <a class="rts-btn btn-white" href="{{ route('appointment') }}">Lets Work Togather</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts services area End -->

    <!-- rts team two area -->
    <div class="rts-team-area rts-section-gapBottom appoinment-team team-two">
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
            <div class="row g-5 mt--15 mt_sm--0">
                <!-- single team -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <!-- single team inner -->
                    <div class="team-inner-two">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/team/tm/01.jpeg" alt="">
                        </a>
                        <!-- Acquaintance area -->
                        <div class="acquaintance-area">
                            <div class="header">
                                <a href="#">
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
                <!-- single team -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <!-- single team inner -->
                    <div class="team-inner-two">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/team/tm/04.jpg" alt="">
                        </a>
                        <!-- Acquaintance area -->
                        <div class="acquaintance-area">
                            <div class="header">
                                <a href="#">
                                    <h5 class="title">Indira Lohani</h5>
                                </a>
                                <span>Consultant</span>
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
                <!-- single team -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <!-- single team inner -->
                    <div class="team-inner-two">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/team/tm/02.png" alt="">
                        </a>
                        <!-- Acquaintance area -->
                        <div class="acquaintance-area">
                            <div class="header">
                                <a href="#">
                                    <h5 class="title">Dinesh Lohani</h5>
                                </a>
                                <span>Co-Founder</span>
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
    <!-- rts team two area End -->

    <!-- rts faq section area -->
    <div class="rts-faq-section rts-section-gap rts-faq-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-two-inner">
                        <div class="title-area-faq">
                            <span class="sub">WHY CHOOSE US</span>
                            <h2 class="title">WE ARE EXPERIENCED  
                                <span class="sm-title">IN EDUCATIONAL <span> CONSULTANCY</span></span>
                            </h2>
                        </div>
                        <!-- faq accordion area -->
                        <div class="faq-accordion-area">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <span>01. </span> Extensive Expertise in Educational Consultancy
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        With over 8 years of experience in guiding students towards their academic goals,
                                         we have a deep understanding of the challenges and opportunities in the field of international education.
                                         Our expert counselors are dedicated to helping students navigate the complexities
                                          of university applications and admissions processes.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02. </span> Proven Track Record of Student Success
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        We have a robust track record of placing students in top universities around the world.
                                         Our results speak for themselves, with high acceptance rates
                                          and numerous success stories from our satisfied clients.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>03. </span> Commitment to Client Satisfaction and Long-Term Success
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Our commitment to excellence is reflected in the satisfaction of our clients.
                                         With over 1000 happy students and families, we pride ourselves on the positive feedback and testimonials we receive.
                                         We strive to exceed expectations and deliver exceptional service
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                            <span>04. </span> Comprehensive Support Services from Start to Finish
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        From selecting the right course and university to visa applications and pre-departure orientations,
                                         we provide end-to-end support to ensure a smooth transition for our students. Our personalized
                                         approach ensures each student receives the attention and guidance they need
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- faq accordion area end -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-faq-four">
                        <img src="assets/images/faq/02.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts faq section area End -->

    <!-- customers feed back area start -->
    <div class="rts-customer-feedback-area rts-section-gap bg-customer-feedback">
        <div class="container">
            <div class="row">
                <div class="rts-title-area feedback team text-center">
                    <p class="pre-title">
                        Feedbacks
                    </p>
                    <h2 class="title">Student Feedbacks</h2>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="testimopnial-wrapper-two">
                        <div class="test-header">
                            <div class="thumbnail">
                                <img src="assets/images/testimonials/02.png" alt="">
                            </div>
                            <div class="name-desig">
                                <h5 class="title">David Chand</h5>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="test-body">
                            <p class="disc">
                            “The team at Shinjiru Educational Consultancy is amazing! They provided me with all the resources and support 
                            I needed to master the Japanese language. Thanks to them, I am well-prepared for my exchange program in Japan.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="testimopnial-wrapper-two">
                        <div class="test-header">
                            <div class="thumbnail">
                                <img src="assets/images/testimonials/03.png" alt="">
                            </div>
                            <div class="name-desig">
                                <h5 class="title">David Smith</h5>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="test-body">
                            <p class="disc">
                                “Choosing Shinjiru Educational Consultancy was the best decision for my academic career. The instructors are incredibly knowledgeable, 
                                and the curriculum is perfectly tailored to help students succeed in Japan. I am grateful for the wonderful learning experience”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customers feed back area end -->

   

</body>

@endsection