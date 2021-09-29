<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cards;
class CardController extends Controller
{
    // có 3 trạng thái giỏ hàng: 
    // 1 -> đã thêm vào giỏ chờ thanh toán
    // 2 -> đã thanh toán
    // 3 -> trả hàng
    public function addCard($idUser, $idBook){
        $conditionCard = 1;
        $cardData = Cards::all();
        //dd($cardData);
        foreach($cardData as $key => $card)
        {
            $empryData =($card->idBook == $idBook) && ($card->idUser == $idUser) && ($card->conditionCard == 1) && ($card->amountCard >= 1);
            //dd($k);
            if($empryData == true)
            {
                $cardRowUpdate = Cards::find($card->id);
                $cardRowUpdate->amountCard = $card->amountCard + 1;
                $cardRowUpdate->save();
                return redirect()->route('bookShop.home')->with('success','Successfully add card ');
            }
        }
        if(Cards::create([
            'idUser'=>$idUser,
            'idBook'=>$idBook,
            'amountCard'=> 1,
            'conditionCard'=>$conditionCard
        ]))
        {
            return redirect()->route('bookShop.home')->with('success','Successfully add card ');
        }else
        {
            return redirect()->route('bookShop.home')->with('error','error add card ');
        }
        
    }
    public function delete(Cards $id)
    {
        $id->delete();
        return redirect()->route('bookShop.home')->with('success','successfully  Delete');
    }
}
