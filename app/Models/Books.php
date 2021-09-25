<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Books extends Model
{
    use HasFactory;
    protected $table ='books'; 
    protected $fillable=[
        'nameBook',
        'genreBook',
        'amountBook',
        'infoBook',
        'authorBook',
        'priceBook',
        'created_at',
        'updated_at',
        'imgBook'
    ];
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
    public function scopeSearch($queryData)
    {
        if($searchData = request()->search){
            $queryData = $queryData->where('nameBook','like','%'.$searchData.'%');
        }
        return $queryData;
    }
}
