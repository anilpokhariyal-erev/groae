<x-website-layout>

        <!-- About Us Container -->
        <div class="aboutHeaderContainer">
            <div class="detailBannr">
                <img class="detailBannrImg" src="{{ asset('images/detail_bannr.png') }}" alt="">
                <div class="detailInnrWrappr">
                    <div class="container">
                        <div class="backBtn">
                            <a class="backAnchor" href="{{route('explore-freezone')}}"><img src="{{ asset('images/cheveron-right.png') }}" alt=""></a>
                            <h2 class="backTxt">Back</h2>
                        </div>
                        <h3 class="bannrTxt">Dubai Internet City (DIC)
                            The Hub of Tech Innovation</h3>
                        <div class="bookBtns">
                            <button class="consultationBtn">
                                <a href="">Book Consultation</a>
                            </button>
                            <button class="calculateCostBtn">
                                <a href=""> <img src="{{ asset('images/calculator-minimalistic-svgrepo-com.png') }}" alt="" />Calculate Cost</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- benefit detail Banner -->
        <section>
            <div class="container">
                <div style="position: relative; z-index:0">
                    <div class="businessIncorpContainer" style="margin-top: 50px;">
                        <div>
                            <img src="{{ asset('images/about-bannr.png') }}" class="aboutImageBannr" alt="">
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
                            <h3>Benefits details</h3>
                        </div>
                        <div class="detailContntInnr">
                            <div>
                                <h3 class="benefitDetailHeadingTxt">Strategic Location:</h3>
                                <p>DIC is strategically located in Dubai, providing easy access to the rapidly growing markets in the Middle East, Africa, and South Asia. Its proximity to major airports and shipping ports makes it an ideal business destination for companies looking to establish a global presence.</p>
                            </div>
                            <div>
                                <h3 class="benefitDetailHeadingTxt">Freezone Incentives:</h3>
                                <p>Being a freezone, DIC offers companies 100% foreign ownership, allowing businesses to retain full control of their operations. Additionally, there are no import or export duties, ensuring a favorable business environment for international companies.</p>
                            </div>

                            <div>
                                <h3 class="benefitDetailHeadingTxt">State-of-the-Art Infrastructure:</h3>
                                <p>DIC boasts world-class infrastructure, including modern office spaces equipped with cutting-edge technology. The advanced telecommunications and IT infrastructure ensure seamless connectivity, making it an ideal location for tech-driven businesses.</p>
                            </div>

                            <div>
                                <h3 class="benefitDetailHeadingTxt">Tech Ecosystem:</h3>
                                <p>DIC is home to a thriving tech ecosystem, fostering collaboration and innovation. The presence of numerous tech companies, startups, and multinational corporations creates a dynamic environment that encourages knowledge sharing and partnerships.</p>
                            </div>
                        </div>
                    </div>
                    <div style="position: relative;">
                        <div class="imageContainer">
                            <img src="{{ asset('images/benefit_detail.png') }}" alt="">

                        </div>
                        <img class="youtubeImg" src="{{ asset('images/youtube-svgrepo-com.png') }}" alt="">
                    </div>
                </div>
                <div class="compareIconWrapper">
                    <img src="{{ asset('images/compare-icon.png') }}" alt="">
                    <h3>Compare</h3>
                </div>
            </div>
        </section>

     
</x-website-layout>