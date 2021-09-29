<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table ='comment'; 
    protected $fillable=[
        'userName',
        'idBook',
        'idUser',
        'content',
        'created_at',
        'updated_at'
    ];
    public function users()
    {
        return $this->hasOne(User::class);
    }
    public function books()
    {
        return $this->hasMany(Books::class);
    }
    
}
