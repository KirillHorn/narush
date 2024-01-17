<?php

use Illuminate\Database\Schema\IndexDefinition;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\AdminController    ;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Indexcontroller::class, 'index']);

Route::get('/personalcab', [Indexcontroller::class, 'personalcab']);

Route::get('/signout', [Indexcontroller::class, 'signout']);

Route::get('registration', [Registercontroller::class,'registration_view']);

Route::post('register_valid', [Registercontroller::class,'register_valid']);
Route::post('auth_valid', [IndexController::class,'auth_valid']);

Route::get('/admin/index', [AdminController::class,'index']);
