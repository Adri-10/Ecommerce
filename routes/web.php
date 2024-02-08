<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('home');
//});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blog-category/{id}', [HomeController::class, 'category'])->name('category');
Route::get('/blog-detail/{id}', [HomeController::class, 'detail'])->name('detail');
Route::post('/full-name', [HomeController::class, 'fullName'])->name('full-name');
Route::post('/make-series', [HomeController::class, 'makeSeries'])->name('make-series');
Route::post('/even-odd', [HomeController::class, 'evenOdd'])->name('even-odd');
Route::post('/calculator', [HomeController::class, 'myCalculator'])->name('calculator');






