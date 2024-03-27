<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProductController;

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

// Route::get('/',[ProductController::class,'index']);

// Route::get('/show',[ProductController::class,'show']);

// Route::resource('Admin/', ProductController::class);
// Route::get('/create',function(){
//     return view('Admin/create');
// });
// Route::get('/update',function(){
//     return view('Admin/update');
// });
Route::get('/',[ProductController::class,'index'])->name('home');

Route::get('/san-pham',[ProductController::class,'getproduct'])->name('product');

Route::get('/chi-tiet/{id}',[ProductController::class,'Detailproduct'])->name('Detailproduct');

Route::get('/admin', [ProductController::class, 'getAllproduct']);

Route::get('/admin/create', [ProductController::class, 'create'])->name('product.create');

Route::post('/admin/create', [ProductController::class, 'store'])->name('product.create');

Route::get('/amin/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

Route::post('/amin/update/{id}', [ProductController::class, 'update'])->name('product.update');

Route::post('/admin/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');



