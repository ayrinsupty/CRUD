<?php

use App\Http\Controllers\DeleteController;
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

// Root
// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'create'); // Display Create Page To Insert Data
Route::post('create', [UserController::class, 'insert']); // Create Data
Route::get('view', [ViewController::class, 'index']); // Read Data
Route::get('edit/{id}', [UpdateController::class, 'show']); // Read Data by ID
Route::post('edit/{id}', [UpdateController::class, 'edit']); // Update Data
Route::get('delete/{id}', [DeleteController::class, 'delete']); // Delete Data