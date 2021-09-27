<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    public $table ='users'; 
    protected $fillable=[
        'userName',
        'password',
        'numberPhone',
        'email',
        'address',
        'created_at',
        'updated_at'
    ];
    // 1 usser có 1 quản lý
    public function scopeSearch($queryData)
    {
        if($searchData = request()->search)
        {
            $queryData = $queryData->where('userName','like','%'.$searchData.'%');
        }
        return $queryData;
    }
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
    // public function books()
    // {
    //     return $this->hasMany(Books::class);
    // }
    public function cards()
    {
        return $this->hasMany(Cards::class,'idUser','id');
    }
    public function bills()
    {
        return $this->hasMany(Bills::class);
    }
}
