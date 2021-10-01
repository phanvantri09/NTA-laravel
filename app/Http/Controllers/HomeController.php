<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Cards;
use App\Models\Comment;
use App\Models\Bills;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Bill\createRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;
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
    public function checkout()
    {
        $bookData = Books::all();
        $cardData = Cards::all();
        $sumPriceCard = 0;
        foreach ($cardData as $card)
        {
            if ($card->idUser == Auth::user()->id && $card->conditionCard ==1 )
            {
                foreach ($bookData as $book)
                {
                    if ($book->id == $card->idBook){
                        $sumPriceCard = $sumPriceCard +($book->priceBook * $card->amountCard);
                    }
                }
            }
        }
        return view('pages.content.checkout', compact(['bookData','cardData','sumPriceCard']));
    }
    //create bills, update card, send mail
    public function postCheckout(createRequest $request ,$sumPriceCard){
        $idUser = Auth::user()->id;
        $emailUser =  Auth::user()->email;
        if(Bills::create([
            'idUser'=>$idUser,
            'userName'=>$request->userName,
            'email'=>$request->email,
            'numberPhone'=>$request->numberPhone,
            'address'=>$request->address,
            'priceBill'=>$sumPriceCard
        ]))
        {
            $cardData = Cards::all();
            foreach($cardData as $card)
            {
                if( ($card->idUser  ==  $idUser)   &&  ($card->conditionCard   ==  1))
                {
                    //update conditon card 
                    $cardRowUpdate = Cards::find($card->id);
                    $cardRowUpdate->conditionCard = 2;
                    $cardRowUpdate->save();
                    //update amount Book
                    $bookRowUpdate = Books::find($card->idBook);
                    $bookRowUpdate->amountBook = $bookRowUpdate->amountBook - $card->amountCard;
                    $bookRowUpdate->save();
                }
            }
            //send mail
            $details = [
                'title' =>  'BookShop',
                'body'  =>  'Your order is packed, wait for delivery in the next few days, thank you for buying books at BookShop'
            ];
            Mail::to($emailUser)->send(new sendMail($details));

            return redirect()->route('bookShop.home')->with('success','Successfully Register, You can login!');
        }else
        {
            return redirect()->route('bookShop.checkout')->with('error','Error, Again!');
        }
    }
}
