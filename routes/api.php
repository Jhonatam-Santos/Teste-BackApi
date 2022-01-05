<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('Dev', 'App\Http\Controllers\DevController@post');
Route::get('Dev', 'App\Http\Controllers\DevController@get');


