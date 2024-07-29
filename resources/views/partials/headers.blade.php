

<header class="header--sticky header-one">
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
                                <img src="assets/images/logo/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="main-header">
                            <nav class="nav-main mainmenu-nav d-none d-xl-block">
                                <ul class="mainmenu">
                                    <li class="#">
                                        <a href="/">Home</a>
                                    </li>
                                    <li><a href="#about-us">About Us</a></li>
                                    <li class="#">
                                        <a href="#services">Services</a>
                                    </li>
                                    <li class="#">
                                        <a href="#Project">Project</a>
                                    </li>
                                    <li class="#">
                                        <a href="#blog">Blog</a>
                                    </li>
                                    <li><a href="#contact">Contact</a></li>
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
        // Nepali time offset is UTC+5:45
        var now = new Date();
        var utc = now.getTime() + (now.getTimezoneOffset() * 60000);
        var nepaliTime = new Date(utc + (345 * 60000)); // 345 minutes is 5 hours and 45 minutes

        var day = nepaliTime.getDay(); // 0 = Sunday, 1 = Monday, ..., 6 = Saturday
        var hour = nepaliTime.getHours(); // Current hour (0-23)

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

        var searchButton = document.getElementById('search');
        var searchInput = document.querySelector('.search-input');

        searchButton.addEventListener('click', function() {
            if (searchInput.style.display === 'none' || searchInput.style.display === '') {
                searchInput.style.display = 'inline-block';
                searchInput.focus();
            } else {
                // Submit the form if the input is visible
                searchInput.closest('form').submit();
            }
        });

        // Hide search input when clicking outside
        document.addEventListener('click', function(event) {
            if (!searchInput.contains(event.target) && !searchButton.contains(event.target)) {
                searchInput.style.display = 'none';
            }
        });
    });
</script>

