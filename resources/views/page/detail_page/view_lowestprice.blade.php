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

        <!-- About Us Container -->
        <div class="aboutHeaderContainer">
            <div class="detailBannr">
                <img class="detailBannrImg" src="{{ asset('images/detail_bannr.png') }}" alt="">
                <div class="detailInnrWrappr">
                    <div class="container">
                        <div class="backBtn">
                            <a class="backAnchor" href="{{route('explore_freezone')}}"><img src="{{ secure_asset('images/cheveron-right.png') }}" alt=""></a>
                            <h2 class="backTxt">Back</h2>
                        </div>
                        <h3 class="bannrTxt">Dubai Internet City (DIC)
                            The Hub of Tech Innovation</h3>
                        <div class="bookBtns">
                            <button class="consultationBtn">
                                <a href="">Book Consultation</a>
                            </button>
                            <button class="calculateCostBtn">
                                <a href=""> <img src="{{ secure_asset('images/calculator-minimalistic-svgrepo-com.png') }}" alt="" />Calculate Cost</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- customer guide detail Banner -->
        <section>
            <div class="container">
                <div style="position: relative; z-index:0">
                    <div class="businessIncorpContainer" style="margin-top: 50px;">
                        <div>
                            <img src="{{ secure_asset('images/about-bannr.png') }}" class="aboutImageBannr" alt="">
                        </div>
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
                    <div class="settingList">
                        <ul class="settingListInnr" id="myDIV">
                            <li class="listTerms">
                                <a class="listItemsHeading" href="{{route('about_us')}}">About Freezone</a>
                            </li>
                            <li class="listTerms ">
                                <a class="listItemsHeading" href="{{route('benefits_details')}}">Benefits details</a>
                            </li>
                            <li class="listTerms">
                                <a class="listItemsHeading" href="{{route('business_licenses_information')}}">Business Licenses Information</a>
                            </li>
                            <li class="listTerms">
                                <a class="listItemsHeading" href="{{route('customer_guides')}}">Customer Guides</a>
                            </li>
                            <li class="listTerms">
                                <a class="listItemsHeading" href="{{route('rules_regulation')}}">Rules & Regulations</a>
                            </li>
                            <li class="listTerms">
                                <a class="listItemsHeading" href="{{route('facilities')}}">Facilities</a>
                            </li>
                            <li class="listTerms">
                                <a class="listItemsHeading" href="{{route('activities_information')}}">Activities information</a>
                            </li>
                            <li class="listTerms">
                                <a class="listItemsHeading" href="{{route('faq')}}">FAQ</a>
                            </li>
                            <li class="listTerms">
                                <a class="listItemsHeading" href="{{route('view_lowestprice')}}">View Lowest Price Package</a>
                            </li>
                        </ul>
                    </div>
                    <div class="detailContent">
                        <div class="detailHeading">
                            <h3>View Lowest Price Package</h3>
                        </div>
                        <div class="detailContntInnr">
                            <p>Welcome to Dubai Internet City (DIC), the Hub of Tech Innovation Freezone. We understand the importance of providing cost-effective solutions for businesses to thrive in this dynamic tech environment. Explore our lowest price package tailored to meet your needs and elevate your business to new heights</p>
                            <div style="margin-top: 20px;">
                                <h3 class="benefitDetailHeadingTxt" style="display: flex;gap:2px;">Freezone Name: <p> Dubai Internet City (DIC)</p>
                                </h3>
                            </div>
                            <div style="margin-top: 20px;">
                                <h3 class="benefitDetailHeadingTxt" style="display: flex;gap:2px;">Package Details <p> DIC Tech Starter Package</p>
                                </h3>
                                <ul class="actListItem">
                                    <li class="actListInnr">Business License Type: Tech Startup License</li>
                                    <li class="actListInnr">Office Space: Shared Desk in a State-of-the-Art Co-Working Space</li>
                                    <li class="actListInnr">License Duration: 1 Year</li>
                                    <li class="actListInnr">Visa Quota: Up to 3 Employee Visas</li>
                                    <li class="actListInnr">Access to Tech Ecosystem: Networking opportunities with industry leaders and tech innovators</li>
                                    <li class="actListInnr">Business Support: Dedicated Account Manager</li>
                                    <li class="actListInnr">Additional Services: Exclusive workshops and events</li>
                                </ul>
                                <p>This package is designed for startups and emerging tech companies looking to establish a presence in the heart of Dubai's tech community. Benefit from a thriving ecosystem, unparalleled networking opportunities, and a strategic location that fosters innovation.</p>
                            </div>
                            <div style="margin-top: 20px;">
                                <h3 class="benefitDetailHeadingTxt" style="display: flex;gap:2px;">Price: <p> AED 1,249 per month</p>
                                </h3>
                            </div>
                            <div>
                                <p>
                                    Take advantage of this limited-time offer to kickstart your tech journey in Dubai Internet City. For more details or to customize a package that suits your specific requirements, contact our dedicated team.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="compareIconWrapper">
                    <img src="{{ secure_asset('images/compare-icon.png') }}" alt="">
                    <h3>Compare</h3>
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