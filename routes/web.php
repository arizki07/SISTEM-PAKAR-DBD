<?php

use App\Http\Controllers\Admin\DiagnosaController;
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\PenyakitController;
use App\Http\Controllers\Admin\RelasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Diagnosa\MulaiDiagnosaController;
use App\Http\Controllers\LandingController;
use App\Models\GejalaModel;
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

// Route::get('/', function () {
//     return view('product.diagnosis.index');
// });

Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::post('/ulasan', 'ulasan')->name('post.ulasan');
});

Route::controller(MulaiDiagnosaController::class)->group(function () {
    Route::get('/mulai_diagnosa', 'index');
    Route::post('/start-diagnosa', 'start')->name('diagnosa.start');
    Route::get('download/hasil', 'downloadPDF')->name('downloadpdf');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate')->name('post.login');
    Route::get('/logout', 'logout');
});

Route::middleware('auth')->group(function () {

    Route::get('/loading', function () {
        return view('product.loading');
    })->name('loading');

    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
    });

    Route::controller(PenyakitController::class)->group(function () {
        Route::get('/penyakit', 'index');
        Route::post('/penyakit/store', 'store')->name('store.penyakit');
        Route::put('/penyakit/update/{id}', 'update')->name('update.penyakit');
        Route::delete('/penyakit/destroy/{id}', 'destroy');
    });

    Route::controller(GejalaController::class)->group(function () {
        Route::get('/gejala', 'index')->name('gejala.index');
        Route::post('/gejala/store', 'store')->name('store.gejala');
        Route::put('/gejala/update/{id}', 'update')->name('update.gejala');
        Route::delete('/gejala/destroy/{id}', 'destroy');
    });

    Route::controller(RelasiController::class)->group(function () {
        Route::get('relasi', 'index')->name('relasi.index');
        Route::post('relasi/store', 'storeRelasi');
        Route::post('relasi/update/{id}', 'updateRelasi')->name('relasi.update');
        Route::delete('destroy/relasi/{id}', 'destroyR');
    });

    Route::controller(DiagnosaController::class)->group(function () {
        Route::get('diagnosa', 'index')->name('diagnosa.index');
        Route::get('/export-diagnosa', 'exportToExcel')->name('export.diagnosa');
        Route::get('/export-pdf', 'exportToPdf')->name('export.pdf');
        Route::get('/print/diagnosis', 'printDiagnosis')->name('print.diagnosis');
        Route::delete('destroy/diagnosa/{id}', 'destroy');
    });
});
