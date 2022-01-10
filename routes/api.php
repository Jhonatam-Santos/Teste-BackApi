<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevController;
use App\Http\Controllers\RepositoryController;

Route::post('/Dev', [DevController::class, 'post']);
Route::get('/Dev', [DevController::class, 'get']);
Route::put('/Dev/{id}', [DevController::class, 'put']);
Route::delete('/Dev/{id}', [DevController::class, 'delete']);


Route::post('/Repo', [RepositoryController::class, 'post']);
Route::get('/Repo', [RepositoryController::class, 'get']);
Route::put('/Repo/{repo_id}', [RepositoryController::class, 'put']);
Route::delete('/Repo/{repo_id}', [RepositoryController::class, 'delete']);

