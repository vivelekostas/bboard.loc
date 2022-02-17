<?php

use App\Http\Controllers\BbsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [BbsController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/add', [App\Http\Controllers\HomeController::class, 'showAddBbForm'])->name('bb.add');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'storeBb'])->name('bb.store');
Route::get('/home/{bb}/edit', [App\Http\Controllers\HomeController::class, 'showEditBbForm'])->name('bb.edit');
Route::patch('/home/{bb}', [App\Http\Controllers\HomeController::class, 'udateBb'])->name('bb.update');
Route::get('/home/{bb}/delete', [App\Http\Controllers\HomeController::class, 'showDeleteBbForm'])->name('bb.delete');
Route::delete('/home/{bb}', [App\Http\Controllers\HomeController::class, 'destroyBb'])->name('bb.destroy');

Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');
