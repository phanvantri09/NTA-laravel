<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Users;
use App\Models\Books;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function listUser()
    {
        $userData = Users::orderBy('id','DESC')->search()->paginate(1);
        return view('admin.layout.user.userList', compact('userData'));
    }
    public function listBook()
    {
        $bookData = Books::orderBy('id','DESC')->search()->paginate(1);
        return view('admin.layout.books.bookList', compact('bookData'));
    }
    public function editBook(Books $id)
    {
        return view('admin.layout.books.bookEdit', compact('id'));
    }
    public function addBook()
    {
        $bookData = Books::all();
        return view('admin.layout.books.bookAdd', compact('bookData'));
    }
    public function updateBook(Request $request, Books $id)
    {
        dd($request->all());
    }
    public function deleteBook(Books $id)
    {
        if($id->amountBook <= 0)
        {
            return redirect()->route('admin.listbook')->with('error','Can not delete !');
        }else
        {
            $id->delete();
            return redirect()->route('admin.listbook')->with('success','successfully  Delete');
        }
    }

}
    
