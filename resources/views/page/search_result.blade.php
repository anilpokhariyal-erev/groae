<x-website-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Groae</title>

    </head>

    <body>
        <!-- header -->
        <header class="mainheader">
            <nav class="navbar">
                <a href="#" class="nav-logo"> <img class="mainLogo" src="{{ asset('images/GroAE_Logo.png') }}"
                        alt=""></a>
                <ul class="nav-menu">
                    <div class="navContainer">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('explore-freezone') }}" class="nav-link">Explore Freezones </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('compare-freezone') }}" class="nav-link">Compare Freezones </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Cost Calculator </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="myFunction()">More <img
                                    src="{{ asset('images/caret-downIcon.png') }}" alt=""></a>
                            <div class="subLinks">
                                <ul class="subUlLinksWrapper" id="myPopup">
                                    <li class="subInnrLinks">
                                        <a href="#">About us</a>
                                    </li>
                                    <li class="subInnrLinks">
                                        <a href="#">Why GroAe</a>
                                    </li>
                                    <li class="subInnrLinks">
                                        <a href="#">Pre and Post Incorporation Services</a>
                                    </li>
                                    <li class="subInnrLinks">
                                        <a href="#">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </div>

                    <div class="rightHeader">
                        @if (Auth::guard('customer')->check())
                            <button type="button" class="navItems sigBtn">
                                <a class="signInBtn" href="{{ route('customer.login') }}">Welcome
                                    {{ ucfirst(auth('customer')->user()->first_name) }}</a>
                            </button>
                            <form method="POST" action="{{ route('customer.logout') }}">
                                @csrf
                                <button type="button" class="navItems createBtn">
                                    <a onclick="event.preventDefault();this.closest('form').submit();"
                                        href="{{ route('customer.logout') }}" class="signupBtn">Logout</a>
                                </button>
                            </form>
                        @else
                            <button type="button" class="navItems sigBtn">
                                <a class="signInBtn" href="{{ route('customer.login') }}">Login</a>
                            </button>
                            <button type="button" class="navItems createBtn">
                                <a href="{{ route('signup') }}" class="signupBtn">Create Account </a>
                            </button>
                        @endif
                    </div>
                </ul>

                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>

        </header>


        <!-- 5 Freezones found as per your search -->
        <section>
            <div class="container">
                <div class="searchBlockContainer">
                    <div class="backBtn">
                        <a class="backAnchor" href="{{ route('home') }}"><img
                                src="{{ asset('images/cheveron-right.png') }}" alt=""></a>
                        <h2 class="backTxt">Back</h2>
                    </div>
                    <div class="searchHeader">
                        <h2>5 Freezones found as per your search</h2>
                        <p>Find the Freezones that suit your requirements.</p>
                    </div>
                    <div class="searchInnrWrapper">
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}"
                                    alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Dubai Airport Freezone</h3>
                                <p class="blogDetail text-left">Dubai Airport Freezone is a free economic zone in Dubai,
                                    United Arab Emirates, providing company formation and business setup services in
                                    Dubai.</p>
                                <div class="compareSearchOption">
                                    <button class="viewDetailBtn" style="width: auto;">
                                        <a href="" class="viewInnrTxt">View Details
                                            <img src="{{ asset('images/leftarrow.png') }}" alt="">
                                        </a>
                                    </button>
                                    <div class="compareInput">
                                        <label class="labelcontainer">Compare
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ asset('images/modern-business-buildings-financial-district-2.png') }}"
                                    alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Hamriyah Freezone</h3>
                                <p class="blogDetail text-left">The Hamriyah Free Zone is a free zone place in the city
                                    of Sharjah in the United Arab Emirates. Free Zone is 24 square kilometers in size
                                    and has a 14 meter deep port.</p>
                                <div class="compareSearchOption">
                                    <button class="viewDetailBtn" style="width: auto;">
                                        <a href="" class="viewInnrTxt">View Details
                                            <img src="{{ asset('images/leftarrow.png') }}" alt="">
                                        </a>
                                    </button>
                                    <div class="compareInput">
                                        <label class="labelcontainer">Compare
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ asset('images/office-buildings.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Fujairah Freezone</h3>
                                <p class="blogDetail text-left">Fujairah Free Zone is a special economic zone in
                                    Fujairah, which is one of the seven emirates that comprise the United Arab Emirates
                                    run by the Fujairah Free Zone Authority.</p>
                                <div class="compareSearchOption">
                                    <button class="viewDetailBtn" style="width: auto;">
                                        <a href="" class="viewInnrTxt">View Details
                                            <img src="{{ asset('images/leftarrow.png') }}" alt="">
                                        </a>
                                    </button>
                                    <div class="compareInput">
                                        <label class="labelcontainer">Compare
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour-1.png') }}"
                                    alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Dubai Hamriyah Freezone</h3>
                                <p class="blogDetail text-left">The Hamriyah Free Zone is a free zone place in the city
                                    of Sharjah in the United Arab Emirates. Free Zone is 24 square kilometers in size
                                    and has a 14 meter deep port.</p>
                                <div class="compareSearchOption">
                                    <button class="viewDetailBtn" style="width: auto;">
                                        <a href="" class="viewInnrTxt">View Details
                                            <img src="{{ asset('images/leftarrow.png') }}" alt="">
                                        </a>
                                    </button>
                                    <div class="compareInput">
                                        <label class="labelcontainer">Compare
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour-2.png') }}"
                                    alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Dubai Internet City</h3>
                                <p class="blogDetail text-left">DIFC is a prominent financial free zone that serves as
                                    a global gateway for financial services, offering a secure and business friendly
                                    environment.</p>
                                <div class="compareSearchOption">
                                    <button class="viewDetailBtn" style="width: auto;">
                                        <a href="" class="viewInnrTxt">View Details
                                            <img src="{{ asset('images/leftarrow.png') }}" alt="">
                                        </a>
                                    </button>
                                    <div class="compareInput">
                                        <label class="labelcontainer">Compare
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>


        <!-- Slider Container -->
        <section>
            <div class="container" style="position: relative; z-index:0">
                <div id="homePageSlider" class="owl-carousel owl-theme">
                    <div class="item">
                        <img class="sliderImg" src="{{ asset('images/slider-1.png') }}" />
                        <div class="sliderContent">
                            <h2 class="sliderInnrHeading">Get the Package of you choice
                                to setup your Business </h2>
                            <div class="cutoutDiv">
                                <img class="cutoutTxt" src="{{ asset('images/cutout.png') }}" alt="">
                                <h3 class="offTxt">20% Off</h3>
                            </div>
                            <h4 class="amountTitle">Starting From <span>AED 10,000</span></h4>
                            <button class="KnowMoreBtn"> <a href="#">Know More</a></button>
                        </div>
                    </div>
                    <div class="item">
                        <img class="sliderImg" src="{{ asset('images/slider-2.png') }}" />
                    </div>
                    <div class="item">
                        <img class="sliderImg" src="{{ asset('images/slider-3.png') }}" />
                    </div>

                </div>
            </div>

        </section>


        <!-- Footer -->
        <footer class="mainFooter">

            <div class="footerTop">
                <div class="footerLeft">
                    <div>
                        <img src="{{ asset('images/GroAE_Logo_Main.png') }}" alt="">
                        <p class="footerTitle">Liwa Tower P.O. Box 901,
                            Abu Dhabi, UAE - 3430909</p>
                        <div class="socialLinks">
                            <a href="#"><img src="{{ asset('images/facebook.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('images/instagram.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('images/twitter.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('images/youtube.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('images/linkedin.svg') }}" alt=""></a>

                        </div>
                    </div>
                </div>
                <div class="footerNav">
                    <h2>Quick Links</h2>
                    <nav>
                        <a href="/about-us">About Us</a>
                        <a href="/faq">Articles & Blogs</a>
                        <a href="/privacy-policy">Career</a>
                    </nav>
                </div>
                <div class="footerNav">
                    <h2>Policies</h2>
                    <nav><a href="/contact-us">Privacy Policy</a>
                        <a href="/">Government Policy</a>
                        <a href="/">Terms & conditions</a>
                    </nav>
                </div>
                <div class="footerNav">
                    <h2>Support</h2>
                    <nav><a href="/">FAQ’s</a>
                        <a href="/">Contact Us</a>
                    </nav>
                </div>
            </div>
            <div class="footerBottom">
                <p class="pTitle">©2023 GroAE. All Rights Reserved.</p>
            </div>
        </footer>
    </body>

    </html>
</x-website-layout>
