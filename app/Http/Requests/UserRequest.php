<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'     => 'required|max:10',
            'email'    => 'required|email',
            'tel'      => 'nullable|numeric',
            'gender'   => 'required',
            'contents' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email' => ':attributeが正しくありません。',
            'max' => [
                'string' => ':attributeは:max文字以内で入力してください。',
            ],
            'numeric' => ':attributeは数字で入力してください。',
            'required' => ':attributeは必須項目です。',
        ];
    }
}
