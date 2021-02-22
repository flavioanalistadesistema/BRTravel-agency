<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AutoCompleteController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhpMailerController;
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
    Route::post('/store', [BudgetController::class, 'store'])->name('save_budgets');
    Route::get('/success/{name}/{email}', [BudgetController::class, 'success'])->name('success_budgets');
    //Route::get('/success', function () {return view('site.success');})->name('success');
});
Route::get('/', function(){
    return redirect('/home');
});
Route::get('/email', [PhpMailerController::class , 'index']);
Route::resource('home', HomeController::class);
Route::get('/autocomplete/view', [AutoCompleteController::class, 'index']);
Route::get('/autocomplete/show', [AutoCompleteController::class, 'show']);
Route::resource('about', AboutController::class);
Route::resource('destiny', DestinationController::class);
Route::resource('contact', ContactController::class);
