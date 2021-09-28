<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\User\createRequest;
use App\Http\Requests\User\updateRequest;
use App\Http\Requests\Login\attemptUser;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    
    public function List()
    {
        //$data = Admin::all();
        return view('admin.layout.userList');
    }
    public function Edit()
    {
        $data = Users::all();
        return view('admin.layout.userList');
    }
    public function login()
    {
        return view('pages.account.login');
    }
    public function postLogin(attemptUser $request)
    {
        //dd($request->all());
        $rememberMe = $request->has('rememberMe') ? TRUE : FALSE;
        //dd($rememberMe);
        $dataUser =[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if (Auth::attempt($dataUser))
        {
            dd("oke");
            // $user = User::where(["email" => $request->email])->first();
            // Auth::login($user, $rememberMe);
            // return redirect()->route('bookShop.home')->with('success','Successfully Register, You can login!');
        }else
        {
            dd(Auth::attempt($dataUser));
            dd($request->all());
            return redirect()->route('bookShop.login')->with('error','Error Register, Again!');
        }
    }
    public function register()
    {
        return view('pages.account.register');
    }
    public function postRegister(createRequest $request)
    {
        //bcrypt('JohnDoe');
        if(Users::create([
            'userName'=>$request->userName,
            'email'=>$request->email,
            'password'=>md5($request->password),
            'numberPhone'=>$request->numberPhone,
            'address'=>$request->address,
        ]))
        {
            return redirect()->route('bookShop.login')->with('success','Successfully Register, You can login!');
        }else
        {
            return redirect()->route('bookShop.register')->with('error','Error Register, Again!');
        }
        
    }
}
