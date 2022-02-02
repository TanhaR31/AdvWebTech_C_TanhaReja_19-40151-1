<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});
Route::get('/wc', function () {
    return 'Hello World';
    //return "AWT"; '',"" 2vabei kaz hobe. 2bar return hobe na.
});
Route::get('/test', function () {
    return '<h1>Hello World</h1>';
});
Route::get('/pages', [PagesController::class, 'index'])->name('pages');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');

//Dynamic Id Through URL
Route::get('/user/{id}', function($id){
    return "<b>Passed Id : ".$id."<b>";
});

//Student
Route::get('/studentlist', [StudentController::class, 'studentList'])->name('studentList');
Route::get('/studentcreate', [StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentcreatesubmitted', [StudentController::class, 'studentCreateSubmitted'])->name('studentCreate');

