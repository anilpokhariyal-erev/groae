<x-website-layout>

    <!-- blog details sec -->
    <section>
        <div class="blogDetailContainer">
            <div class="container">
                <div class="contactHeading">
                    <h1>Contact Us</h1>
                </div>
                <form class="signupFormItems contactFormItems" method="post" action="" novalidate>
                    <div class="form-group input_wrap w-100">
                        <input class="inputField2" name="first_name" type="text" placeholder="" required>
                        <label for="first_name">First Name*</label>

                    </div>
                    <div class="form-group input_wrap w-100">
                        <input class="inputField2" name="last_name" type="text" placeholder="" required>
                        <label for="last_name">Last Name*</label>

                    </div>
                    <div class="form-group input_wrap w-100">
                        <input class="inputField2" name="email" type="text" placeholder="" required>
                        <label for="email">Email*</label>

                    </div>
                    <div class="input_wrap w-100">
                        <input class="inputField2" placeholder="Mobile number*" type="tel" name="mobile_number" placeholder="" required />
                    </div>
                    <div class="input_wrap w-100">
                        <textarea class="inputField2" style=" resize: vertical;" placeholder="Message" type="tel" name="Message" placeholder="" required></textarea>
                    </div>
                    <div class="btns" style="justify-content: center;">
                        <button type="submit" style="max-width: 183px;" id='validate' class="loginBtn">
                            <span class="buttonText">Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>




</x-website-layout>