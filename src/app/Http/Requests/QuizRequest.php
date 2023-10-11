<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizRequest extends FormRequest
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
            'id' => 'required|integer',
            'content' => 'required|string|max:255',
            'img' => 'string',
            'choices.*.id' => 'integer',
            'choices.*.quiz_id' => 'required|integer',
            'choices.*.answer' => 'required|string|max:255',
            'choices.*.valid' => 'required|boolean',
            'choices.*.deleted_at' => 'nullable',
        ];
    }
}
