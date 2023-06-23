<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\loginController;

//todo ==> create user
//todo ==> login user
//todo ==> login->home page


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

Route::get('/register',[ UserController::class,"create"])->name('register') ;
Route::post('/register/save',[ UserController::class,"store"])->name('saveUser') ;

Route::get('/login',[loginController::class,"index" ])->name('login');