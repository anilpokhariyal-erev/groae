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
                            <a href="#" class="nav-link" onclick="myFunction()">More <img src="{{ asset('images/caret-downIcon.png') }}" alt=""></a>
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


        <!-- blog details sec -->
        <section>
            <div class="blogDetailContainer">
                <div class="container">
                    <div class="backBtn ">
                        <a class="backAnchor" href="{{route('article_blogs')}}"><img src="{{ asset('images/cheveron-right.png') }}" alt=""></a>
                        <h2 class="backTxt">Back</h2>
                    </div>
                    <div class="blogDetailWrapper">
                        <div class="detailContainer1">
                            <div class="blogImage">
                                <img class="mainBlogImg" src="{{ asset('images/visa-UnitedArabEmirates(UAE).png') }}" alt="">
                            </div>
                            <div class="blogContnt">
                                <h2 class="articleHeadingTxt">Ultimate guide to Visa renewal in the
                                    United Arab Emirates (UAE)</h2>
                                <p class="articleDetailTxt">Working and living in the UAE (United Arab Emirates) can be a fantastic opportunity. Still, it can be challenging to navigate the visa renewal process. Suppose you’re hoping to extend your stay and continue your activities legally. In that case, this guide’s here to help you avoid penalties, fines, or even deportation. So what actually is involved with acquiring a visa renewal UAE?</p>

                                <p class="articleDetailTxt">From reasons for visa renewal types of visas to online renewal processes, this comprehensive guide gives you insights into everything you need to know about the UAE Visa renewal process. You’ll be armed with accurate and up-to-date information to ensure a smooth, hassle-free visa renewal experience. So, let’s get started and make your journey in the UAE a seamless one.</p>

                                <h3 class="innrArticleTxt">Introduction to the UAE Visa Renewal Process</h3>

                                <p class="articleDetailTxt">Suppose you live and work in the United Arab Emirates (UAE). In that case, you’ll need to get to grips with the visa renewal process. This is key if you want to extend your stay in the UAE and continue your activities legally. The good news is that the UAE government has made this process easier, with online services now available on the official government website and mobile apps.</p>
                                <h3 class="innrArticleTxt">Understanding Visa Renewal</h3>
                                <p class="articleDetailTxt">Visa renewal is all about extending the validity of your visa. It’s a step you’ll need to take if you want to stay in the UAE beyond the expiration date of your current visa. You’ll typically need to submit the necessary documents, pay the required fees, and undergo any required medical tests or background checks.
                                    <br><br>
                                    Start the visa renewal process well before expiration to avoid complications or delays. If you don’t renew your visa before it expires, you could face penalties, fines, and even deportation. So, it’s a good idea to seek advice from a legal professional or immigration advisor. They can give you accurate and up-to-date information on the requirements and procedures that apply to your situation.
                                </p>
                                <img class="articlImg" src="{{ asset('images/blog-detail-img.png') }}" alt="">
                                <h3 class="innrArticleTxt">Reasons for Visa Renewal in UAE</h3>
                                <p class="articleDetailTxt">You might need to renew your visa in the UAE for several reasons. These include employment, business, study, medical treatment, and family sponsorship. Each of these reasons corresponds to a specific type of visa, and the renewal process can vary depending on your visa type and circumstances. <br><br>
                                    For example, if you’re in the UAE for employment, you must renew your employment visa. You must renew your student visa if you’re studying in the country. Similarly, if you’re in the UAE for medical treatment or if you’re sponsoring a family member, you’ll need to renew your medical treatment visa or family sponsorship visa, respectively.
                                </p>
                            </div>
                        </div>
                        <div class="detailContainer2">
                            <div class="relatedArticlesTopic">
                                <h2>Related Articles & Blogs</h2>
                                <div class="searchBlogLayer articlLayr">
                                    <div class="firstLayer">
                                        <img style="width: 142px;height: 90px;" src="{{ asset('images/article-1.png') }}" alt="">
                                    </div>
                                    <div class="secondLayer">
                                        <h3 class="blogHeading text-left" style="font-size: 14px;">A 5 year multiple-entry Visa
                                            made available for visitors</h3>
                                        <p class="blogDetail text-left">Posted at Nov 13, 2023</p>
                                    </div>
                                </div>
                                <div class="searchBlogLayer articlLayr">
                                    <div class="firstLayer">
                                        <img style="width: 142px;height: 90px;" src="{{ asset('images/article-1.png') }}" alt="">
                                    </div>
                                    <div class="secondLayer ">
                                        <h3 class="blogHeading text-left" style="font-size: 14px;">A 5 year multiple-entry Visa
                                            made available for visitors</h3>
                                        <p class="blogDetail text-left">Posted at Nov 13, 2023</p>
                                    </div>
                                </div>
                                <div class="searchBlogLayer articlLayr">
                                    <div class="firstLayer">
                                        <img style="width: 142px;height: 90px;" src="{{ asset('images/article-1.png') }}" alt="">
                                    </div>
                                    <div class="secondLayer">
                                        <h3 class="blogHeading text-left" style="font-size: 14px;">A 5 year multiple-entry Visa
                                            made available for visitors</h3>
                                        <p class="blogDetail text-left">Posted at Nov 13, 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="relatedArticlesTopic" style="margin-top: 50px;">
                                <h2>Articles & Blogs by topics</h2>
                                <div class="articleList">
                                    <ul>
                                        <li>Investment (18)</li>
                                        <li>Business (50)</li>
                                        <li>Visa (5)</li>
                                        <li>Technology (40)</li>
                                        <li>Innovation (15)</li>
                                    </ul>
                                </div>
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