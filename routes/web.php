<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('index');
});

Route::get('/teste2' , [SiteController::class, 'index']);