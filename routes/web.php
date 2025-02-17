<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PenulisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


//localhost:8000/admin/inputbuku
Route::get('/admin/inputbuku', function () {
    return view('admin.inputbuku');
});

// route untuk kategori
// Route::get('/admin/kategori', function () {
//     return view('admin.kategori');
// });
Route::get('/admin/inputkategori', [CategoryController::class, 'index']) ->name('admin.inkategori');


Route::post('/admin/inputkategori', [CategoryController::class, 'store']) ->name('admin.storekategori');

// route untuk penulis
// Route::get('/admin/penulis', function () {
//     return view('admin.penulis');
// });

Route::get('/admin/inputpenulis', [PenulisController::class, 'index']) ->name('admin.penulis');


Route::post('/admin/inputpenulis', [PenulisController::class, 'store']) ->name('admin.storepenulis');