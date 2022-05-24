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

Route::get('/', [\App\Http\Controllers\course_controller::class, 'index']);

Route::post('/add', [\App\Http\Controllers\course_controller::class, 'create'])->name('create');
Route::get('/valide/{id}', [\App\Http\Controllers\course_controller::class, 'valide'])->name('valide');
Route::get('/devalide/{id}', [\App\Http\Controllers\course_controller::class, 'devalide'])->name('devalide');
Route::get('/delete/{id}', [\App\Http\Controllers\course_controller::class, 'delete'])->name('delete');