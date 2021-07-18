<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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


Route::post('/updatePage', [RegisterController::class, 'updatePage'])->name('post.update');
Route::post('/editPage', [RegisterController::class, 'editPage'])->name('post.edit');
Route::get('/detailPage', [RegisterController::class, 'detailPage']);
Route::get('/restore', [RegisterController::class, 'restore']);
Route::get('/delete', [RegisterController::class, 'destroy']);
Route::get('/forceDelete', [RegisterController::class, 'forceDelete']);
Route::get('/register', [RegisterController::class, 'RegisterForm']);
Route::post('/', [RegisterController::class, 'RegisterCustomer'])->name('post.register');
Route::get('/login', [DepartmentController::class, 'create']);
Route::post('/login', [RegisterController::class, 'store'])->name('post.login');
