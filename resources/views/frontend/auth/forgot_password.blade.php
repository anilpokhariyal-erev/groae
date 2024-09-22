@props(['errors' => collect()])
<x-customer-auth>
    <div class="signupItems">
        <div>

            <h1 class="loginTxt">Forgot Password</h1>
            <p class="detailTxt">To reset your password, enter your registered email ID </p>
            <x-auth-session-status class="mb-4 txt-green" :status="session('success')" />
            @if (!session('success'))
                <form class="signupFormItems" method="POST" action="{{ route('customer.post.forgotpassword') }}"
                    novalidate>
                    @csrf
                    <div class="form-group input_wrap">
                        <input class="inputField" id="email" type="email" name="email" required placeholder=""
                            value="{{ old('email') }}">
                        <label for="name">
                            Email:
                        </label>
                        <p id="email_error" class="errorMessage"></p>
                        <x-input-error class="mt-2 text-red" :messages="$errors->get('email')" />
                    </div>


                    <div class="btns">
                        <button type="submit" id='validate' class="loginBtn">
                            <span class="buttonText">Send Verification Link</span>
                        </button>
                        <p class="signupLink">Back to
                            <a class="createAccTxt" href="{{ route('customer.signup') }}">Create Account</a>
                        </p>
                    </div>
                </form>
                <!-- <div class="btns">
                <button type="submit" class="loginBtn">
                    <span class="buttonText">Send Verification Link</span>
                </button>
                <p class="signupLink">Back to
                    <a class="createAccTxt" href="#">Login</a>
                </p>
            </div> -->
            @endif
            <!-- Session Status -->
        </div>
    </div>
</x-customer-auth>
