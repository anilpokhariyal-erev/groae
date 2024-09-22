<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['email', 'max:255', Rule::unique(Customer::class)->ignore(auth()->guard('customer')->user()->id)],
            'iso2' => ['required', 'string'],
            'dialCode' => ['required', 'string'],
            'mobile_number' => ['nullable', 'string', 'min:7', 'max:15'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'pincode' => ['nullable', 'max:15'],
            'city' => ['nullable', 'string', 'max:50'],
            'state_id' => ['nullable', 'integer', Rule::exists('states', 'id')],
            'country_id' => ['nullable', 'integer', Rule::exists('countries', 'id')],
            'address' => ['nullable', 'string', 'max:255'],
            'business_interested' => ['nullable', 'string', 'max:255'],
            'dob' => ['nullable', 'string', 'max:255'],
        ];
    }
}
