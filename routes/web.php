<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApotekController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/data', [ApotekController::class, 'allData']);
Route::get('/create', [ApotekController::class, 'create']);
Route::get('/edit/{id}', [ApotekController::class, 'edit']);
Route::post('/data/store', [ApotekController::class, 'store'])->name('store');
Route::patch('/data/edit/{id}', [ApotekController::class, 'update'])->name('update');
Route::delete('/data/delete/{id}', [ApotekController::class, 'destroy'])->name('destroy');