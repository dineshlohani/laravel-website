<!-- resources/views/partials/header.blade.php -->

<header class="header--sticky header-one ">
    <div class="header-top header-top-one bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-xl-block d-none">
                    <div class="left">
                        <div class="mail">
                            <a href="mailto:webmaster@example.com"><i class="fal fa-envelope"></i> shinjirueducational@gmail.com</a>
                        </div>
                        <div class="working-time" id="working-time">
                            <p><i class="fal fa-clock"></i> Working: 6.00am - 5.00pm &nbsp;&nbsp; </p>
                        </div>
                        <div id="status">  </div> <!-- New div for the status -->
                    </div>
                </div>
                <div class="col-lg-6 d-xl-block d-none">
                    <div class="right">
                        <ul class="top-nav">
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('about') }}">News</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                        <ul class="social-wrapper-one">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="mr--0" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main-one bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="thumbnail">
                        <a href="index-2.html">
                            <img src="assets/images/logo/logo.png" alt="shinjiru-logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                    <div class="main-header">
                        <nav class="nav-main mainmenu-nav d-none d-xl-block">
                            <ul class="mainmenu">
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Home</a>
                                    <ul class="submenu menu-link1">
                                        <li class="menu-item">
                                            <a class="tag" href="#">Multipages</a>
                                            <ul>
                                                <li><a href="/">Main Home</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="tag" href="#">Onepages</a>
                                            <ul>
                                                <li><a href="{{ route('home') }}">Main Home</a></li>
                                               
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Services</a>
                                    <ul class="submenu menu-link3">
                                        <li class="sub-droupdown">
                                            <a class="sub-menu-link" href="#">Our Service</a>
                                            <ul class="submenu third-lvl">
                                                <li><a href="{{ route('serviceone') }}">Service 1</a></li>
                                                <li><a href="{{ route('servicetwo') }}">Service 2</a></li>
                                                <li><a href="{{ route('servicethree') }}">Service 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('service') }}">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Pages</a>
                                    <ul class="submenu menu-link">
                                        <li class="menu-item">
                                            <a class="tag" href="#">Pages</a>
                                            <ul>
                                                <li><a href="{{ route('appointment') }}">Appointment</a></li>
                                                <li><a href="{{ route('about') }}">About Us</a></li>
                                                <li><a href="{{ route('serviceone') }}">Our Services</a></li>
                                                <li><a href="{{route('testimonial')}}">Testimonial</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="tag" href="#">Our Teams</a>
                                            <ul>
                                                <li><a href="{{route('team')}}">Team Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Elements</a>
                                    <ul class="submenu menu-link2">
                                        <li class="menu-item">
                                            <ul>
                                                <li><a href="{{ route('addressBox') }}">Address Box</a></li>
                                                <li><a href="{{route('blogSlider')}}">Blog Slider</a></li>
                                                <li><a href="{{route('video')}}">Video Addon</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <ul>
                                                <li><a href="{{ route('heading') }}">Heading</a></li>
                                                <li><a href="{{ route('cta') }}">Call To Action</a></li>
                                                <li><a href="{{ route('contactForm') }}">Contact Form</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <ul>
                                                <li><a href="{{route('ourcompany')}}">Our Company</a></li>
                                                <li><a href="{{ route('counter') }}">Counter Up</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="nav-item" href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="button-area">
                        <button id="search" class="rts-btn btn-primary-alta"><i class="far fa-search"></i></button>
                        
                            <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Get Quote</a>
                            <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                <img class="menu-dark" src="assets/images/icon/menu.png" alt="Menu-icon">
                                <img class="menu-light" src="assets/images/icon/menu-light.png" alt="Menu-icon">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date();
        var day = today.getDay(); // 0 = Sunday, 1 = Monday, ..., 6 = Saturday
        var hour = today.getHours(); // Current hour (0-23)

        var workingTimeDiv = document.querySelector('.working-time p');
        var statusText = document.createElement('span');

        if (day === 6 || hour < 6 || hour >= 17) { // If today is Saturday or before 6:00 AM or after 5:00 PM
            statusText.textContent = ' Office Closed';
            statusText.style.color = 'black';
        } else {
            statusText.textContent = ' Office Open';
            statusText.style.color = 'yellow';
        }

        workingTimeDiv.appendChild(statusText);
    });

    
</script>

