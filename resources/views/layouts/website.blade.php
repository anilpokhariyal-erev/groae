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
    @yield('css-imports')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ secure_asset('js/website/app.js') }}" crossorigin="anonymous"></script>
    @yield('js-imports')
    @yield('ai-js-imports')
    <script src="{{ secure_asset('js/website/validation.js') }}" crossorigin="anonymous"></script>
    <script src="{{ secure_asset('js/website/main_groae.js') }}" crossorigin="anonymous"></script>
    @yield('js-owl-imports')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
<style>
    .mainFooter {
        position: relative;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 80%; /* Slight stretch: width 100%, height 110% */
        max-width: 100%;  /* Ensures it doesn't exceed container's width */
        height: auto; /* Optional: ensures the image height adjusts proportionally */
    }

    @media screen and (min-width: 768px) {
        .mainFooter {
            max-height: 400px; /* Apply only for mobile screens */
        }
    }

    .mainFooter::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* background-color: rgba(0, 0, 0, 0.5); */
        z-index: 0; /* Ensure it's below the content */
    }

    .footerLeft, .footerNav {
        position: relative;
        z-index: 1; /* Ensure content stays above the overlay */
    }

    .select2-dropdown--below{
        border-radius: 5% !important;
        color: #304a6f !important;
    }
    .select2-search__field{
        border-radius: 10% !important;
        color: #304a6f !important;
    }
    .select2-dropdown--above{
        border-radius: 4% !important;
        color: #304a6f !important;
    }
    .select2-results__option--highlighted{
        background-color: #304a6f !important;
    }
</style>
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
                            <a href="{{ route('explore-freezones') }}" class="nav-link">Explore Freezones </a>
                        </li>
                       
                        <li class="nav-item">
                            <a href="{{ route('freezone.packages.index') }}" class="nav-link">Freezone Packages</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('article-blogs') }}" class="nav-link">Article & Blogs</a>
                        </li>
                        @php
                            $pages = \App\Models\StaticPage::where('visible_in_header',1)->get();
                            $excluded = [];
                        @endphp
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" id="nav-accounting-btn">
                                Accounting Services <img
                                    src="{{ asset('images/caret-downIcon.png') }}" alt=""></a>
                            <div class="subLinks">
                                <ul class="subUlLinksWrapper" id="accountPopup">
                                    @foreach($pages as $account_page)
                                        @if($account_page?->parent?->page_name=="Accounting Services")
                                        @php
                                            $excluded[] = $account_page->parent_id;
                                            $excluded[] = $account_page->id;
                                        @endphp
                                            <li class="subInnrLinks">
                                                <a href="{{ route('page.content', $account_page->slug) }}">
                                                    {{$account_page->page_name}}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" id="nav-other-btn">Other Services <img
                                    src="{{ asset('images/caret-downIcon.png') }}" alt=""></a>
                            <div class="subLinks">
                                <ul class="subUlLinksWrapper" id="otherPopup">
                                    @foreach($pages as $other_page)
                                        @if($other_page?->parent?->page_name=="Other Services")
                                        @php
                                            $excluded[] = $other_page->parent_id;
                                            $excluded[] = $other_page->id;
                                        @endphp
                                            <li class="subInnrLinks">
                                                <a href="{{ route('page.content', $other_page->slug) }}">
                                                    {{$other_page->page_name}}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" id="nav-more-btn">More <img
                                    src="{{ asset('images/caret-downIcon.png') }}" alt=""></a>
                            <div class="subLinks">
                                <ul class="subUlLinksWrapper" id="myPopup">
                                    @foreach($pages as $page)
                                    @if(!in_array($page->id, $excluded ?? []))
                                        <li class="subInnrLinks">
                                            <a href="{{ route('page.content', $page->slug) }}">
                                                {{$page->page_name}}
                                            </a>
                                        </li>
                                    @endif
                                    @endforeach

                                </ul>
                            </div>
                        </li>
                    </div>

                    <div class="rightHeader">
                        <!-- <button type="button" class="navItems sigBtn">
                            <a class="signupBtn" href="{{ route('contact-us.index') }}">Contact Us</a>
                        </button> -->
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
                                                <img src="{{ secure_asset('images/logout-icon.png') }}" alt="">
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
                            <button type="button" class="navItems createBtn">
                                <a href="{{ route('customer.signup') }}" class="signupBtn">SignUp</a>
                            </button>
                            <button type="button" class="navItems sigBtn">
                                <a class="signInBtn" href="{{ route('customer.login') }}">Login</a>
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
        <footer class="mainFooter" style="background-image: url('{{ asset('images/footer_bg.png') }}');">
            <div class="footerTop" >
                <div class="footerLeft">
                    <div>
                        <img class="footerLogo" src="{{ asset('images/GroAE_Logo_Main.png') }}" alt="">
                        <p class="footerTitle">Liwa Tower P.O. Box 901,
                            Abu Dhabi, UAE - 3430909</p>
                        <div class="socialLinks">
                            <a href="https://www.facebook.com/GroAEbusinesssetup/" target="_blank"><img src="{{ secure_asset('images/facebook.svg') }}" alt=""></a>
                            <a href="https://www.instagram.com/gro.ae" target="_blank"><img src="{{ secure_asset('images/instagram.svg') }}" alt=""></a>
                            <a href="https://www.youtube.com/@GroAE" target="_blank"><img src="{{ secure_asset('images/youtube.svg') }}" alt=""></a>
                            <a href="https://www.linkedin.com/company/groae/" target="_blank"><img src="{{ secure_asset('images/linkedin.svg') }}" alt=""></a>

                        </div>
                    </div>
                </div>
                
                @foreach ($footerParents as $parent)
                    <div class="footerNav">
                        <h2>{{ $parent->page_name }}</h2>
                        <nav>
                            @foreach ($parent->children as $child)
                                <a href="{{ route('page.content', $child->slug) }}">{{ $child->page_name }}</a>
                            @endforeach
                        </nav>
                    </div>
                @endforeach
      

            </div>
            <div class="footerBottom">
                <p>A Unit of Falcon International Consulting & Auditing L.L.C</p>
                <p>Copyright © Falcon International Consulting & Auditing L.L.C {{ date('Y') }}. All rights reserved.</p>
            </div>
        </footer>
    @endif
    <div id="template_data" data-points="{{ htmlentities(config('app.url')) }}" style="display: none;"></div>
<!-- Google tag (gtag.js) -->
 <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('google_analytics.gtag') }}"></script> 
 <script>   
 window.dataLayer = window.dataLayer || [];   
 function gtag(){dataLayer.push(arguments);}   
 gtag('js', new Date());   
 gtag('config', '{{ config("google_analytics.gtag") }}'); 
 </script>
</body>

</html>
