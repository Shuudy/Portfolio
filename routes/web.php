<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

    Route::get('/login', [AuthController::class, 'login'])->name('login');

    Route::view('/', 'admin.index')->name('index');    

    Route::prefix('realisations')->name('realisations.')->controller(RealisationsController::class)->group(function (){
        Route::get('/', 'index')->name('index');

        Route::get('/create', 'create')->name('create');

        Route::get('/edit/{realisation}', 'edit')->name('edit');
        Route::patch('/update/{realisation}', 'update')->name('update');
    });
});