<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function updateBook(Request $request, Books  $id)
    {
        $request->validate([
            'nameBook'=>'required|unique:books,nameBook,'.$id->id,
            'prioty'=> 'required'
        ],[
            'nameBook.required'=>'no empty',
            'amountBook.required'=>'no empty',
            'infoBook.required'=>'no empty',
            'genreBook.required'=>'no empty',
            'authorBook.required'=>'no empty',
            'priceBook.required'=>'no empty',
            'imgBook.required'=>'no empty'
        ]);
        $id->update($request->only('nameBook','amountBook','infoBook','genreBook','authorBook','priceBook','imgBook'));
        return redirect()->route('admin.listbook')->with('success',"Sửa thành công");
    }
}
