<?php

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
Route::get('/about', [PortfolioController::class , 'about'])->name('about');
Route::get('/team', [PortfolioController::class , 'team'])->name('team');
Route::get('/contact', [PortfolioController::class , 'contact'])->name('contact');
// Route::get('/service', [PortfolioController::class , 'service'])->name('service');
