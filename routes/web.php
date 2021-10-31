<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

// Route::get('/users', function(){
//     return view('users');
// });

Route::get('/users', [UsersController::class, 'index'])->name('users.index');

Route::get('/student', [StudentController::class, 'index'])->name('students.index');
