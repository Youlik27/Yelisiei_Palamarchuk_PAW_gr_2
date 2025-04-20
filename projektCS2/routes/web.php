<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'getInfo']);
Route::get('/case_content', [MainController::class, 'getInfo'])->name('case_content');
Route::get('/login', function (){
    return view('login');
})->name('login');

Route::post('/login/process', [LoginController::class, 'process'])->name('login.process');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/lo1', [LoginController::class, 'generateView']);
