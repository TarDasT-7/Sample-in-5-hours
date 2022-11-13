<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class CategoryRequest extends FormRequest
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

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

    public function rules()
    {
        return [
            'title' => 'required|max:50|unique:categories,title'
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "title is required",
            "title.max" => "the maximum size 50 charecter",
            "title.unique" => "this title has already exists"
        ];
    }
}
