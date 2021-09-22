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
    public function editBook($id)
    {
        $bookData = Books::all();
        return view('admin.layout.books.bookList', compact('bookData'));
    }
    public function addBook()
    {
        $bookData = Books::all();
        return view('admin.layout.books.bookAdd', compact('bookData'));
    }
    public function deleteBook()
    {
        $bookData = Books::all();
        return view('admin.layout.books.bookList', compact('bookData'));
    }

}
    
