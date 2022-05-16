<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUniversityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        $rules = [
            'name' => 'required|string|max:255|min:3',
            'country' => "required|string|max:255|min:3",
            'alpha_two_code' => 'required|string|size:2',
            'domains' => 'required|string|max:255|min:3',
            'web_pages' => 'required|string|min:3|max:255'
        ];

        return $rules;
    }
}
