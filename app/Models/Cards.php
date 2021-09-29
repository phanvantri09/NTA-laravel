<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;
    protected $table ='cards'; 
    protected $fillable=[
        'idUser',
        'idBook',
        'amountCard',
        'conditionCard',
        'created_at',
        'updated_at'
    ];
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
    public function users()
    {
        return $this->hasOne(Users::class, 'idUser','id');
    }
    public function books()
    {
        return $this->hasMany(Books::class, 'idBook','id');
    }
    public function bills()
    {
        return $this->hasOne(bills::class,'idCard','id');
    }
}
