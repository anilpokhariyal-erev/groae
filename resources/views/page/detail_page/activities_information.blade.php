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

        <!-- customer guide detail Banner -->
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
                            <h3>Activities information</h3>
                        </div>
                        <div class="detailContntInnr">

                            <div>
                                <button class="collapsible">Innovation Ecosystem</button>
                                <div class="contentGuide">
                                    <div style="margin-top: 20px;">
                                        <h3 class="benefitDetailHeadingTxt">Business Setup and Support:</h3>
                                        <ul class="actListItem">
                                            <li class="actListInnr">DIC provides a streamlined and business-friendly environment for tech companies to establish their presence in the region.</li>
                                            <li class="actListInnr">The free zone offers comprehensive support services, including licensing, visas, and legal assistance.</li>
                                        </ul>
                                    </div>
                                    <div style="margin-top: 20px;">
                                        <h3 class="benefitDetailHeadingTxt">
                                            Strategic Location:</h3>
                                        <ul class="actListItem">
                                            <li class="actListInnr">DIC's strategic location in the heart of Dubai positions it as a gateway for businesses looking to access the Middle East, Africa, and South Asia markets.</li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <button class="collapsible">Infrastructure and Facilities</button>
                                <div class="contentGuide">
                                    <p style="margin-top: 20px;">Dubai Internet City (DIC) operates as a dynamic Freezone, fostering tech innovation and collaboration. To maintain the integrity and compliance of this thriving ecosystem, the following rules and regulations are in effect:</p>
                                    <div style="margin-top: 20px;">
                                        <h3 class="benefitDetailHeadingTxt">Licensing Requirements:</h3>
                                        <p>All entities within DIC must adhere to the licensing requirements set forth by the Dubai Technology and Media Free Zone Authority (DTMFZA), ensuring the legitimacy and appropriateness of business activities.</p>
                                    </div>
                                    <div style="margin-top: 20px;">
                                        <h3 class="benefitDetailHeadingTxt">Freezone Incentives:</h3>
                                        <p>Being a freezone, DIC offers companies 100% foreign ownership, allowing businesses to retain full control of their operations. Additionally, there are no import or export duties, ensuring a favorable business environment for international companies.</p>
                                    </div>

                                    <div style="margin-top: 20px;">
                                        <h3 class="benefitDetailHeadingTxt">Intellectual Property Protection:</h3>
                                        <p>DIC prioritizes the protection of intellectual property rights. Companies operating within the Freezone are required to respect and abide by copyright, trademark, and patent laws to promote innovation and safeguard the interests of all stakeholders.</p>
                                    </div>

                                    <div style="margin-top: 20px;">
                                        <h3 class="benefitDetailHeadingTxt">Ethical Business Practices:</h3>
                                        <p>DIC encourages ethical conduct and responsible business practices. Entities are expected to uphold the highest standards of integrity, transparency, and corporate governance, fostering a culture of trust and reliability.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="collapsible">Specialized Zones</button>
                                <div class="contentGuide">
                                    <p>Dubai Internet City (DIC) is committed to fostering a dynamic and innovative environment within its tech-focused Freezone. To ensure the seamless operation of this hub of technological advancement, we have established a set of rules and regulations that prioritize collaboration, creativity, and compliance. DIC encourages businesses to thrive while maintaining a respectful and inclusive atmosphere. All entities operating within the Freezone are expected to adhere to local laws and regulations, uphold ethical standards, and contribute positively to the growth of the tech ecosystem. Emphasizing the principles of fair competition and mutual respect, DIC aims to create a conducive space where innovation flourishes, and businesses can reach their full potential. These rules and regulations serve as a foundation for the shared success of all stakeholders within Dubai Internet City.</p>
                                </div>
                            </div>
                            <div>
                                <button class="collapsible">Industry Focus</button>
                                <div class="contentGuide">
                                    <p>Dubai Internet City (DIC) is committed to fostering a dynamic and innovative environment within its tech-focused Freezone. To ensure the seamless operation of this hub of technological advancement, we have established a set of rules and regulations that prioritize collaboration, creativity, and compliance. DIC encourages businesses to thrive while maintaining a respectful and inclusive atmosphere. All entities operating within the Freezone are expected to adhere to local laws and regulations, uphold ethical standards, and contribute positively to the growth of the tech ecosystem. Emphasizing the principles of fair competition and mutual respect, DIC aims to create a conducive space where innovation flourishes, and businesses can reach their full potential. These rules and regulations serve as a foundation for the shared success of all stakeholders within Dubai Internet City.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="compareIconWrapper">
                    <img src="{{ asset('images/compare-icon.png') }}" alt="">
                    <h3>Compare</h3>
                </div>
            </div>
        </section>

</x-website-layout>