<?php

use App\Http\Controllers\FakeApiController;
use App\Http\Controllers\LogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('users', [FakeApiController::class, 'getUsers']);
Route::get('posts', [FakeApiController::class, 'getPosts']);
Route::get('albums', [FakeApiController::class, 'getAlbums']);
Route::get('logs', [LogController::class, 'index']);
Route::put('logs/{id}', [LogController::class, 'update']);
Route::delete('logs/{id}', [LogController::class, 'delete']);