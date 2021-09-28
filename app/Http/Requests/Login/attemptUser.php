<?php

namespace App\Http\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;

class attemptUser extends FormRequest
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
            'password'=>'required|min:6',
            'email'=>'required|email',
            'rememberMe'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'password.required'=>'no empty',
            'email.required'=>'no empty',
            'rememberMe.required'=>'no empty'
        ];
    }
}
