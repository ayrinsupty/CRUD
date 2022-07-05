<?php

use App\Http\Controllers\UpdateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
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

Route::post('create', [UserController::class, 'insert']);
Route::view('create', 'create');

Route::get('view', [ViewController::class, 'index']);
Route::get('edit/{id}', [UpdateController::class, 'show']);
Route::post('edit/{id}', [UpdateController::class, 'edit']);
