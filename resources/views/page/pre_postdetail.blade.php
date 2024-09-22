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

        <!-- prepost information service -->
        <section>
            <div class="container">
                <div class="prepostContainer">
                    <div class="backBtn">
                        <a class="backAnchor" href="{{route('pre_postinfo')}}"><img src="{{ asset('images/cheveron-right.png') }}" alt=""></a>
                        <h2 class="backTxt">Back</h2>
                    </div>
                    <div class="preDetailImg">
                        <img src="{{ asset('images/prepostBannr.png') }}" alt="">
                    </div>
                    <div class="prepostHeading">
                        <h2>Company Name Reservation</h2>
                        <span>Pre-incorporation</span>
                    </div>
                    <div class="prepostDetailWrapper">
                        <div class="prepostInnrDetailContnt">
                            <h3>About Services: <span> DIC prioritizes the protection of intellectual property rights. Companies operating within the Freezone are required to respect and abide by copyright, trademark, and patent laws to promote innovation and safeguard the interests of all stakeholders.</span>
                            </h3>
                        </div>

                        <div class="prepostInnrDetailContnt">
                            <h3>About Services: <span> DIC prioritizes the protection of intellectual property rights. Companies operating within the Freezone are required to respect and abide by copyright, trademark, and patent laws to promote innovation and safeguard the interests of all stakeholders.</span>
                            </h3>
                            <h3>About Services: <span> DIC prioritizes the protection of intellectual property rights. Companies operating within the Freezone are required to respect and abide by copyright, trademark, and patent laws to promote innovation and safeguard the interests of all stakeholders.</span>
                            </h3>
                            <h3>About Services: <span> DIC prioritizes the protection of intellectual property rights. Companies operating within the Freezone are required to respect and abide by copyright, trademark, and patent laws to promote innovation and safeguard the interests of all stakeholders.</span>
                            </h3>
                            <h3>About Services: <span> DIC prioritizes the protection of intellectual property rights. Companies operating within the Freezone are required to respect and abide by copyright, trademark, and patent laws to promote innovation and safeguard the interests of all stakeholders.</span>
                            </h3>
                        </div>

                    </div>
                    <div class="prepostImgBannr">
                        <ul class="prepostUl">
                            <li class="image_wrapper">
                                <img class="blockImg" src="{{ asset('images/pre-block1.png') }}" alt="" />
                            </li>
                            <li class="image_wrapper">
                                <img class="blockImg" src="{{ asset('images/pre-block2.png') }}" alt="" />
                            </li>
                            <li class="image_wrapper">
                                <img class="blockImg" src="{{ asset('images/pre-block3.png') }}" alt="" />
                            </li>
                            <li class="image_wrapper">
                                <img class="blockImg" src="{{ asset('images/pre-block4.png') }}" alt="" />
                            </li>
                            <li class="image_wrapper">
                                <img class="blockImg" src="{{ asset('images/pre-block5.png') }}"alt="" />
                                <div class="overlay overlay_2">
                                    <h3>+6 more</h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="prepostBtns">
                        <div class="bannerBtns" style="margin-top: 0px;">
                            <a class="bookConsBtn" href="#">Book a Consultation</a>
                        </div>
                        <div class="commonViewMoreBtn" style="margin-top: 0px;">
                            <ul class="pager">
                                <li><a class="preTxt" href="#">Previous</a></li>
                                <li><a class="neTxt" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
</x-website-layout>