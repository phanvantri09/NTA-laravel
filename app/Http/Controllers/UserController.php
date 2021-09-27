<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Users;
use App\Http\Requests\User\createRequest;
use App\Http\Requests\User\updateRequest;
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
    public function login(){
        return view('pages.account.login');
    }
    public function postLogin(){
        $data = Users::all();
        return view('pages.account.login');
    }
    public function register(){
        return view('pages.account.register');
    }
    public function postRegister(createRequest $request){
        //bcrypt('JohnDoe');
        if(Users::create([
            'userName'=>$request->userName,
            'email'=>$request->email,
            'password'=>$request->password,
            'numberPhone'=>$request->numberPhone,
            'addresss'=>$request->addresss,
        ]))
        {
            return redirect()->route('bookShop.login');
        }
    }
}
