<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortfolioController;
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

Route::get('/', [PortfolioController::class , 'index'])->name('portfolio');
// 
Route::prefix('/admin')->group(function(){
    Route::get('/', [AdminController::class , 'index'])->name('admin.signIn');
    Route::get('/dashboard', [AdminController::class , 'dashboard'])->name('admin.dashboard');
});
