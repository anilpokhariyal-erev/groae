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
                        <button type="button" class="navItems sigBtn">
                            <a class="signInBtn" href="{{route('customer.login')}}">Welcome {{ucfirst(auth('customer')->user()->first_name)}}</a>
                        </button>
                        <form method="POST" action="{{ route('customer.logout') }}">
                            @csrf
                            <button type="button" class="navItems createBtn">
                                <a onclick="event.preventDefault();this.closest('form').submit();" href="{{route('customer.logout')}}" class="signupBtn">Logout</a>
                            </button>
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

        <!-- Payment sec -->
        <section>
            <div class="costCalculateContainer">
                <div class="container">
                    <div class="backBtn ">
                        <a class="backAnchor" href="{{route('article_blogs')}}"><img src="{{ secure_asset('images/cheveron-right.png') }}" alt=""></a>
                        <h2 class="backTxt">Back</h2>
                    </div>
                    <div class="topHeading">
                        <h2 class="trendTxt">Payments</h2>
                    </div>
                    <div class="payemtContnt">
                        <div class="payementFrame">
                            <h3>Jafza Freezone</h3>
                            <p>Amount: AED <span>70002</span></p>
                        </div>
                        <div class="payementFrame">
                            <h3>Legal Consultation for Freezone</h3>
                            <p>Amount: AED <span>3249</span></p>
                        </div>
                    </div>
                    <div class="totalAmt">
                        <h3>Total Amount: <span>AED 73000</span></h3>
                    </div>
                    <div class="bannerBtns">
                        <a class="bookConsBtn" href="{{ route('payment_mode') }}">Proceed for Payment</a>
                    </div>

                    <div class="topHeading" style="margin-top: 80px;">
                        <h2 class="trendTxt">Pre-incorporation services</h2>
                    </div>
                    <div class="searchInnrWrapper">
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Company Name Reservation</h3>
                                <p class="blogDetail text-left">Reserve your preferred company name before the official incorporation process. Secure the identity of your business.</p>
                                <h4 class="rateTxt">AED 1289</h4>
                                <div class="compareInput">
                                    <label class="labelcontainer" style="color: #4875AF;">Add for Payment
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ secure_asset('images/modern-business-buildings-financial-district-2.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Legal Consultation for Freezone</h3>
                                <p class="blogDetail text-left">Get expert legal advice on setting up your business in the Freezone. Understand the legal requirements and implications.</p>
                                <h4 class="rateTxt">AED 3249</h4>
                                <div class="compareInput">
                                    <label class="labelcontainer" style="color: #4875AF;">Add for Payment
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                            </div>
                        </div>




                    </div>
                    <div class="commonViewMoreBtn">
                        <ul class="pager">
                            <li><a class="preTxt" href="#">Previous</a></li>
                            <li><a class="neTxt" href="#">Next</a></li>
                        </ul>
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