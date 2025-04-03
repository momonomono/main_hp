<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginValiRequest;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function login(){

        return view('login');
    }

    public function login_post(LoginValiRequest $request){
        
        $users = DB::table('users')
            ->where('name',$request->name)->first();
        
        if($users && Hash::check($request->password,$users->password)){
            return view('mypage');
        }

        return redirect()
                ->back()
                ->withErrors(['name' => '名前かパスワードが間違っています']);
    }
}
