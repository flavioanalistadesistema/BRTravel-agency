<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::prefix('budgets')->group(function () {
    Route::post('/save', [BudgetController::class, 'save'])->name('save_budgets');
});

Route::resource('home', HomeController::class);
Route::resource('sobre', AboutController::class);
Route::resource('destino', DestinationController::class);
Route::resource('contato', ContactController::class);
