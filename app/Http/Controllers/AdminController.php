<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Users;
use App\Models\Books;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function listUser()
    {
        $userData = Users::orderBy('id','DESC')->search()->paginate(1);
        return view('admin.layout.user.userList', compact('userData'));
    }
    

}
    
