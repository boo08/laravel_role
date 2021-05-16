<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users', [App\Http\Controllers\UsersController::class,'index'])->name('users.index');
Route::get('users/create', [App\Http\Controllers\UsersController::class,'create'])->name('users.create');
Route::post('users/store', [App\Http\Controllers\UsersController::class,'store'])->name('users.store');
Route::get('users/edit/{id}', [App\Http\Controllers\UsersController::class,'edit'])->name('users.edit');
Route::post('users/update/{id}', [App\Http\Controllers\UsersController::class,'update'])->name('users.update');
Route::get('users/destroy/{id}', [App\Http\Controllers\UsersController::class,'destroy'])->name('users.destroy');

Route::get('roles', [App\Http\Controllers\RolesController::class,'index'])->name('roles.index');
Route::get('roles/create', [App\Http\Controllers\RolesController::class,'create'])->name('roles.create');
Route::post('roles/store', [App\Http\Controllers\RolesController::class,'store'])->name('roles.store');
Route::get('roles/edit/{id}', [App\Http\Controllers\RolesController::class,'edit'])->name('roles.edit');
Route::post('roles/update/{id}', [App\Http\Controllers\RolesController::class,'update'])->name('roles.update');
Route::get('roles/destroy/{id}', [App\Http\Controllers\RolesController::class,'destroy'])->name('roles.destroy');

