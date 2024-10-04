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

        <!-- prepost information service -->
        <section>
            <div class="container">
                <div class="prepostContainer">
                    <div class="topHeading">
                        <h2 class="trendTxt">Pre and Post-Incorporation Services</h2>
                    </div>
                    <div class="prepostTab">
                        <ul>
                            <li class="activeTab">
                                <a href="" >All (12) </a>
                            </li>
                            <li>
                                <a href="">Pre-incorporation (4) </a>
                            </li>
                            <li>
                                <a href="">Post-incorporation (8) </a>
                            </li>
                        </ul>
                    </div>
                    <div class="searchInnrWrapper">
                        <div class="searchBlogLayer">
                            <div class="firstLayer prepostImg">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Company Name Reservation</h3>
                                <p class="blogDetail text-left">Reserve your preferred company name before the official incorporation process. Secure the identity of your business.</p>
                                <button class="viewDetailBtn" style="width: auto;"><a href="{{route('pre_postdetail')}}" class="viewInnrTxt">Read Full Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>

                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer prepostImg">
                                <img src="{{ secure_asset('images/modern-business-buildings-financial-district-2.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Legal Consultation for Freezone</h3>
                                <p class="blogDetail text-left">Get expert legal advice on setting up your business in the Freezone. Understand the legal requirements and implications.</p>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">Read Full Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer prepostImg">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Company Name Reservation</h3>
                                <p class="blogDetail text-left">Reserve your preferred company name before the official incorporation process. Secure the identity of your business.</p>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">Read Full Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>

                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer prepostImg">
                                <img src="{{ secure_asset('images/modern-business-buildings-financial-district-2.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Legal Consultation for Freezone</h3>
                                <p class="blogDetail text-left">Get expert legal advice on setting up your business in the Freezone. Understand the legal requirements and implications.</p>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">Read Full Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer prepostImg">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Company Name Reservation</h3>
                                <p class="blogDetail text-left">Reserve your preferred company name before the official incorporation process. Secure the identity of your business.</p>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">Read Full Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>

                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer prepostImg">
                                <img src="{{ secure_asset('images/modern-business-buildings-financial-district-2.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Legal Consultation for Freezone</h3>
                                <p class="blogDetail text-left">Get expert legal advice on setting up your business in the Freezone. Understand the legal requirements and implications.</p>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">Read Full Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer prepostImg">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Company Name Reservation</h3>
                                <p class="blogDetail text-left">Reserve your preferred company name before the official incorporation process. Secure the identity of your business.</p>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">Read Full Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>

                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer prepostImg">
                                <img src="{{ secure_asset('images/modern-business-buildings-financial-district-2.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Legal Consultation for Freezone</h3>
                                <p class="blogDetail text-left">Get expert legal advice on setting up your business in the Freezone. Understand the legal requirements and implications.</p>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">Read Full Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer prepostImg">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Company Name Reservation</h3>
                                <p class="blogDetail text-left">Reserve your preferred company name before the official incorporation process. Secure the identity of your business.</p>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">Read Full Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>

                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer prepostImg">
                                <img src="{{ secure_asset('images/modern-business-buildings-financial-district-2.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Legal Consultation for Freezone</h3>
                                <p class="blogDetail text-left">Get expert legal advice on setting up your business in the Freezone. Understand the legal requirements and implications.</p>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">Read Full Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer prepostImg">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Company Name Reservation</h3>
                                <p class="blogDetail text-left">Reserve your preferred company name before the official incorporation process. Secure the identity of your business.</p>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">Read Full Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>

                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer prepostImg">
                                <img src="{{ secure_asset('images/modern-business-buildings-financial-district-2.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Legal Consultation for Freezone</h3>
                                <p class="blogDetail text-left">Get expert legal advice on setting up your business in the Freezone. Understand the legal requirements and implications.</p>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">Read Full Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
</x-website-layout>