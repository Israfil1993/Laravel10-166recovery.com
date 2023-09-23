<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFaqRequest extends FormRequest
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
            'question_ar' => 'nullable|string|max:255',
            'question_en' => 'nullable|string|max:255',
            'question_ru' => 'nullable|string|max:255',
            'answer_ar'   => 'nullable|string',
            'answer_en'   => 'nullable|string',
            'answer_ru'   => 'nullable|string',
            'status'      => 'nullable|in:Active,Inactive',
        ];
    }
}
