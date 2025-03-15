<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormValidationRequest;
use Illuminate\Support\Facades\DB;

class SigninController extends Controller
{
    public function signin(){
        
        return view('signin');
    }

    public function signin_post(FormValidationRequest $request){
        
        unset($request['_token']);
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('users')->insert($data);
        
        return 
    }
}
