<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix'=>'admin', 'middleware' => ['auth']], function (){

    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/artikel', function () {
        return view('admin.artikel.index');
    });
    Route::get('/kategory', function () {
        return view('admin.kategory.index');
    });

    Route::get('/users', function () {
        return view('admin.users.index');
    });

    Route::resource('user', UserController::class);
    Route::resource('book', BookController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
