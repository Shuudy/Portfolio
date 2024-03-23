<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\RealisationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\RealisationsController as PublicRealisationsController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/contact', [HomeController::class, 'contact'])->middleware('throttle:5,1')->name('contact');

Route::view('/realisation', 'realisation');

Route::get('mon-cv', function () {
    return response()->file(storage_path('app/public/cv/cv.pdf'));
})->name('cv');

Route::prefix('realisations')->name('realisations.')->controller(PublicRealisationsController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{slug}-{id}', 'show')->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ])->name('show');

    Route::view('/test', 'realisation');
});

Route::controller(SkillsController::class)->group(function () {
    Route::get('/competences', 'index')->name('skills');
    Route::get('/competences/{skill}', 'show')->name('skills.show');
    Route::get('/sous-competences/{subskill}', 'showRealisations')->name('subskills.show');
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::controller(AuthController::class)->group(function () {
        Route::prefix('/login')->middleware('guest')->group(function () {
            Route::get('/', 'index')->name('login');
            Route::post('/', 'login')->middleware('throttle:3,1');
        });

        Route::get('/logout', 'logout')->middleware('auth')->name('logout');
    });

    Route::middleware('auth')->group(function () {
        Route::view('/', 'admin.index')->name('index');

        Route::prefix('realisations')->name('realisations.')->controller(RealisationsController::class)->group(function () {
            Route::get('/', 'index')->name('index');

            Route::get('/create', 'create')->name('create');
            Route::put('/create', 'store');

            Route::get('/edit/{realisation}', 'edit')->name('edit');
            Route::patch('/update/{realisation}', 'update')->name('update');
        });
    });
});
