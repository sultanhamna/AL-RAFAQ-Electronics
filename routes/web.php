<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowProductController;
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

Route::get('/',[ShowProductController::class,'index'])->name('content');


//Route::get('/indexProduct', [ProductController::class, 'index'])->name('index.product');
//Route::get('/createProduct', [ProductController::class, 'create'])->name('create.product');
//Route::post('/storeProduct', [ProductController::class, 'store'])->name('store.product');
//Route::get('/editProduct/{id}', [ProductController::class, 'edit'])->name('edit.product');
//Route::any('/deleteProduct/{id}', [ProductController::class, 'destroy'])->name('delete.product');
//Route::post('/updateProduct/{id}', [ProductController::class, 'update'])->name('update.product');
