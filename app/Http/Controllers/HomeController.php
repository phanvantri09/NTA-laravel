<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
class HomeController extends Controller
{
    public function index()
    {
        $bookData = Books::orderBy('id','DESC')->search()->paginate(20);
        return view('pages.content.home', compact('bookData'));
    }
    public function card()
    {
        // $bookData = Books::orderBy('id','DESC')->search()->paginate(20);
        return view('pages.content.card');
    }
}
