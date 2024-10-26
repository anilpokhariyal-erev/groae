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
                <a href="#" class="nav-logo"> <img class="mainLogo" src="{{ asset('images/GroAE_Logo.png') }}" alt=""></a>
                <ul class="nav-menu">
                    <div class="navContainer">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('explore_freezone')}}" class="nav-link">Explore Freezones </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('compare_freezone')}}" class="nav-link">Compare Freezones </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('calculate_licensecost')}}" class="nav-link">Cost Calculator </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="myFunction()">More <img src="{{ secure_asset('images/caret-downIcon.png') }}" alt=""></a>
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
                        @if(Auth::guard('customer')->check())

                        <a href="#" class="signupBtn" onclick="myFunction2()" style="border-radius: 27.5px;padding: 13px;">{{ucfirst(auth('customer')->user()->first_name)}}</a>
                        <div class="viewProfilePopup">
                            <ul class="viewProWrapper" id="myAccount">
                                <li class="viewProTxt">
                                    <div class="userNameDiv">
                                        <a class="userNameTxt" href="#">Sakshi Mishra </a>
                                        <a class="viewAccTxt" href="{{route('customer.profile.view')}}">View Account</a>
                                    </div>

                                </li>
                                <li>
                                    <div class="logoutDiv">
                                        <img src="{{ secure_asset('images/logout-icon.png') }}" alt="">
                                        <a href="#">Logout </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- 
                        <button type="button" class="navItems sigBtn">
                            <a class="signInBtn" href="{{route('customer.login')}}">Welcome {{ucfirst(auth('customer')->user()->first_name)}}</a>
                        </button> -->
                        <form method="POST" action="{{ route('customer.logout') }}">
                            @csrf
                            <!-- <button type="button" class="navItems createBtn">
                                <a onclick="event.preventDefault();this.closest('form').submit();" href="{{route('customer.logout')}}" class="signupBtn">Logout</a>
                            </button> -->
                        </form>
                        @else
                        <button type="button" class="navItems sigBtn">
                            <a class="signInBtn" href="{{route('customer.login')}}">Login</a>
                        </button>
                        <button type="button" class="navItems createBtn">
                            <a href="{{route('signup')}}" class="signupBtn">Create Account </a>
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

        <!-- banner -->
        <section>
            <div class="banner">
                <img class="bannrImg" src="{{ asset('images/709[Converted]-1.png') }}" alt="">
                <div class="bannerHeading">
                    <h2 class="headingTxt">GROAE, for all your business needs.</h2>
                    <p class="paragraphTxt" id='greeting'>Set up of your business is just a few steps away</p>
                    <div class="bannerBtns">
                        <a class="bookConsBtn" href="#">Book a Consultation</a>
                    </div>
                </div>
                <div class="bannerLayer">
                    <div class="innrLayer">
                        <img src="{{ secure_asset('images/bot1.png') }}" alt="">
                        <h3>AI search to help you find the best Freezone.</h3>
                    </div>
                    <div class="searchFields">
                        <form action="" class="searchingForm">
                            <div class="formContainer">
                                <select name="" id="">
                                    <option value="Location">Location</option>
                                </select>
                            </div>
                            <div class="formContainer">
                                <select name="" id="">
                                    <option value="Location">Location</option>
                                </select>
                            </div>
                            <div class="formContainer">
                                <select name="" id="">
                                    <option value="Location">Location</option>
                                </select>
                            </div>
                            <div class="formContainer">
                                <select name="" id="">
                                    <option value="Location">Location</option>
                                </select>
                            </div>
                            <div class="formContainer">

                                <a class="searchAnchor" href="{{route('search_result')}}"> <input type="submit" class="searchInput" value=""><img class="seatcIcon" src="{{ asset('images/seatc.png') }}" alt=""></a>
                            </div>
                            <div class="formContainer">
                                <img class="cursor" src="{{ asset('images/cross-icon.png') }}" alt="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>

        <!-- Business Incorporation -->
        <section>
            <div class="container">
                <div class="businessIncorpContainer">
                    <div class="corporateImgWrpper">
                        <img src="{{ secure_asset('images/business-incorporation.png') }}" alt="" class="corporateImg">
                    </div>
                    <div class="corporateInnrSection">
                        <h3>Business incorporation
                            starting at</h3>
                        <p>AED 8000</p>
                        <button class="exploreBtn"><a href="">Explore Freezones</a></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trending Freezones  -->
        <section>
            <div class="trendingContainer">
                <div class="topHeading">
                    <h2 class="trendTxt">Trending Freezones</h2>
                    <p class="trendDetails">Look up the Freezones that meets your needs </p>
                </div>
                <div class="container">
                    <div class="trendingBlog">
                        <div class="blogLayer">
                            <div class="topLayer">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                            </div>
                            <div class="bottomLayer">
                                <h3 class="blogHeading">Dubai Airport Freezone</h3>
                                <p class="blogDetail">Dubai Airport Freezone is a free economic zone in Dubai, United Arab Emirates, providing company formation and business setup services in Dubai.</p>
                                <button class="viewDetailBtn"><a href="" class="viewInnrTxt">View Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class="blogLayer">
                            <div class="topLayer">
                                <img src="{{ secure_asset('images/modern-business-buildings-financial-district-2.png') }}" alt="">
                            </div>
                            <div class="bottomLayer">
                                <h3 class="blogHeading">Hamriyah Freezone</h3>
                                <p class="blogDetail">The Hamriyah Free Zone is a free zone place in the city of Sharjah in the United Arab Emirates. Free Zone is 24 square kilometers in size and has a 14 meter deep port.</p>
                                <button class="viewDetailBtn"><a href="" class="viewInnrTxt">View Details <img src="{{ secure_asset('images/leftarrow.png') }}" alt=""></a></button>
                            </div>
                        </div>
                        <div class="blogLayer">
                            <div class="topLayer">
                                <img src="{{ secure_asset('images/office-buildings.png') }}" alt="">
                            </div>
                            <div class="bottomLayer">
                                <h3 class="blogHeading">Fujairah Freezone</h3>
                                <p class="blogDetail">Fujairah Free Zone is a special economic zone in Fujairah, which is one of the seven emirates that comprise the United Arab Emirates run by the Fujairah Free Zone Authority.</p>
                                <button class="viewDetailBtn"><a href="" class="viewInnrTxt">View Details <img src="{{ secure_asset('images/leftarrow.png') }}" alt=""></a></button>
                            </div>
                        </div>
                    </div>
                    <div class="commonViewMoreBtn">
                        <button class="viwBtn"><a href="{{route('trending-freezone')}}" class="viewMoreTxt">View More</a></button>
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

        <!-- We’re Here For You -->
        <section>
            <div class="businessProcessContainer">
                <div class="topHeading">
                    <h2 class="trendTxt">We’re Here For You</h2>
                    <p class="trendDetails">GROAE provides a seamless experience to our business partners</p>
                </div>
                <div class="container">
                    <div class="trendingBlog">
                        <div class="businnesProcessLayer">
                            <div class="topLayer-1">
                                <img src="{{ secure_asset('images/no-fee.png') }}" alt="">
                            </div>
                            <div class="bottomLayer">
                                <h3 class="blogHeading">Zero professional fees</h3>


                            </div>
                        </div>
                        <div class="businnesProcessLayer">
                            <div class="topLayer-1">
                                <img src="{{ secure_asset('images/registration.png') }}" alt="">
                            </div>
                            <div class="bottomLayer">
                                <h3 class="blogHeading">Hassle free registration</h3>

                            </div>
                        </div>
                        <div class="businnesProcessLayer">
                            <div class="topLayer-1">
                                <img src="{{ secure_asset('images/transparency.png') }}" alt="">
                            </div>
                            <div class="bottomLayer">
                                <h3 class="blogHeading">Transparent process</h3>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Business Cost?  -->
        <section>
            <div class="businessCost">
                <img class="graphImg" src="{{ asset('images/Mask group.png') }}" alt="">
                <div class="costAnalysisLeft">
                    <img class="illustrationImg" src="{{ asset('images/Illustration.png') }}" alt="">
                </div>
                <div class="costAnalysisRight">
                    <h2 class="bHeading">How much your Business Cost?</h2>
                    <p class="bTitle">Use the GROAE Cost Calculator to find out the cost of your business setup.
                        It’s the number one question we get asked. </p>
                    <h4 class="bInnrTitle">Find out in an instant.</h4>
                    <button class="CostBtn"> <a href="#">Calculate Cost</a></button>
                </div>
            </div>
        </section>

        <!-- Article & Blogs  -->
        <section>
            <div class="trendingContainer">
                <div class="topHeading">
                    <h2 class="trendTxt">Article & Blogs</h2>
                    <p class="trendDetails">Exploring trends and insights with our articles & blogs </p>
                </div>
                <div class="container">
                    <div class="trendingBlog">

                        <div class="blogLayer">
                            <div class="topLayer">
                                <img src="{{ secure_asset('images/visa.png') }}" alt="">
                            </div>
                            <div class="bottomLayer">
                                <h3 class="blogHeading">Ultimate Guide to Visa
                                    Renewal in the UAE</h3>
                                <p class="blogDetail">Working and living in the UAE (United Arab Emirates) can be a fantastic opportunity. Still, it can be challenging to navigate the visa
                                    renewal process.</p>
                                <button class="viewDetailBtn"><a href="{{route('blog_details')}}" class="viewInnrTxt">Read More
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>

                        <div class="blogLayer">
                            <div class="topLayer">
                                <img src="{{ secure_asset('images/panorama-down-town-dubai-modern-city-night.png') }}" alt="">
                            </div>
                            <div class="bottomLayer">
                                <h3 class="blogHeading">How to start a foreign
                                    company in Saudi Arabia</h3>
                                <p class="blogDetail">Looking for a vibrant and diverse environment to launch a new business as an expatriate? Saudi Arabia may be the perfect destination for you. In just the first three months...</p>
                                <button class="viewDetailBtn"><a href="" class="viewInnrTxt">Read More <img src="{{ secure_asset('images/leftarrow.png') }}" alt=""></a></button>
                            </div>
                        </div>
                        <div class="blogLayer">
                            <div class="topLayer">
                                <img src="{{ secure_asset('images/office-buildings.png') }}" alt="">
                            </div>
                            <div class="bottomLayer">
                                <h3 class="blogHeading">Saudi Arabia as a Hub of
                                    Business Growth & Innovation</h3>
                                <p class="blogDetail">Working and living in the UAE (United Arab Emirates) can be a fantastic opportunity. Still, it can be challenging to navigate the visa
                                    renewal process.</p>
                                <button class="viewDetailBtn"><a href="" class="viewInnrTxt">Read More <img src="{{ secure_asset('images/leftarrow.png') }}" alt=""></a></button>
                            </div>
                        </div>
                    </div>
                    <div class="commonViewMoreBtn">
                        <button class="viwBtn"><a href="{{route('article-blogs')}}" class="viewMoreTxt">View More</a></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- GROAE In Numbers -->
        <section>
            <div class="container">
                <div class="groaeNumbers">
                    <img class="countImg" src="{{ asset('images/groaenumber.png') }}" alt="">
                    <div class="numberLayer">
                        <h3>GROAE In Numbers</h3>
                        <div class="numberCount">
                            <div class="innrCount">
                                <h3>1500</h3>
                                <p>Clients served</p>
                            </div>
                            <div class="innrCount">
                                <h3>600</h3>
                                <p>Freezones onboarded</p>
                            </div>
                            <div class="innrCount">
                                <h3>45</h3>
                                <p>Industries served</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="mainFooter">

            <div class="footerTop">
                <div class="footerLeft">
                    <div>
                        <img src="{{ secure_asset('images/GroAE_Logo_Main.png') }}" alt="">
                        <p class="footerTitle">Liwa Tower P.O. Box 901,
                            Abu Dhabi, UAE - 3430909</p>
                        <div class="socialLinks">
                            <a href="#"><img src="{{ secure_asset('images/facebook.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ secure_asset('images/instagram.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ secure_asset('images/twitter.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ secure_asset('images/youtube.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ secure_asset('images/linkedin.svg') }}" alt=""></a>

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