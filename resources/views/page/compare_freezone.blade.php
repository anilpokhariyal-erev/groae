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

        <!-- Compare Container -->
        <section>
            <div class="container">
                <div class="compareContainer">
                    <div class="compareInnrWrapper">
                        <div class="compareTableColumn-1">
                            <ul>
                                <h3 class="detailheadingTxt">Features</h3>

                                <li class="subHeadingTitle">
                                    <p class="subTxt">Type of license </p>
                                </li>
                                <li class="subHeadingTitle">
                                    <p class="subTxt">Number of Activity Groups includes </p>
                                </li>
                                <li class="subHeadingTitle">
                                    <p class="subTxt">Number of Activities includes </p>
                                </li>
                                <li class="subHeadingTitle">
                                    <p class="subTxt">Facilities</p>
                                </li>
                            </ul>

                        </div>
                        <div class="compareTableColumn-2">

                            <div class="compareTableColumnInnr-2">
                                <div class="selectTableImg">
                                    <img src="{{asset('images/compare-bg.png')}}" alt="">
                                </div>
                                <div class="selectFirstColumn">
                                    <ul>
                                        <h3 class="usersName">Dubai Internet City (DIC): The Hub of Tech Innovation</h3>

                                        <div class="userSubList">

                                            <li class="userList">
                                                <p>Business</p>
                                            </li>
                                            <li class="userList">
                                                <p>20</p>
                                            </li>
                                            <li class="userList">
                                                <p>15</p>
                                            </li>
                                            <li class="userList">
                                                <p>Real Estate, Logistics District</p>
                                            </li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="cutIconDiv">
                                    <img src="{{ secure_asset('images/cut-icon.png') }}" alt="">
                                </div>
                                <div class="compareSecondColumn">
                                    <img class="secondImg" src="{{asset('images/compare-bg2.png')}}" alt="">
                                    <div class="columnInnr" style="background: none;">
                                        <img src="{{ secure_asset('images/Maskgroup_2.png') }}" alt="">
                                        <h3>Dubai Internet City (DIC): The Hub of Tech Innovation</h3>
                                    </div>
                                    <p class="rupeesTxt">AED 1249 / Monthly</p>
                                    <div class="tickIconDiv">
                                        <img src="{{ secure_asset('images/tick_icon.png') }}" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="compareTableColumnInnr-2">
                                <div class="selectTableImg">
                                    <img src="{{asset('images/table-bg.png')}}" alt="">
                                </div>
                                <div class="selectFirstColumn">
                                    <ul>
                                        <h3 class="selectClr ">Dubai Media City (DMC): Where Creativity Meets Innovation</h3>
                                        <div class="userSubList">
                                            <li class="userList whiteTxt">
                                                <p>Business</p>
                                            </li>
                                            <li class="userList whiteTxt">
                                                <p>20</p>
                                            </li>
                                            <li class="userList whiteTxt">
                                                <p>15</p>
                                            </li>
                                            <li class="userList whiteTxt">
                                                <p>Real Estate, Logistics District</p>
                                            </li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="cutIconDiv">
                                    <img src="{{ secure_asset('images/cut-icon.png') }}" alt="">
                                </div>
                                <div class="compareSecondColumn">
                                    <img class="secondImg" src="{{asset('images/table-bg.png')}}" alt="">
                                    <div class="columnInnr" style="background: none;">
                                        <img src="{{ secure_asset('images/Maskgroup_2.png') }}" alt="">
                                        <h3 style="color: #fff;">Dubai Internet City (DIC): The Hub of Tech Innovation</h3>
                                    </div>
                                    <p class="rupeesTxt">AED 1249 / Monthly</p>
                                    <div class="tickIconDiv">
                                        <img src="{{ secure_asset('images/tick_icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="bannerBtns">
                                    <a class="bookConsBtn" href="#">Book a Consultation</a>
                                </div>
                            </div>
                            <div class="compareTableColumnInnr-2">
                                <div class="selectTableImg">
                                    <img src="{{asset('images/compare-bg.png')}}" alt="">
                                </div>
                                <div class="selectFirstColumn">
                                    <ul>
                                        <h3 class="usersName">Dubai Internet City (DIC): The Hub of Tech Innovation</h3>

                                        <div class="userSubList">

                                            <li class="userList">
                                                <p>Business</p>
                                            </li>
                                            <li class="userList">
                                                <p>20</p>
                                            </li>
                                            <li class="userList">
                                                <p>15</p>
                                            </li>
                                            <li class="userList">
                                                <p>Real Estate, Logistics District</p>
                                            </li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="cutIconDiv">
                                    <img src="{{ secure_asset('images/cut-icon.png') }}" alt="">
                                </div>
                                <div class="compareSecondColumn">
                                    <img class="secondImg" src="{{asset('images/compare-bg2.png')}}" alt="">
                                    <div class="columnInnr" style="background: none;">
                                        <img src="{{ secure_asset('images/Maskgroup_2.png') }}" alt="">
                                        <h3>Dubai Internet City (DIC): The Hub of Tech Innovation</h3>
                                    </div>
                                    <p class="rupeesTxt">AED 1249 / Monthly</p>
                                    <div class="tickIconDiv">
                                        <img src="{{ secure_asset('images/tick_icon.png') }}" alt="">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>

    </html>
</x-website-layout>