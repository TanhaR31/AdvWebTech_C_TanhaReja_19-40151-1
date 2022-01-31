<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [PagesController::class,'index'])->name('home');
Route::get('/service', [PagesController::class,'pservice'])->name('pservice');
Route::get('/contact', [PagesController::class,'contactus'])->name('contactus');
Route::get('/about', [PagesController::class,'aboutus'])->name('aboutus');
Route::get('/teams', [PagesController::class,'ourteams'])->name('ourteams');