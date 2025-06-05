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

        <!-- filter freezone Items -->
        <section>
            <div class="filterItemContainer">
                <div class="searchFields">
                    <form action="" class="searchingForm">
                        <div class="formContainer">
                            <select name="" id="" class="selctBg">
                                <option value="Location">Location</option>
                            </select>
                        </div>
                        <div class="formContainer">
                            <select name="" id="" class="selctBg">
                                <option value="Location">License type</option>
                            </select>
                        </div>
                        <div class="formContainer">
                            <select name="" id="" class="selctBg">
                                <option value="Location">Business Service</option>
                            </select>
                        </div>
                        <div class="formContainer">
                            <select name="" id="" class="selctBg">
                                <option value="Location">Visa</option>
                            </select>
                        </div>
                        <div class="formContainer">
                            <a class="searchAnchor" href="#"> <input type="submit" class="searchInput" value=""><img class="seatcIcon" src="{{ asset('images/seatc.png') }}" alt=""></a>
                        </div>
                        <div class="formContainer">
                            <img class="cursor" style="border-radius: 15px; background: rgba(99, 140, 192, 0.16);" src="{{ asset('images/cross-icon.png') }}" alt="">
                        </div>
                    </form>
                </div>

            </div>

        </section>

        <!-- explore freezone items -->
        <section>
            <div class="exploreItemsContainer">
                <div class="AIHeader">
                    <div class="hTxt">
                        <img src="{{ secure_asset('images/bot-2.png') }}" alt="">
                        <h3>AI search to help you find the best Freezone.</h3>
                    </div>
                    <div class="pTxt">
                        <p>Find the Freezones that suit your requirements.</p>
                    </div>
                </div>
                <div class="container">
                    <div class="searchInnrWrapper">
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Dubai Airport Freezone</h3>
                                <p class="blogDetail text-left">Dubai Airport Freezone is a free economic zone in Dubai, United Arab Emirates, providing company formation and business setup services in Dubai.</p>
                                <h4 class="rateTxt">Starting @AED 1000</h4>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">View Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ secure_asset('images/modern-business-buildings-financial-district-2.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Hamriyah Freezone</h3>
                                <p class="blogDetail text-left">The Hamriyah Free Zone is a free zone place in the city of Sharjah in the United Arab Emirates. Free Zone is 24 square kilometers in size and has a 14 meter deep port.</p>
                                <h4 class="rateTxt">Starting @AED 1000</h4>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">View Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ secure_asset('images/office-buildings.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Fujairah Freezone</h3>
                                <p class="blogDetail text-left">Fujairah Free Zone is a special economic zone in Fujairah, which is one of the seven emirates that comprise the United Arab Emirates run by the Fujairah Free Zone Authority.</p>
                                <h4 class="rateTxt">Starting @AED 1000</h4>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">View Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour-1.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left">Dubai Hamriyah Freezone</h3>
                                <p class="blogDetail text-left">The Hamriyah Free Zone is a free zone place in the city of Sharjah in the United Arab Emirates. Free Zone is 24 square kilometers in size and has a 14 meter deep port.</p>
                                <h4 class="rateTxt">Starting @AED 1000</h4>
                                <button class="viewDetailBtn" style="width: auto;"><a href="" class="viewInnrTxt">View Details
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="container">
                    <div class="searchFreezoneWrapper">
                        <input class="sInput" type="text" placeholder="Search freezones by keywords" name="" id="">
                        <img class="sImg" src="{{asset('images/blue-search-icon.png')}}" alt="">
                    </div>
                </div>
                <div class="container">
                    <div class="searchInnrWrapper compareWrapper">
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <a href="{{route('about_us')}}">
                                    <h3 class="blogHeading text-left text-decoration cursor">Dubai Internet City (DIC): The Hub of Tech Innovation</h3>
                                </a>
                                <p class="blogDetail text-left">DIC is a dynamic free zone fostering technological advancement, attracting global tech giants, startups, and entrepreneurs with state-of-the-art infrastructure and business support services.</p>
                                <h4 class="rateTxt">Starting @AED 1000</h4>
                                <div class="compareInput">
                                    <label class="labelcontainer">Compare
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ secure_asset('images/modern-business-buildings-financial-district-2.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left text-decoration cursor">Dubai Media City (DMC): Where Creativity Meets Innovation</h3>
                                <p class="blogDetail text-left">DMC offers a creative haven for media, marketing, and entertainment companies, providing a collaborative environment and cutting-edge facilities for content creation and distribution.</p>
                                <h4 class="rateTxt">Starting @AED 1000</h4>
                                <div class="compareInput">
                                    <label class="labelcontainer" for="chkPassport">Compare
                                        <input type="checkbox" id="chkPassport">
                                        <span class="checkmark"></span>
                                    </label>

                                    <!-- compareBox After clicking -->
                                    <div class="compareBox" id="dvPassport" style="display: none">
                                        <div class="selectBoxContrller" id="txtPassportNumber">
                                            <div class="compareItemWrapper">
                                                <div class="compareItem">
                                                    <img class="itemImg-1" src="{{ asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                                                    <h3>Dubai Internet City (DIC): The Hub of Tech Innovation</h3>

                                                </div>
                                                <div>
                                                    <img class="cutImg" src="{{ asset('images/cut-icon.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="addMoreWrapper">
                                                <div class="addItemInnr">
                                                    <img class="itemImg-2" src="{{ asset('images/add-icon.png') }}" alt="">
                                                    <h3>Add another freezone to compare</h3>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="compareNow">
                                            <button class="comBtn"><a href="#">Compare Now</a></button>
                                            <img class="cursor" style="border-radius: 15px; background: #FFF;" src="{{ asset('images/cross-icon.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ secure_asset('images/office-buildings.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left text-decoration cursor">Dubai Internet City: "The Silicon Oasis of the Middle East"</h3>
                                <p class="blogDetail text-left">Dubai Internet City is a leading technology free zone that nurtures innovation and supports the growth of IT and digital businesses.</p>
                                <h4 class="rateTxt">Starting @AED 1000</h4>
                                <div class="compareInput">
                                    <label class="labelcontainer" for="chkPassport">Compare
                                        <input type="checkbox" id="chkPassport">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour-1.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <h3 class="blogHeading text-left text-decoration cursor">Dubai International Financial Centre (DIFC)</h3>
                                <p class="blogDetail text-left">DIFC is a prominent financial free zone that serves as a global gateway for financial services, offering a secure and business-friendly environment.</p>
                                <h4 class="rateTxt">Starting @AED 1000</h4>
                                <div class="compareInput">
                                    <label class="labelcontainer">Compare
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="searchBlogLayer">
                            <div class="firstLayer">
                                <img src="{{ secure_asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour-2.png') }}" alt="">
                            </div>
                            <div class="secondLayer">
                                <a href="#">
                                    <h3 class="blogHeading text-left text-decoration cursor">Dubai Design District (d3)</h3>
                                </a>
                                <p class="blogDetail text-left">D3 is an incubator for the design, fashion, art, and luxury sectors, supporting emerging and established talent in the creative industries.</p>
                                <h4 class="rateTxt">Starting @AED 1000</h4>
                                <div class="compareInput">
                                    <label class="labelcontainer">Compare
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- pagination============ -->

                <div class="paginationContainer">
                    <div class="center">
                        <ul class="pagination mb-30-mobile">
                            <li class="prBtn">
                                <a id="prev"><img src="{{ secure_asset('images/page-left.png') }}" alt=""></a>
                            </li>
                            <li>
                                <a id="test1" href="#">1</a>
                            </li>
                            <li>
                                <a id="test2" class="active" href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li class="prBtn">
                                <a href="#" id="next"><img src="{{ secure_asset('images/page-right.png') }}" alt=""></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="container style="position: relative; z-index:0">
                    <div id="homePageSlider" class="owl-carousel owl-theme">
                        <div class="item">
                            <img class="sliderImg" src="{{ asset('images/slider-1.png') }}" />
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
                        <div class="item">
                            <img class="sliderImg" src="{{ asset('images/slider-2.png') }}" />
                        </div>
                        <div class="item">
                            <img class="sliderImg" src="{{ asset('images/slider-3.png') }}" />
                        </div>

                    </div>
                </div>

            </div>
            <div class="compareIconWrapper">
                <img src="{{ secure_asset('images/compare-icon.png') }}" alt="">
                <h3>Compare</h3>
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