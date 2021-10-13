<?php

use Illuminate\Support\Facades\Auth;
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

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
