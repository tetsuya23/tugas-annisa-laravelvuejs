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

// Route::get('/categoris', [App\Http\Controllers\CategoriController::class, 'index']);
// Route::get('/categoris/create', [App\Http\Controllers\CategoriController::class, 'create']);
// Route::post('/categoris', [App\Http\Controllers\CategoriController::class, 'store']);
// Route::get('/categoris/{categori}/edit', [App\Http\Controllers\CategoriController::class, 'edit']);
// Route::put('/categoris/{categori}', [App\Http\Controllers\CategoriController::class, 'update']);
// Route::delete('/categoris/{categori}', [App\Http\Controllers\CategoriController::class, 'destroy']);
// cara 2
// Route::delete('/categoris/delete/{id}',[App\Http\Controllers\CategoriController::class, 'delete']);
// Route::resource('/categoris', [App\Http\Controllers\CategoriController::class);
// (menggunakan vue js)
Route::resource('/categoris', App\Http\Controllers\CategoriController::class);

Route::get('/member', [App\Http\Controllers\MemberController::class, 'index']);
Route::get('/members/create', [App\Http\Controllers\MemberController::class, 'create']);


// Route::get('/petugas', [App\Http\Controllers\PetugasController::class, 'index']);
// Route::get('/petugas/create', [App\Http\Controllers\PetugasController::class, 'create']);
// Route::post('/petugas', [App\Http\Controllers\PetugasController::class, 'store']);
// Route::get('/petugas/{petugas}/edit', [App\Http\Controllers\PetugasController::class, 'edit']);
// Route::put('/petugas/{petugas}', [App\Http\Controllers\PetugasController::class, 'update']);
// Route::delete('/petugas/{petugas}', [App\Http\Controllers\PetugasController::class, 'destroy']);

// (menggunakan vuejs)
<<<<<<< HEAD
Route::resource('/petugas', App\Http\Controllers\PetugasController::class); 
=======
Route::resource('/petugas', App\Http\Controllers\PetugasController::class);
>>>>>>> 171465b3980da29332f690c4fe19467e166466b9
Route::get('/api/petugas', [App\Http\Controllers\PetugasController::class, 'api']);

Route::get('/sale', [App\Http\Controllers\SaleController::class, 'index']);
Route::get('/transaction', [App\Http\Controllers\TransactionController::class, 'index']);
