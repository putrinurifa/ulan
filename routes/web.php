<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanAdminController;
use App\Http\Controllers\ConvectionController;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HalamanAdminController::class, 'index'])->name('home');

// Route::get('convection/dashboard',[ConvectionController::class, 'convection.dashboard']);
// Route::get('convection/cari',[ConvectionController::class, 'search']);
Route::resource('admin',HalamanAdminController::class);
Route::resource('convection',ConvectionController::class);
Route::get('/convection/cari',[ConvectionController::class, 'search']);
// Route::prefix('convection') -> group(function(){
//     Route::get('/convection', [ConvectionController::class, 'dashboard']);
//     Route::get('/convection/dashboard' ,function(){
//         return redirect('convection.home');
//     });
// });