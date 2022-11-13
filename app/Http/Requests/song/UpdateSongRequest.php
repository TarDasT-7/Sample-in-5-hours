<?php

namespace App\Http\Requests\song;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateSongRequest extends FormRequest
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
            'name' => 'required|max:100',
            'artists*'=> 'required|numeric|exists:artists',
            'category_id' => 'required|exists:categories',
            'cover' => 'max:2000',
            'music' => 'max:5000',
            'text' => 'max:5000',
        ];
    }
}
