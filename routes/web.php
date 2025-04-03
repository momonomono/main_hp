<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\FormDataMiddleware;
use App\Http\Middleware\Test\TestMiddleware;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[MainController::class,"top"])->name('top');

Route::get('/mypage',[MainController::class,'mypage'])->name('mypage');
Route::post('/mypage',[MainController::class,'mypage_post'])->name('mypage.post');

Route::get('/signin',[SigninController::class,'signin'])->name('signin');
Route::post('/signin',[SigninController::class,'signin_post'])->name('signin.post');

Route::get('/login',[FormController::class,'login'])->name('login');
Route::post('/login',[FormController::class,'login_post'])->name('login.post');

// Test
Route::get('/test',[TestController::class,"test"])->name('test');
Route::post('/test',[TestController::class,"test_post"])->name('post.te____st');

// Slider
Route::get('/slider',[MainController::class,"slider"])->name('slider');