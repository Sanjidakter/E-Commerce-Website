<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PublicController;

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

Route::resource('products',ProductController::class);
Route::resource('sliders',SliderController::class);
// Route::resource('roles',RoleController::class);
Route::get('roles',[RoleController::class,'index'])->name('roles.index');


Route::get('products/pdf/',[ProductController::class,'downloadPdf'])->name('products.pdf');



// Route::get('/products',[ProductController::class,'index'])->name('products.index');
// Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
// Route::get('/products',[ProductController::class,'store'])->name('products.store');
// Route::get('/products/{product}',[ProductController::class,'show'])->name('products.show');
// Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit');
// Route::get('/products/{product}',[ProductController::class,'update'])->name('products.update');
// Route::get('/products/{product}',[ProductController::class,'destroy'])->name('products.destroy');



Route::get('/home', function () {
    // dd(auth()->user()->name);
    return view('backend.home');
 
 })->middleware('auth')->name('home');
 

 
 Route::get('/',[PublicController::class,'index']);



 Route::get('/table', function () {
    return view('backend.table');
 })->name('table');


 Route::get('/roles/{role}',
 [RoleController::class,'show'])->name('roles.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/', function () {
//     return view('frontend.index');
// });

require __DIR__.'/auth.php';
