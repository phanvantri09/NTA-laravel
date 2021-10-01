<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Books;
use App\Models\Users;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function listUser()
    {
        $userData = Users::orderBy('id','DESC')->search()->paginate(10);
        return view('admin.layout.user.userList', compact('userData'));
    }
    
    

}
    
