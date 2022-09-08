<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
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
    return view('pages.signin');
});
Route::get('/home', [AdminController::class, 'signin'])->name('home');
Route::get('/adminRegistration',[AdminController::class, 'adminRegistration'])->name('adminRegistration');
Route::post('/adminRegistration',[AdminController::class, 'adminRegistrationSubmit'])->name('adminRegistration');
Route::get('/signin', [AdminController::class, 'signin'])->name('signin');
Route::post('/signin', [AdminController::class, 'signinSubmit'])->name('signin');
Route::get('/admindash', [AdminController::class, 'admindash'])->name('admindash');
Route::get('/admininfo', [AdminController::class, 'admininfo'])->name('admininfo');
Route::get('/allAdmin', [AdminController::class, 'allAdmin'])->name('allAdmin');
Route::get('/adminDelete/{id}',[AdminController::class,'adminDelete'])->name('adminDelete');
Route::get('/Logout', [AdminController::class, 'Logout'])->name('Logout');
//AdminUpdate
Route::get('/adminUpdate', [AdminController::class, 'adminUpdate'])->name('adminUpdate');
Route::post('/adminUpdate', [AdminController::class, 'adminUpdateSubmit'])->name('adminUpdate');

//Cars
Route::get('/carRegistration', [CarController::class, 'carRegistration'])->name('carRegistration');
Route::post('/carRegistration', [CarController::class, 'carRegistrationSubmit'])->name('carRegistration');
Route::get('/carinfo', [CarController::class, 'carinfo'])->name('carinfo');
//CarUpdate
Route::get('/carUpdate/{id}',[CarController::class,'carUpdate'])->name('carUpdate');
Route::post('/carUpdate',[CarController::class,'carUpdateSubmit'])->name('carUpdate');
//Car delete
Route::get('/carDelete/{id}',[CarController::class,'carDelete'])->name('carDelete');
Route::get('/cardetails',[CarController::class,'carDetails'])->name('cardetails');
Route::get('/singleCardetails/{id}',[CarController::class,'singleCardetails'])->name('singleCardetails');