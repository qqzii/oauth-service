<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::view('/home', 'home')->middleware(['auth']);

Route::middleware('auth:api')
    ->prefix('api')
    ->get('user', function (Request $request) {
        return $request->user();
    });
