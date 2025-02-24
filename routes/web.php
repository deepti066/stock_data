<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;

Route::get('/stock-form', [StockController::class, 'create'])->name('stock.create');
Route::post('/stock-store', [StockController::class, 'store'])->name('stock.store');
Route::get('/stock-list', [StockController::class, 'index'])->name('stock.index');









// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
