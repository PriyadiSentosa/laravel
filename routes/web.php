<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PengarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'], function (){

    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/artikel', function () {
        return view('admin.artikel.index');
    });
    Route::get('/kategory', function () {
        return view('admin.kategory.index');
    });

    // Route::get('/users', function () {
    //     return view('admin.users.index');
    // });

    Route::resource('users', UserController::class);
    Route::resource('books', BookController::class);
    Route::resource('pengarangs', PengarangController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
