<?php

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

//Route::get('/', function () {

  //  return view('layout/tampilan_login');

//});

//Route::get('/rumah',function(){
  //  return view('home');
//});

// cara buat file controller = php artisan make:controller namacontroller -r
// route about (link hyperlinknya) [(file controller yang dituju), (function yang dituju)]
//route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index']);


//Route::view('login', 'layout/login');

//Route::get('/beranda', [App\Http\Controllers\LoginController::class, 'beranda']);

Route::get('/cektahun{berapa}', [App\Http\Controllers\LoginController::class, 'tahun']);

Route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('layout/register');

Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('home2');

//Route::get('/mahasiswa/{id}/edit', [App\Http\Controllers\MahasiswaController::class,'edit'])->name('mahasiswa.edit');

//Route::delete('/mahasiswa/{id}', [MahasiswaController::class,'destroy'])->name('mahasiswa.delete');

//Route::get('/', [\App\Http\Controllers\AboutController::class, 'index']);

//Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('layout/login');

//Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'index'])->name('home2');

//Route::get('/kelas/{id}/edit', [App\Http\Controllers\KelasController::class,'index'])->name('kelas.edit');

//Route::delete('/kelas/{id}', [KelasController::class,'destroy'])->name('kelas.delete');


Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('home2');

Route::get('/blog/{id}/edit', [App\Http\Controllers\BlogController::class,'index'])->name('blog.edit');

Route::delete('/blog/{id}', [BlogController::class,'destroy'])->name('blog.delete');









