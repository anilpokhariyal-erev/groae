<x-website-layout>


       

        <!-- Payment Mode -->
        <section>
            <div class="costCalculateContainer">
                <div class="container">
                    <div class="backBtn ">
                        <a class="backAnchor" href="{{route('article_blogs')}}"><img src="{{ secure_asset('images/cheveron-right.png') }}" alt=""></a>
                        <h2 class="backTxt">Back</h2>
                    </div>
                    <div class="topHeading">
                        <h2 class="trendTxt">Select Payment Method</h2>
                    </div>
                    <div class="paymntMethodContainer">
                        <div class="paymntForm">
                            <div class="paymntMethod1">
                                <p>
                                    <input type="radio" id="cutomer" value="customer" name="type" checked>
                                    <label for="cutomer">Credit / Debit Card</label>

                                </p>
                                <div class="creditDebitForm">
                                    <div class="firstColumn">

                                        <div class="form-group input_wrap w-100">
                                            <input class="inputField2" id="first_name" value="{{old('first_name')}}" name="first_name" type="text" placeholder=" " required>
                                            <label for="first_name">Cardholder Name</label>
                                            <p id="emailError" class="errorMessage"></p>
                                            <x-input-error class="mt-2 text-red" :messages="$errors->get('first_name')" />
                                        </div>

                                        <div class="form-group input_wrap w-100">
                                            <input class="inputField2" id="card_number" value="" name="card_number" type="text" placeholder=" " required>
                                            <label for="first_name">Card Number</label>
                                            <p id="emailError" class="errorMessage"></p>
                                            <x-input-error class="mt-2 text-red" :messages="$errors->get('first_name')" />
                                        </div>

                                    </div>
                                    <div class="firstColumn">
                                        <div class="form-group input_wrap w-100">
                                            <input class="inputField2" id="first_name" value="{{old('first_name')}}" name="first_name" type="text" placeholder=" " required>
                                            <label for="first_name">Expiry</label>
                                            <p id="emailError" class="errorMessage"></p>
                                            <x-input-error class="mt-2 text-red" :messages="$errors->get('first_name')" />
                                        </div>

                                        <div class="form-group input_wrap w-100">
                                            <input class="inputField2" id="card_number" value="" name="card_number" type="password" placeholder=" " required>
                                            <label for="first_name">CVV</label>
                                            <p id="emailError" class="errorMessage"></p>
                                            <x-input-error class="mt-2 text-red" :messages="$errors->get('first_name')" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="paymntMethod2">
                                <p>
                                    <input type="radio" id="partner" value="partner" name="type">
                                    <label for="partner">Net Banking</label>
                                </p>
                                <div class="bankNames">
                                    <div class="bankInnrDiv">
                                        <img src="{{ secure_asset('images/Bank_Albilad_logo.png') }}" alt="">
                                    </div>
                                    <div class="bankInnrDiv">
                                        <img src="{{ secure_asset('images/Bank_Aljazira.png') }}" alt="">
                                    </div>
                                    <div class="bankInnrDiv">
                                        <img src="{{ secure_asset('images/Riyad_Bank.png') }}" alt="">
                                    </div>
                                    <div class="bankInnrDiv">
                                        <img src="{{ secure_asset('images/SABB_Bank_Logo.png') }}" alt="">
                                    </div>
                                    <div class="bankInnrDiv">
                                        <img src="{{ secure_asset('images/saudi-national-bank-snb.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="secondColumn" style="margin-top: 30px;">
                                <div class="input_wrap" style="width: 100%;max-width:367px;">
                                    <select name="state" id="state" class="inputField2 cursor arrowPlace">
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                  
                                    </select>
                                    <label for="Other Bank">Other Bank</label>
                                    <x-input-error class="mt-2 text-red" :messages="$errors->get('state')" />
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="bannerBtns continueBtn">
                        <a class="bookConsBtn" href="{{ route('payment_confirmation') }}" style="width: 246px;">Confirm Payment</a>
                    </div>
                </div>
            </div>
        </section>



    

          <!-- modal popup -->
<!-- payment failed popup -->
<!-- 
    <div class="containerhoverlay">
        <div class="customInner">
            <div class="container_content">
                <div class="popupHeader">
                    <img src="{{asset('images/failed-icon.png')}}" alt="" />
                </div>
                <div class="popupBody">
                    <div class="popupInnrContnt">
                        <h2 class="popHeadTxt">Payment Failed!</h2>
                        <p class="popDetailTxt" >Uh-oh! It seems like there was an issue processing your payment. You can either retry your current payment method or choose another one. If the problem persists, please contact our support team for assistance.</p>
                        <div class="submitContnt" style="margin-top: 20px;">
                            <button class="submitBtn">
                                <a href="#">Retry</a>
                            </button>
                        </div>
                        <div style="text-align:center; margin-top: 10px;">
                            <a class="popupLogin" href="#" >Choose Another Payment Method</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div> -->
    
</x-website-layout>