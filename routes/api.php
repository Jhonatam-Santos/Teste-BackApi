<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevController;

Route::post('/Dev', DevController::class, 'post');
Route::get('/Dev', DevController::class, 'get');


