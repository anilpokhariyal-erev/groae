<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Validation\ValidationRule;

class FileTypeValidationRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $attributeData = explode('_', $attribute);

        $extensions = explode(',', Crypt::decryptString($attributeData[2]));
        $filePath = $value->getPathname();
        $fileInfo = new \finfo(FILEINFO_MIME_TYPE);
        $mimeType = $fileInfo->file($filePath);

        $validationMimeTypes = [];

        if (in_array('pdf', $extensions)) array_push($validationMimeTypes, 'application/pdf');
        if (in_array('doc', $extensions)) array_push($validationMimeTypes, 'application/msword');
        if (in_array('docx', $extensions)) array_push($validationMimeTypes, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');

        if (in_array('jpeg', $extensions)) array_push($validationMimeTypes, 'image/jpeg');
        if (in_array('jpg', $extensions)) array_push($validationMimeTypes, 'image/jpeg');
        if (in_array('png', $extensions)) array_push($validationMimeTypes, 'image/png');


        if (!in_array($mimeType, $validationMimeTypes)) {
//            flash()->addError('The selected file format is not supported.');
            $fail('The selected file format is not supported.');
        }
    }
}
