<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Cards;
use App\Models\Comment;
class HomeController extends Controller
{
    public function index()
    {
        $bookData = Books::orderBy('id','DESC')->search()->paginate(20);
        $cardData = Cards::all();
        $sumPriceCard = 0;
        return view('pages.content.home', compact(['bookData','cardData','sumPriceCard']));
    }
    public function book($id)
    {
        $book = Books::find($id);
        $bookData = Books::all();
        $cardData = Cards::all();
        $commentData = Comment::all();
        $sumPriceCard = 0;
        // $bookData = Books::orderBy('id','DESC')->search()->paginate(20);
        return view('pages.content.book', compact(['bookData','cardData','sumPriceCard','commentData', 'book']));
    }
    public function card()
    {

        $bookData = Books::all();
        $cardData = Cards::all();
        $sumPriceCard = 0;
        // $bookData = Books::orderBy('id','DESC')->search()->paginate(20);
        return view('pages.content.card', compact(['bookData','cardData','sumPriceCard']));
    }
}
