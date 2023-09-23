<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'key_ar' => 'nullable|string',
            'value_ar' => 'nullable|string',
            'key_en' => 'string|nullable',
            'value_en' => 'string|nullable',
            'key_ru' => 'string|nullable',
            'value_ru' => 'string|nullable',
            'image' => 'nullable',
            'status' => 'integer|in:0,1'
        ];
    }
}
