<?php

use App\Http\Controllers\MyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lobby', [MyController::class, 'goToLobby']);

Route::get('/comments', [MyController::class, 'goToComments']);

Route::get('/navigation', [MyController::class, 'Navigate']);

Route::get('/hello/{id}', [MyController::class, 'sayHelloTo']);

Route::get('/foreach', [MyController::class, 'foreach']);

Route::post('/postComment', [MyController::class, 'postComm']);
