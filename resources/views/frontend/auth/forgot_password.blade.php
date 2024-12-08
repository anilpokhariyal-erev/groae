@props(['errors' => collect()])
<x-customer-auth>
    <div class="signupItems">
        <div>

            <h1 class="loginTxt">Forgot Password</h1>
            <p class="detailTxt">To reset your password, enter your registered email ID </p>
            <x-auth-session-status class="mb-4 txt-green" :status="session('success')" />
            <x-auth-session-status class="mb-4 txt-red"  :status="session('error')" />
            @if (!session('success'))
                <form class="signupFormItems" method="POST" action="{{ route('customer.post.forgotpassword') }}"
                    novalidate onsubmit="handleSubmit(event)">
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
                        <button type="submit" id="validate" class="loginBtn">
                            <span class="buttonText">Send Verification Link</span>
                        </button>
                        <p class="signupLink">Back to
                            <a class="createAccTxt" href="{{ route('customer.signup') }}">Create Account</a>
                        </p>
                    </div>
                </form>
            @endif
            <!-- Session Status -->
        </div>
    </div>

    <!-- JavaScript to handle button disable -->
    <script>
        function handleSubmit(event) {
            const button = event.target.querySelector('#validate');
            button.disabled = true; // Disable the button
            button.innerHTML = '<span class="buttonText">Processing...</span>'; // Update button text
        }
    </script>
</x-customer-auth>
