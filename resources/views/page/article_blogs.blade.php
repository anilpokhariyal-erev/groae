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

        <!-- Article & Blogs Banner -->
        <section>
            <div class="articleBlogBanner">
                <div class="articleBlogWrap">
                    <img class="abBannerImg" src="{{ asset('images/articleBanner.png') }}" alt="">
                </div>
                <div class="articleInnrWrapper">
                    <div class="container">
                        <div class="backBtn">
                            <a class="backAnchor" href="{{route('home')}}"><img src="{{ secure_asset('images/cheveron-right.png') }}" alt=""></a>
                            <h2 class="backTxt">Back</h2>
                        </div>
                        <div class="topHeading">
                            <h2 class="trendTxt">Article & Blogs</h2>
                            <p class="trendDetails">Exploring trends and insights with our articles & blogs </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- search blog and filter field -->
        <section>
            <div class="container">
                <div class="searchBlogWrapper">
                    <div class="exploreInput">
                        <input type="search" name="" id="">
                        <img src="{{asset('images/blue-search-icon.png')}}" alt="">
                    </div>
                    <div class="searchFilter">
                        <button>filter <img src="{{ secure_asset('images/sort_icon.png') }}" alt=""></button>
                    </div>
                </div>
            </div>
        </section>


        <!-- blogs tab -->
        <section>
            <div class="container">
                <div class="settingList">
                    <ul class="articleTab">
                        <li class="tabItems">
                            <a class=" tabInnrTxt" href="#">All (150)</a>
                        </li>
                        <li class="tabItems ">
                            <a class="tabInnrTxt" href="#">Investment (20)</a>
                        </li>
                        <li class="tabItems">
                            <a class="tabInnrTxt" href="#">Visa (5)</a>
                        </li>
                        <li class="tabItems">
                            <a class="tabInnrTxt" href="#">Business (50)</a>
                        </li>
                        <li class="tabItems">
                            <a class="tabInnrTxt" href="#">Technology (40)</a>
                        </li>
                        <li class="tabItems">
                            <a class="tabInnrTxt" href="#">Innovation (15)</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Article & Blogs  -->
        <section>
            <div class="container">
                <div class="trendingBlog">

                    <div>
                        <a href="{{route('blog_details')}}">
                            <div class="blogLayer articleBlog">
                                <div class="topLayer firstImgLayer">
                                    <img src="{{ secure_asset('images/visa.png') }}" alt="">
                                    <img class="cutoutImg" src="{{ asset('images/small-visaCut.png') }}" alt="">
                                </div>
                                <div class="bottomLayer">
                                    <h2 class="blogDateTxt">17 November 2023</h2>
                                    <h3 class="blogHeading">Ultimate Guide to Visa
                                        Renewal in the UAE</h3>
                                    <p class="blogDetail">Working and living in the UAE (United Arab Emirates) can be a fantastic opportunity. Still, it can be challenging to navigate the visa
                                        renewal process.</p>
                                    <button class="viewDetailBtn"><a href="" class="viewInnrTxt">Read More
                                            <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="blogLayer articleBlog">
                        <div class="topLayer firstImgLayer">
                            <img src="{{ secure_asset('images/panorama-down-town-dubai-modern-city-night.png') }}" alt="">
                            <img class="cutoutImg" src="{{ asset('images/tech-icon.png') }}" alt="">
                        </div>
                        <div class="bottomLayer">
                            <h2 class="blogDateTxt">17 November 2023</h2>
                            <h3 class="blogHeading">How to start a foreign
                                company in Saudi Arabia</h3>
                            <p class="blogDetail">Looking for a vibrant and diverse environment to launch a new business as an expatriate? Saudi Arabia may be the perfect destination for you. In just the first three months...</p>
                            <button class="viewDetailBtn"><a href="" class="viewInnrTxt">Read More <img src="{{ secure_asset('images/leftarrow.png') }}" alt=""></a></button>
                        </div>
                    </div>
                    <div class="blogLayer articleBlog">
                        <div class="topLayer firstImgLayer">
                            <img src="{{ secure_asset('images/office-buildings.png') }}" alt="">
                            <img class="cutoutImg" src="{{ asset('images/bussinss-icon.png') }}" alt="">
                        </div>
                        <div class="bottomLayer">
                            <h2 class="blogDateTxt">17 November 2023</h2>
                            <h3 class="blogHeading">Saudi Arabia as a Hub of
                                Business Growth & Innovation</h3>
                            <p class="blogDetail">Working and living in the UAE (United Arab Emirates) can be a fantastic opportunity. Still, it can be challenging to navigate the visa
                                renewal process.</p>
                            <button class="viewDetailBtn"><a href="" class="viewInnrTxt">Read More <img src="{{ secure_asset('images/leftarrow.png') }}" alt=""></a></button>
                        </div>
                    </div>
                    <div class="blogLayer articleBlog">
                        <div class="topLayer firstImgLayer">
                            <img src="{{ secure_asset('images/visa.png') }}" alt="">
                            <img class="cutoutImg" src="{{ asset('images/investment-icon.png') }}" alt="">
                        </div>
                        <div class="bottomLayer">
                            <h2 class="blogDateTxt">17 November 2023</h2>
                            <h3 class="blogHeading">Ultimate Guide to Visa
                                Renewal in the UAE</h3>
                            <p class="blogDetail">Working and living in the UAE (United Arab Emirates) can be a fantastic opportunity. Still, it can be challenging to navigate the visa
                                renewal process.</p>
                            <button class="viewDetailBtn"><a href="" class="viewInnrTxt">Read More
                                    <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="blogLayer articleBlog">
                        <div class="topLayer firstImgLayer">
                            <img src="{{ secure_asset('images/panorama-down-town-dubai-modern-city-night.png') }}" alt="">
                            <img class="cutoutImg" src="{{ asset('images/small-visaCut.png') }}" alt="">
                        </div>
                        <div class="bottomLayer">
                            <h2 class="blogDateTxt">17 November 2023</h2>
                            <h3 class="blogHeading">How to start a foreign
                                company in Saudi Arabia</h3>
                            <p class="blogDetail">Looking for a vibrant and diverse environment to launch a new business as an expatriate? Saudi Arabia may be the perfect destination for you. In just the first three months...</p>
                            <button class="viewDetailBtn"><a href="" class="viewInnrTxt">Read More <img src="{{ secure_asset('images/leftarrow.png') }}" alt=""></a></button>
                        </div>
                    </div>
                    <div class="blogLayer articleBlog">
                        <div class="topLayer firstImgLayer">
                            <img src="{{ secure_asset('images/office-buildings.png') }}" alt="">
                            <img class="cutoutImg" src="{{ asset('images/bussinss-icon.png') }}" alt="">
                        </div>
                        <div class="bottomLayer">
                            <h2 class="blogDateTxt">17 November 2023</h2>
                            <h3 class="blogHeading">Saudi Arabia as a Hub of
                                Business Growth & Innovation</h3>
                            <p class="blogDetail">Working and living in the UAE (United Arab Emirates) can be a fantastic opportunity. Still, it can be challenging to navigate the visa
                                renewal process.</p>
                            <button class="viewDetailBtn"><a href="" class="viewInnrTxt">Read More <img src="{{ secure_asset('images/leftarrow.png') }}" alt=""></a></button>
                        </div>
                    </div>
                    <div class="blogLayer articleBlog">
                        <div class="topLayer firstImgLayer">
                            <img src="{{ secure_asset('images/visa.png') }}" alt="">
                            <img class="cutoutImg" src="{{ asset('images/bussinss-icon.png') }}" alt="">
                        </div>
                        <div class="bottomLayer">
                            <h2 class="blogDateTxt">17 November 2023</h2>
                            <h3 class="blogHeading">Ultimate Guide to Visa
                                Renewal in the UAE</h3>
                            <p class="blogDetail">Working and living in the UAE (United Arab Emirates) can be a fantastic opportunity. Still, it can be challenging to navigate the visa
                                renewal process.</p>
                            <button class="viewDetailBtn"><a href="" class="viewInnrTxt">Read More
                                    <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="blogLayer articleBlog">
                        <div class="topLayer firstImgLayer">
                            <img src="{{ secure_asset('images/panorama-down-town-dubai-modern-city-night.png') }}" alt="">
                            <img class="cutoutImg" src="{{ asset('images/bussinss-icon.png') }}" alt="">
                        </div>
                        <div class="bottomLayer">
                            <h2 class="blogDateTxt">17 November 2023</h2>
                            <h3 class="blogHeading">How to start a foreign
                                company in Saudi Arabia</h3>
                            <p class="blogDetail">Looking for a vibrant and diverse environment to launch a new business as an expatriate? Saudi Arabia may be the perfect destination for you. In just the first three months...</p>
                            <button class="viewDetailBtn"><a href="" class="viewInnrTxt">Read More <img src="{{ secure_asset('images/leftarrow.png') }}" alt=""></a></button>
                        </div>
                    </div>
                    <div class="blogLayer articleBlog">
                        <div class="topLayer firstImgLayer">
                            <img src="{{ secure_asset('images/office-buildings.png') }}" alt="">
                            <img class="cutoutImg" src="{{ asset('images/tech-icon.png') }}" alt="">
                        </div>
                        <div class="bottomLayer">
                            <h2 class="blogDateTxt">17 November 2023</h2>
                            <h3 class="blogHeading">Saudi Arabia as a Hub of
                                Business Growth & Innovation</h3>
                            <p class="blogDetail">Working and living in the UAE (United Arab Emirates) can be a fantastic opportunity. Still, it can be challenging to navigate the visa
                                renewal process.</p>
                            <button class="viewDetailBtn"><a href="" class="viewInnrTxt">Read More <img src="{{ secure_asset('images/leftarrow.png') }}" alt=""></a></button>
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