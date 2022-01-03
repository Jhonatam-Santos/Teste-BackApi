<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', 'DevController@get');
Route::delete('/{id}', 'DevController@delete');
Route::put('/{id}', 'DevController@put');
Route::post('/', 'DevController@post');
