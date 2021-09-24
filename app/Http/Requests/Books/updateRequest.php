<?php

namespace App\Http\Requests\Books;

use Illuminate\Foundation\Http\FormRequest;

class updateRequest extends FormRequest
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
            'nameBook'=>'required|unique:books,nameBook,'.request()->idBook,
            'amountBook'=>'required',
            'infoBook'=>'required',
            'authorBook'=>'required',
            'priceBook'=>'required',
            'imgBook'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'nameBook.required'=>'no empty',
            'amountBook.required'=>'no empty',
            'infoBook.required'=>'no empty',
            'genreBook.required'=>'no empty',
            'authorBook.required'=>'no empty',
            'priceBook.required'=>'no empty',
            'imgBook.required'=>'no empty'
        ];
    }
}
