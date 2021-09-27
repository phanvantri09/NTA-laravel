<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class createRequest extends FormRequest
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
            'userName'=>'required|unique:userName',
            'password'=>'required|min:6',
            'email'=>'required|email',
            'address'=>'required',
            'numberPhone'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'userName.required'=>'no empty',
            'password.required'=>'no empty',
            'email.required'=>'no empty',
            'address.required'=>'no empty',
            'numberPhone.required'=>'no empty'
        ];
    }
}
