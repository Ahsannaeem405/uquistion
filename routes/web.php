<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[FrontController::class,'index']);
Route::get('/about',[FrontController::class,'about']);

// Route::get('/about', function () {
//     return view('about');
// });
Route::post('submit_form',[FrontController::class,'submit_form']);

Auth::routes();
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->middleware(['SessionCheck', 'auth'])->group(function () {
Route::get('/index',[AdminController::class,'index']);
Route::get('/contact',[AdminController::class,'contact']);
Route::get('/delete_contact/{id}',[AdminController::class,'delete_contact']);
Route::get('profile',[AdminController::class,'profile']);
Route::post('updateprofile',[AdminController::class,'updateprofile']);
Route::get('logo',[AdminController::class,'logo']);
Route::get('edit_logo/{id}',[AdminController::class,'edit_logo']);
Route::post('updatelogo',[AdminController::class,'updatelogo']);







});
