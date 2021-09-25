<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;
    protected $table ='bills';
    protected $fillable=[
        'idCard',
        'priceBill',
        'created_at',
        'updated_at'
    ];
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
    public function users()
    {
        return $this->hasOne(Users::class);
    }
    public function cards()
    {
        return $this->hasOne(Cards::class);
    }
}
