<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'title_ar' => 'required|string',
            'title_en' => 'nullable|string',
            'title_ru' => 'nullable|string',
            'description_ar' => 'required|string',
            'description_en' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'location_ar' => 'required|string',
            'location_en' => 'nullable|string',
            'location_ru' => 'nullable|string',
            'status' => 'required|in:Active,Inactive',
        ];
    }
}
