<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table ='admin';
    protected $fillable=[
        'userName',
        'password',
        'nameAccount',
        'created_at',
        'updated_at'
    ];
    //một quản lí sẻ quản lí nhiều người dùng
    public function users()
    {
        return $this->hasMany(Users::class);
    }
    public function books()
    {
        return $this->hasMany(Books::class);
    }
    public function cards()
    {
        return $this->hasMany(Books::class);
    }
    public function bills()
    {
        return $this->hasMany(Bills::class);
    }

}
