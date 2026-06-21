<?php

use App\Http\Controllers\interfaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [interfaceController::class, 'index']);
