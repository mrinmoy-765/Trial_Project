<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ShortLinkController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn','blockIP');
Route::get('/logout',[CustomAuthController::class,'logout']);



Route::get('generate-shorten-link',[ShortLinkController::class,'index'])->middleware('blockIP','isLoggedIn');
Route::post('generate-shorten-link',[ShortLinkController::class,'store'])->name('generate.shorten.link.post')->middleware('blockIP','isLoggedIn');
Route::get('{code}',[ShortLinkController::class,'store'])->name('shorten.link')->middleware('blockIP','isLoggedIn');


