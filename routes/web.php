<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/redirect', [LoginController::class, 'login'])->name('redirect');
Route::get('/dashboard',[ClientController::class ,"index"])->name('dashboard');
Route::get('/dashboard/add',function(){
    return view('add');
})->name("add");
Route::post('/dashboard/add',[ClientController::class,'store'])->name('make');
