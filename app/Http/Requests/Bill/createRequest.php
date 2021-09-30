<?php

namespace App\Http\Requests\Bill;

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
            'userName'=>'required|min:3',
            'email'=>'required|email|min:5',
            'numberPhone'=>'required|min:9',
            'address'=>'required|min:10'
        ];
    }
    public function messages()
    {
        return [
            'userName.required'=>'no empty',
            'email.required'=>'no empty',
            'numberPhone.required'=>'no empty',
            'address.required'=>'no empty'
        ];
    }
}
