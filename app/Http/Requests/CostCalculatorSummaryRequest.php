<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CostCalculatorSummaryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'freezone' => [
                'required', 'string',
                Rule::exists('freezones', 'uuid')->where(function ($query) {
                    $query->where('status', 1);
                })
            ],
            'license' => [
                'required', 'string',
                Rule::exists('licenses', 'id')->where(function ($query) {
                    $query->where('status', 1);
                })
            ],
            'office' => ['required', 'string'],
            'visa_package' => [
                'required', 'string',
            ],
            'license_validity' => [
                'required', 'string', 'between:1,5',
            ],
            'activity_group' => ['required', 'string'],
            'activity_group_selection' => ['required', 'string'],
            'activities' => ['required', 'string'],
            'activities_selection' => ['required', 'string'],
            'visa_type.*' => [
                'nullable', 'string',
                Rule::exists('visa_types', 'id')->where(function ($query) {
                    $query->where('status', 1);
                })
            ],
            'visa_add_on.*' => [
                'nullable', 'string',
                Rule::exists('visa_add_ons', 'id')->where(function ($query) {
                    $query->where('status', 1);
                })
            ],
            'location.*' => [
                'nullable', 'string',
                Rule::exists('locations', 'id')->where(function ($query) {
                    $query->where('status', 1);
                })
            ],
        ];
    }
}
