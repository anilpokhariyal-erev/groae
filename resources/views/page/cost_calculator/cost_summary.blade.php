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
                            <a href="#" class="nav-link">Cost Calculator </a>
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

        <!-- blog details sec -->
        <section>
            <div class="costCalculateContainer">
                <div class="container">
                    <div class="backBtn ">
                        <a class="backAnchor" href="{{route('article_blogs')}}"><img src="{{ secure_asset('images/cheveron-right.png') }}" alt=""></a>
                        <h2 class="backTxt">Back</h2>
                    </div>
                    <div class="topHeading">
                        <h2 class="trendTxt">Summary</h2>
                    </div>
                    <div class="summaryTableContainer">
                        <table class="summTable">
                            <tr>
                                <th class="tHeadingTxt">Freezone</th>
                                <th class="tDetailTxt">Jafza Freezone</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td class="tHeadingTxt">License Type</td>
                                <td class="tDetailTxt">Business</td>
                                <td class="tDetailTxt">AED 5000</td>
                            </tr>
                            <tr>
                                <td class="tHeadingTxt">Packages</td>
                                <td class="tDetailTxt">Office</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tHeadingTxt lightTxt">Office Name</td>
                                <td class="tDetailTxt">Standard office</td>
                                <td class="tDetailTxt">AED 53760</td>
                            </tr>
                            <tr>
                                <td class="tHeadingTxt lightTxt">Insurance/Year</td>
                                <td class="tDetailTxt">Yes</td>
                                <td class="tDetailTxt">AED 100</td>
                            </tr>
                            <tr>
                                <td class="tHeadingTxt lightTxt">Name Plate</td>
                                <td class="tDetailTxt">Yes</td>
                                <td class="tDetailTxt">AED 500</td>
                            </tr>
                            <tr>
                                <td class="tHeadingTxt lightTxt">Security Deposit</td>
                                <td class="tDetailTxt">Yes</td>
                                <td class="tDetailTxt">AED 5,376</td>
                            </tr>
                            <tr>
                                <td class="tHeadingTxt">Visa Type</td>
                                <td class="tDetailTxt">Normal Visa (Validity: 2 yrs)</td>
                                <td class="tDetailTxt">AED 5000</td>
                            </tr>
                            <tr>
                                <td class="tHeadingTxt">Visa Activity</td>
                                <td class="tDetailTxt">Offer Letter</td>
                                <td class="tDetailTxt">AED 100</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="tDetailTxt">Transfer of Sponsership fee</td>
                                <td class="tDetailTxt">AED 920</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="tDetailTxt">Inside Country</td>
                                <td class="tDetailTxt">AED 780</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="tDetailTxt">Partner Visa</td>
                                <td class="tDetailTxt">AED 780</td>
                            </tr>
                            <tr>
                                <td class="tHeadingTxt">Additional Activities</td>
                                <td class="tDetailTxt">Company Immigration Card</td>
                                <td class="tDetailTxt">AED 2000</td>
                            </tr>
                            <tr>
                                <td class="totalTitleTxt">Actual Cost</td>
                                <td></td>
                                <td class="amntTxt">AED 74316</td>
                            </tr>
                        </table>
                    </div>
                    <div class="noteContainer">
                        <h3>Note:</h3>
                        <p><span>Initial Documents Required A-</span> Branch Formation: Application form (Fully Typed & Signed by the proposed manager/authorized signatory) EHS Form (Fully Typed & Signed by the proposed manager/authorized signatory)... <a class="readMoreTxt" href="#">Read More</a></p>
                    </div>
                    <div class="bannerBtns">
                        <a class="compBtn" href="{{ route('payment') }}">AI comparison</a>
                        <a class="compBtn" href="{{ route('payment') }}">Manual compare</a>
                        <a class="bookConsBtn" href="{{ route('payment') }}">Cost Calculator</a>
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

        <!-- modal popup -->
        <!-- when you click on read more this popup will open -->

        <!-- <div class="containerhoverlay">
            <div class="customInner">
                <div class="containerItem">
                    <div class="popupBody bodyCont">
                        <div class="popupInnrContnt">
                            <div class="costReadMoreDetail">
                                <h3>Initial Documents Required A- <span> Branch Formation: Application form (Fully Typed & Signed by the proposed manager/authorized signatory) EHS Form (Fully Typed & Signed by the proposed manager/authorized signatory) EHS Form (Fully Typed & Signed by the proposed manager/authorized signatory)Brief company profile & Project Summary (1 page is sufficient)Clear Passport Copy & residence visa copy (if any) of the branch Manager (valid for 6 months minimum)Company’s License copy (in case of branch of UAE based company)/Certificate of Formation copy (in case of branch of overseas based company) and List of Partners of the company Activity should be selected from Jafza Activity List (with permitted number of activities & groups)NOC from Sponsor for the branch manager (will be required after approval of application)In case of branch of UAE based company, the proposed activity should be similar to the activity of the parent company. KYC Form (Fully Typed)
                                    </span>
                                </h3>
                                <br>
                                <h3>B- FZE/FZCO Formation
                                    <span> (Individual Applicant):Application form (Fully Typed & Signed by the proposed manager/authorized signatory)EHS Form (Fully Typed & Signed by the proposed manager/authorized signatory)Brief Project Summary (1 page is sufficient)Clear Passport Copy & residence visa copy (if any) of Owner(s), Director(s), Manager and Secretary of the FZE/FZCO (valid for 6 months minimum)NOC from Sponsor for the Owner(s), Director(s), Manager and Secretary of the FZE/FZCO (will be required after approval of application)Activity should be selected from Jafza Activity List (with permitted number of activities & groups)KYC Form (Fully Typed)C- FZE/FZCO Formation (Non - Individual Applicant):Application form (Fully Typed & Signed by the proposed manager/authorized signatory)EHS Form (Fully Typed & Signed by the proposed manager/authorized signatory)Brief company profile & Project Summary (1 page is sufficient)Clear Passport Copy & residence visa copy (if any) of Director(s), Manager and Secretary of the FZE/FZCO (valid for 6 months minimum)NOC from Sponsor for Director(s), Manager and Secretary of the FZE/FZCO (will be required after approval of application)Company’s License copy (for UAE based company)/Certificate of Formation copy (for overseas based company)List of shareholders of the parent company Activity should be selected from Jafza Activity List (with permitted number of activities & groups)KYC Form (Fully Typed)</span>
                                </h3>

                            </div>

                        </div>
                    </div>
                    <div class="crossImgCont">
                        <img class="crossImg" src="{{ asset('images/cut-icon.png') }}" alt="">
                    </div>
                </div>

            </div>
        </div> -->
    </body>

    </html>
</x-website-layout>