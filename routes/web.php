<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RealisationsController;

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


Route::view('/', 'index')->name('index');
Route::view('/realisation', 'realisation');

Route::prefix('admin')->name('admin.')->group(function (){
    Route::view('/', 'admin.index');

    Route::prefix('realisations')->name('realisations.')->group(function (){
        Route::get('/', [RealisationsController::class, 'index'])->name('index');
    });
});