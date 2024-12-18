<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('product.index');
// });
// route::resource('product', ProductController::class);


// Route::get('/', [ProductController::class, 'index']);

Route::get('/',function (){
    return view('home.home');
});

Route::middleware('auth')->group(function () {
    Route::get('product', [ProductController::class, 'index'])->name('product.index');
    Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('product/show/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::put('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
