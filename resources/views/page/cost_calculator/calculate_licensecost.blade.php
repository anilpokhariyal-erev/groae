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
                        <h2 class="trendTxt">Calculate License Cost</h2>
                    </div>
                    <form class="signupFormItems" method="post" action="{{ route('customer.register') }}">
                        @csrf
                        <div class="secondColumn costCalculateForm">
                            <div class="input_wrap w-100">
                                <select name="city" id="city" class="inputField2 cursor arrowPlace" aria-placeholder=" ">
                                    <option value="">Jafza Freezone</option>
                                </select>
                                <label for="city">Freezone</label>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('city')" />
                            </div>

                        </div>
                        <div class="secondColumn costCalculateForm">
                            <div class="input_wrap w-100">
                                <select name="state" id="state" class="inputField2 cursor arrowPlace">
                                    <option value="">Business</option>
                                </select>
                                <label for="state">License Type</label>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('state')" />
                            </div>
                        </div>
                        <div class="secondColumn costCalculateForm">
                            <div class="input_wrap w-100">
                                <select name="country" id="country" class="inputField2 cursor arrowPlace">
                                    <option value="">Office</option>

                                </select>
                                <label for="country">Packages</label>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('country')" />
                            </div>
                        </div>
                        <div class="secondColumn costCalculateForm">
                            <div class="form-group input_wrap w-100">
                                <input class="inputField2" id="address" value="{{old('address')}}" name="address" type="text" placeholder="Standard office ">
                                <label for="address">Office Name</label>
                                <p id="emailError" class="errorMessage"></p>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('address')" />
                            </div>
                        </div>
                        <div class="secondColumn costCalculateForm">
                            <div class="officeNameDetail">
                                <h3>Additional charges: <span> Insurance/Year, name plate , security deposit</span></h3>
                            </div>
                        </div>
                        <div class="secondColumn costCalculateForm">
                            <div class="input_wrap w-100">
                                <select name="country" id="country" class="inputField2 cursor arrowPlace">
                                    <option value="Aircraft">Aircraft & Train Trading</option>
                                    <option value="Building Materials Trading">Building Materials Trading</option>
                                    <option value="Chemicals Trading">Chemicals Trading</option>

                                </select>
                                <label for="country">Activity</label>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('country')" />
                            </div>
                        </div>
                        <div class="secondColumn costCalculateForm">
                            <div class="activityMultiSelctList">
                                <div class="activitySelct">
                                    <h3>Aircraft & Train Trading</h3>
                                    <img src="{{ secure_asset('images/close-blackicon.png') }}" alt="">
                                </div>
                                <div class="activitySelct">
                                    <h3>Building Materials Trading</h3>
                                    <img src="{{ secure_asset('images/close-blackicon.png') }}" alt="">
                                </div>
                                <div class="activitySelct">
                                    <h3>Chemicals Trading</h3>
                                    <img src="{{ secure_asset('images/close-blackicon.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="secondColumn costCalculateForm">
                            <div class="input_wrap w-100">
                                <select name="country" id="country" class="inputField2 cursor arrowPlace">
                                    <option value="">Normal Visa (Validity: 2 years)</option>

                                </select>
                                <label for="country">Visa Type</label>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('country')" />
                            </div>
                        </div>
                        <div class="secondColumn costCalculateForm">
                            <div class="input_wrap w-100">
                                <select name="country" id="country" class="inputField2 cursor arrowPlace">
                                    <option value="#">3</option>

                                </select>
                                <label for="country">Number of Visa Required</label>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('country')" />
                            </div>
                        </div>
                        <div class="secondColumn costCalculateForm">
                            <div class="input_wrap w-100">
                                <select name="country" id="country" class="inputField2 cursor arrowPlace">
                                    <option value="">Select Activity</option>
                                    <option value="">Offer Letter</option>
                                    <option value="">Transfer of sponsorship fee</option>
                                    <option value="">Inside country</option>
                                    <option value="">Partner visa</option>
                                </select>
                                <label for="country">Visa Activity</label>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('country')" />
                            </div>
                        </div>
                        <div class="secondColumn costCalculateForm">
                            <div class="activityMultiSelctList">
                                <div class="activitySelct">
                                    <h3>Offer Letter</h3>
                                    <img src="{{ secure_asset('images/close-blackicon.png') }}" alt="">
                                </div>
                                <div class="activitySelct">
                                    <h3>Transfer of sponsorship fee</h3>
                                    <img src="{{ secure_asset('images/close-blackicon.png') }}" alt="">
                                </div>
                                <div class="activitySelct">
                                    <h3>Inside country</h3>
                                    <img src="{{ secure_asset('images/close-blackicon.png') }}" alt="">
                                </div>
                                <div class="activitySelct">
                                    <h3>Partner visa</h3>
                                    <img src="{{ secure_asset('images/close-blackicon.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="secondColumn costCalculateForm">
                            <div class="input_wrap w-100">
                                <select name="country" id="country" class="inputField2 cursor arrowPlace">
                                    <option value="">Company Immigration Card</option>
                                </select>
                                <label for="country">Additional Activities</label>
                                <x-input-error class="mt-2 text-red" :messages="$errors->get('country')" />
                            </div>
                        </div>
                        <div class="bannerBtns">
                            <a class="bookConsBtn" href="{{ route('cost_summary') }}">Calculate Now</a>
                        </div>
                    </form>
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