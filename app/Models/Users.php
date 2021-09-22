<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table ='users'; 
    // 1 usser có 1 quản lý
    public function scopeSearch($queryData)
    {
        if($searchData = request()->search){
            $queryData = $queryData->where('userName','like','%'.$searchData.'%');
        }
        return $queryData;
    }
    public function admin(){
        return $this->hasOne(Admin::class);
    }
}
