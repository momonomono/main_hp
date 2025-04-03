<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormValidationRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SigninController extends Controller
{
    public function __construck(){
        $this->middleware('');
    }

    public function signin(){
        
        return view('signin');
    }

    public function signin_post(FormValidationRequest $request){
        
        unset($request['_token']);
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'email_verified_at' => now(),
            'password' => Hash::make($request['password']),
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('users')->insert($data);
        
        return view('signin');
    }
}
