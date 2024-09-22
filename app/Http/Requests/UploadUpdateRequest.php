<?php

namespace App\Http\Requests;

use App\Rules\FileTypeValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UploadUpdateRequest extends FormRequest
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
        $rules = [];

        $uploads = $this->files->get('uploads');
        if (is_array($uploads)) {
            foreach ($uploads as $key => $val) {
                $rules['uploads.' . $key] = ['required', 'file', new FileTypeValidationRule];
            }
        }

        return $rules;
    }
}
