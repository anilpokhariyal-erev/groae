<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'GroAE') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link href="{{ secure_asset('css/website/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ secure_asset('css/website/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ secure_asset('css/website/styles.css') }}" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ secure_asset('js/website/app.js') }}" crossorigin="anonymous"></script>
    @yield('js-imports')
    <script src="{{ secure_asset('js/website/validation.js') }}" crossorigin="anonymous"></script>
    <script src="{{ secure_asset('js/website/main_groae.js') }}" crossorigin="anonymous"></script>

</head>

<body>
    @if (!request()->routeIs(['customer.login', 'customer.forgotpassword', 'customer.signup', 'customer.password.reset']))
        <header class="mainheader">
            <nav class="navbar">
                <a href="{{ url('/') }}" class="nav-logo"> <img class="mainLogo"
                        src="{{ asset('images/GroAE_Logo.png') }}" alt=""></a>
                <ul class="nav-menu">
                    <div class="navContainer">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('explore-freezone') }}" class="nav-link">Explore Freezones </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('compare-freezone') }}" class="nav-link"
                                id="compare-freezone-btn">Compare
                                Freezones </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('calculate-licensecosts.index') }}" class="nav-link">Cost Calculator </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" id="nav-more-btn">More <img
                                    src="{{ asset('images/caret-downIcon.png') }}" alt=""></a>
                            <div class="subLinks">
                                <ul class="subUlLinksWrapper" id="myPopup">
                                    <li class="subInnrLinks">
                                        <a href="{{ route('page.content', 'about-us') }}">About us</a>
                                    </li>
                                    <li class="subInnrLinks">
                                        <a href="{{ route('page.content', 'why-groae') }}">Why GroAe</a>
                                    </li>
                                    <!--<li class="subInnrLinks">
                                        <a href="{{ route('pre_postinfo') }}">Pre and Post Incorporation Services</a>
                                    </li> -->
                                    <li class="subInnrLinks">
                                        <a href="{{ route('contact-us.index') }}">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </div>

                    <div class="rightHeader">
                        @if (Auth::guard('customer')->check())
                            <a id="showProfileDropDown" class="signupBtn"
                                style="border-radius: 27.5px;padding: 13px;">{{ strtoupper(implode('', array_map(fn($word) => $word[0], explode(' ', auth('customer')->user()->name)))) }}</a>
                            <div class="viewProfilePopup">
                                <ul class="viewProWrapper" id="myAccount">
                                    <li class="viewProTxt">
                                        <div class="userNameDiv">
                                            <a class="userNameTxt"
                                                href="{{ route('customer.profile.view') }}">{{ ucfirst(auth('customer')->user()->first_name) }}</a>
                                            <a class="viewAccTxt" href="{{ route('customer.profile.view') }}">View
                                                Account</a>
                                        </div>
                                    </li>
                                    <li>
                                        <form method="post" action="{{ route('customer.logout') }}">
                                            @csrf
                                            <div class="logoutDiv">
                                                <img src="{{ asset('images/logout-icon.png') }}" alt="">
                                                <button type="button" class="">
                                                    <a onclick="event.preventDefault();this.closest('form').submit();"
                                                        href="">Logout</a>
                                                </button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <button type="button" class="navItems sigBtn">
                                <a class="signInBtn" href="{{ route('customer.login') }}">Login</a>
                            </button>
                            <button type="button" class="navItems createBtn">
                                <a href="{{ route('customer.signup') }}" class="signupBtn">Create Account </a>
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
    @endif

    {{ $slot }}

    @if (!request()->routeIs(['customer.login', 'customer.forgotpassword', 'customer.signup', 'customer.password.reset']))
        <footer class="mainFooter">
            <div class="footerTop">
                <div class="footerLeft">
                    <div>
                        <img class="footerLogo" src="{{ asset('images/GroAE_Logo_Main.png') }}" alt="">
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
                        <a href="{{ route('page.content', 'about-us') }}">About Us</a>
                        <a href="{{ route('page.content', 'article-blogs') }}">Articles & Blogs</a>
                        <a href="{{ route('page.content', 'career') }}">Career</a>
                    </nav>
                </div>
                <div class="footerNav">
                    <h2>Policies</h2>
                    <nav><a href="{{ route('page.content', 'privacy-policy') }}">Privacy Policy</a>
                        <a href="{{ route('page.content', 'government-policy') }}">Government Policy</a>
                        <a href="{{ route('page.content', 'terms-and-conditions') }}">Terms & conditions</a>
                    </nav>
                </div>
                <div class="footerNav">
                    <h2>Support</h2>
                    <nav><a href="{{ route('page.content', 'faq') }}">FAQ’s</a>
                        <a href="{{ route('contact-us.index') }}">Contact Us</a>
                    </nav>
                </div>
            </div>
            <div class="footerBottom">
                <h3>©{{ date('Y') }} GroAE. All Rights Reserved.</h3>
            </div>
        </footer>
    @endif
    <div id="template_data" data-points="{{ htmlentities(config('app.url')) }}" style="display: none;"></div>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C7HRMH34BC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C7HRMH34BC');
</script>
</body>

</html>
