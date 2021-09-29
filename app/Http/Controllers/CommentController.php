<?php

namespace App\Http\Controllers;
use App\Http\Requests\Comment\createRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function create(createRequest $request , $idBook)
    {
        if(Comment::create([
            'nameUser'=>Auth::user()->userName,
            'idBook'=>$idBook,
            'idUser'=>$Auth::user()->id,
            'content'=>$request->content
        ]))
        {
            return redirect()->route('bookShop.book')->with('success','successfully Add.');
        }
    }
}
