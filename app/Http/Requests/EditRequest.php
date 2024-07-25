<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:30',
            'species' => 'required|string|min:3|max:30',
            'breed' => 'nullable|string|min:3|max:40',
            'image_url' => 'nullable|url|max:255',
            'weight' => 'nullable|numeric|min:0.1|max:300000',
            'description' => 'nullable|string|max:300',
        ];
    }
}
