<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/categori', [App\Http\Controllers\CategoriController::class, 'index']);
Route::get('/member', [App\Http\Controllers\MemberController::class, 'index']);
Route::get('/petugas', [App\Http\Controllers\PetugasController::class, 'index']);
Route::get('/sale', [App\Http\Controllers\SaleController::class, 'index']);
Route::get('/transaction', [App\Http\Controllers\TransactionController::class, 'index']);