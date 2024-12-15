<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/login',[TestController::class,'login'])->name('login');
Route::get('/register',[TestController::class,'registerForm'])->name('register');
Route::post('/registerPat',[TestController::class,'register'])->name('registerPat');

Route::post('/loginP',[TestController::class,'loginPat'])->name('loginP');
Route::get('/logout',[TestController::class,'logout'])->name('logout');
Route::get('/sec',[\App\Http\Controllers\SecretaireController::class,'index'])->name('sec');
