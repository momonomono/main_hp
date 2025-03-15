<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        
        return view('test');
    }

    public function test_post(Request $request){
        
        $validated = $request->validate([
            'name' => 'required'
        ]);
        
        return view('test');
    }

}
