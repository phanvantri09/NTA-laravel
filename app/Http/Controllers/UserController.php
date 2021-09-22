<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function List(){
        //$data = Admin::all();
        return view('admin.layout.userList');
    }
    public function Edit(){
        $data = Users::all();
        return view('admin.layout.userList');
    }
}
