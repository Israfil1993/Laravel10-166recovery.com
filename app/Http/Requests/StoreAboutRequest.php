<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutRequest extends FormRequest
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
            'about_title_ar' => 'required|string',
            'about_title_en' => 'nullable|string',
            'about_title_ru' => 'nullable|string',
            'about_description_ar' => 'required|string',
            'about_description_en' => 'nullable|string',
            'about_description_ru' => 'nullable|string',
            'about_image' => 'required|image',
            'our_values_title_ar' => 'required|string',
            'our_values_title_en' => 'nullable|string',
            'our_values_title_ru' => 'nullable|string',
            'our_values_description_ar' => 'required|string',
            'our_values_description_en' => 'nullable|string',
            'our_values_description_ru' => 'nullable|string',
            'vision_description_ar' => 'required|string',
            'vision_description_en' => 'nullable|string',
            'vision_description_ru' => 'nullable|string',
            'vision_image' => 'required|image',
            'mission_description_ar' => 'required|string',
            'mission_description_en' => 'nullable|string',
            'mission_description_ru' => 'nullable|string',
            'mission_image' => 'required|image',
            'status' => 'required|in:Active,Inactive',
        ];
    }
}
