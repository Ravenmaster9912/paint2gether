<?php

use App\Http\Controllers\interfaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[interfaceController::class, 'index']);