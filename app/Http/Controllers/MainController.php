<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormValidationRequest;
use Illuminate\Validation\Validator;

class MainController extends Controller
{

    public function top(){

        return view('index');
    }

    public function test(){

        return view('test');
    }

    public function post_test(){

        return view('test');
    }

    public function slider(){

        return view('slider');
    }
}
