<x-website-layout>
 

        <!-- About Us Container -->
        <div class="aboutHeaderContainer">
            <div class="detailBannr">
                <img class="detailBannrImg" src="{{ asset('images/detail_bannr.png') }}" alt="">
                <div class="detailInnrWrappr">
                    <div class="container">
                        <div class="backBtn">
                            <a class="backAnchor" href="{{route('explore-freezone')}}"><img src="{{ secure_asset('images/cheveron-right.png') }}" alt=""></a>
                            <h2 class="backTxt">Back</h2>
                        </div>
                        <h3 class="bannrTxt">Dubai Internet City (DIC)
                            The Hub of Tech Innovation</h3>
                        <div class="bookBtns">
                            <button class="consultationBtn">
                                <a href="">Book Consultation</a>
                            </button>
                            <button class="calculateCostBtn">
                                <a href=""> <img src="{{ secure_asset('images/calculator-minimalistic-svgrepo-com.png') }}" alt="" />Calculate Cost</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Banner -->
        <section >
            <div class="container">
                <div style="position: relative; z-index:0">
                    <div class="businessIncorpContainer" style="margin-top: 50px;">
                        <div>
                            <img src="{{ secure_asset('images/about-bannr.png') }}" class="aboutImageBannr" alt="">
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
                            <h3>About Freezone</h3>
                        </div>
                        <div class="detailContntInnr">
                            <p>Dubai Internet City (DIC) stands as a beacon of technological progress and innovation, positioned at the forefront of the global tech landscape. Established in 2000, DIC is a designated free zone in Dubai, United Arab Emirates, specifically designed to nurture and accelerate the growth of information and communication technology (ICT) companies</p>
                            <p>DIC is strategically located at the heart of Dubai's business district, offering a dynamic and collaborative ecosystem for tech-driven enterprises. As a free zone, it provides businesses with a favorable environment for growth, offering 100% foreign ownership, tax exemptions, and simplified business processes. This has attracted a diverse array of global tech giants, startups, and entrepreneurs, making DIC a melting pot of innovation and creativity.
                            </p>
                            <p>One of the key features that sets DIC apart is its commitment to creating a comprehensive ecosystem that supports every facet of the tech industry. The free zone is home to a mix of multinational corporations, emerging startups, and established players, fostering an environment where collaboration and knowledge exchange thrive. This collaborative spirit is further enhanced by the state-of-the-art infrastructure and cutting-edge facilities provided by DIC.
                            </p>
                            <p>DIC is not merely a collection of office spaces; it is a vibrant community that hosts numerous networking events, seminars, and workshops throughout the year. These events bring together industry experts, thought leaders, and innovators, facilitating the exchange of ideas and the formation of strategic partnerships. The DIC community acts as a catalyst for innovation, pushing the boundaries of what is possible in the tech realm.</p>
                            <p>The free zone's commitment to innovation is evident in its support for emerging technologies such as artificial intelligence, blockchain, and the Internet of Things. DIC provides a platform for companies to experiment, develop, and implement groundbreaking technologies, contributing to Dubai's vision of becoming a smart city and a global tech hub.
                            </p>
                            <p>
                                DIC's success can be attributed not only to its business-friendly policies but also to the emphasis it places on talent development. The free zone collaborates with educational institutions to ensure a steady supply of skilled professionals in fields such as software development, cybersecurity, and data science. This focus on talent development further cements DIC's position as a hub of excellence in the tech industry.
                            </p>
                            <p>In conclusion, Dubai Internet City stands as a testament to Dubai's commitment to technological advancement and innovation. It serves as a dynamic hub where businesses, regardless of size, can thrive and contribute to the ever-evolving global tech landscape. With its strategic location, supportive ecosystem, and forward-looking approach, DIC continues to play a pivotal role in shaping the future of technology in the region and beyond.</p>
                        </div>
                    </div>
                    <div class="imageContainer">
                        <img src="{{ secure_asset('images/about-image.png') }}" alt="">
                    </div>

                </div>
                <div class="compareIconWrapper">
                    <img src="{{ secure_asset('images/compare-icon.png') }}" alt="">
                    <h3>Compare</h3>
                </div>

            </div>
        </section>

</x-website-layout>