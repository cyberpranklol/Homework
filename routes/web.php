<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactTwoController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
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
Route::get('/', [HomepageController::class, 'index']);

Route::get('/shop', [ShopController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/admin/all-contacts', [ContactController::class, 'allContacts'])
    ->middleware(['auth', \App\Http\Middleware\AdminCheckMiddleware::class]);

Route::get('/products', [ProductController::class, 'index']);

Route::post('/admin/send-contact', [ContactController::class, 'sendContact']);

Route::post('/admin/add-product', [ProductController::class, 'addProduct'])
    ->middleware('auth');

Route::get('/admin/products', [ProductController::class, 'adminProducts'])
    ->middleware('auth');

Route::get('/admin/all-products', [ProductsController::class, 'index'])
    ->middleware('auth')
    ->name('allProducts');

Route::get('/admin/delete-product/{product}', [ProductsController::class, 'delete'])
    ->middleware('auth')
    ->name('obrisiProizvod');

Route::get('/admin/delete-contact/{contact}', [ContactTwoController::class, 'delete'])
    ->middleware('auth')
    ->name('deleteContact');

Route::view('/admin/add-products', 'addProduct')
    ->middleware('auth');

Route::post('/admin/product/save', [ProductsController::class, 'savedProduct'])
    ->middleware('auth')
    ->name('snimanjeOglasa');

Route::get('/admin/products/edit/{product}', [ProductsController::class, 'singleProduct'])
    ->middleware('auth')
    ->name('product.single');

Route::post('/admin/product/save/{product}', [ProductsController::class, 'edit'])
    ->middleware('auth')
    ->name('product.save');

require __DIR__.'/auth.php';
