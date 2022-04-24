<?php

use App\Http\Controllers\ArbeitszeiterfassungsController;
use App\Http\Controllers\MitarbeiterController;
use App\Http\Controllers\ZeiterfassungController;
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

Auth::routes();

Route::middleware('auth:web')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('mitarbeiter', MitarbeiterController::class);
    Route::resource('zeiterfassung', ZeiterfassungController::class);
    Route::resource('arbeitszeiterfassung', ArbeitszeiterfassungsController::class);

    Route::get('woechentlich', [\App\Http\Controllers\ChartController::class, 'weekly']);
    Route::get('monatlich', [\App\Http\Controllers\ChartController::class, 'monthly']);
    Route::get('jaehrlich', [\App\Http\Controllers\ChartController::class, 'yearly']);
});
