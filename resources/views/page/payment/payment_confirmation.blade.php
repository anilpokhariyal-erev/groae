<x-website-layout>

        <!-- Payment Mode -->
        <section>
            <div class="costCalculateContainer">
                <div class="container">
                    <div class="paymntConfirmationContainer">
                        <div class="paymntConfirmWrapper">
                            <div class="thankyouWrap1">
                                <img src="{{ asset('images/check-icon.png') }}" alt="">
                                <h2>Thank You!</h2>
                            </div>
                            <div class="thankyouWrap2">
                                <h2>We are delighted to inform you that your recent payment has been successfully processed.</h2>
                                <div class="transHistory">
                                    <h3>Transaction ID:<span>HBGS1234GA</span></h3>
                                    <h3>Transaction Date and Time:<span>30 NOV 2023</span></h3>
                                    <h3>Service Opted:<span>Via GroAE</span></h3>
                                    <h3>Total Amount Paid:<span>AED 1249</span></h3>
                                </div>
                            </div>
                            <div class="thankyouWrap3">
                                <h2>You will also receive an email confirmation shortly,
                                    containing the same details for your records.</h2>
                            </div>
                        </div>
                        <div class="postWrap">
                            <div class="topHeading">
                                <h2 class="trendTxt">Post-incorporation services</h2>
                            </div>

                            <div class="searchInnrWrapper" style="margin-top: 30px;">
                                <div class="searchBlogLayer">
                                    <div class="firstLayer">
                                        <img src="{{ asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                                    </div>
                                    <div class="secondLayer">
                                        <a href="{{route('about_us')}}">
                                            <h3 class="blogHeading text-left">Trademark Registration</h3>
                                        </a>
                                        <p class="blogDetail text-left">Protect your brand in the Freezone market. Register your trademarks to secure exclusive rights to your business identity..</p>
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
                                        <img src="{{ asset('images/glassclad-skyscrapers-central-mumbai-reflecting-sunset-hues-blue-hour.png') }}" alt="">
                                    </div>
                                    <div class="secondLayer">
                                        <h3 class="blogHeading text-left">IT Infrastructure Setup</h3>
                                        <p class="blogDetail text-left">Establish a robust IT infrastructure for your Freezone operations. Ensure secure and efficient technological support.</p>
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
        
</x-website-layout>