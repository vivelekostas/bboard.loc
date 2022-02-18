<?php

use App\Http\Controllers\BbsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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

// И мой всратый - с группами по uri, name и middleware 
Route::prefix('home')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::name('bb.')->group(function () {
        Route::get('/add', [HomeController::class, 'showAddBbForm'])->name('add');
        Route::post('/', [HomeController::class, 'storeBb'])->name('store');
        Route::middleware('can:update,bb')->group(function () {
            Route::get('/{bb}/edit', [HomeController::class, 'showEditBbForm'])->name('edit');
            Route::patch('/{bb}', [HomeController::class, 'udateBb'])->name('update');
        });
        Route::middleware('can:destroy,bb')->group(function () {
            Route::get('/{bb}/delete', [HomeController::class, 'showDeleteBbForm'])->name('delete');
            Route::delete('/{bb}', [HomeController::class, 'destroyBb'])->name('destroy');
        });
    });
});

Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');

// Старый вариант, такой как даёт автор, более топорно простой
// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/home/add', [HomeController::class, 'showAddBbForm'])->name('bb.add');
// Route::post('/home', [HomeController::class, 'storeBb'])->name('bb.store');
// Route::get('/home/{bb}/edit', [HomeController::class, 'showEditBbForm'])->name('bb.edit')->middleware('can:update,bb');
// Route::patch('/home/{bb}', [HomeController::class, 'udateBb'])->name('bb.update')->middleware('can:update,bb');
// Route::get('/home/{bb}/delete', [HomeController::class, 'showDeleteBbForm'])->name('bb.delete')->middleware('can:destroy,bb');
// Route::delete('/home/{bb}', [HomeController::class, 'destroyBb'])->name('bb.destroy')->middleware('can:destroy,bb');
