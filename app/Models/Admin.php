<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table ='admin';
    //một quản lí sẻ quản lí nhiều người dùng
    public function users(){
        return $this->hasMany(Users::class);
    }
    public function books(){
        return $this->hasMany(Books::class);
    }
}
