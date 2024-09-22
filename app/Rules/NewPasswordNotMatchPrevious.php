<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;
use App\Assets\ResponseMessage;
class NewPasswordNotMatchPrevious implements Rule
{

    public function passes($attribute, $value)
    {
        $previousPassword = auth()->guard('customer')->user()->password;
        return !Hash::check($value, $previousPassword);
    }

    public function message()
    {
        return ResponseMessage::DifferentNewPassword;
    }
}
