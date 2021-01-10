<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'home'])->name('home');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', [ChatController::class, 'dashboard'])->name('dashboard');
    Route::get('/chat', [ChatController::class, 'chat'])->name('chat');
});

