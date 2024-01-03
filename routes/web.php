<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'index']);

Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']);

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

Route::get('/admin/all-contacts', [\App\Http\Controllers\ContactController::class, 'allContacts']);

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index']);

Route::post('/send-contact', [\App\Http\Controllers\ContactController::class, 'sendContact']);

Route::post('/admin/add-product', [\App\Http\Controllers\ProductController::class, 'addProduct']);

Route::get('/admin/products', [\App\Http\Controllers\ProductController::class, 'adminProducts']);

Route::get('/admin/all-products', [\App\Http\Controllers\ProductsController::class, 'index'])
    ->name('allProducts');

Route::get('/admin/delete-product/{product}', [\App\Http\Controllers\ProductsController::class, 'delete'])
    ->name('obrisiProizvod');

Route::get('/admin/delete-contact/{contact}', [\App\Http\Controllers\ContactTwoController::class, 'delete'])
    ->name('deleteContact');

Route::view('/admin/add-products', 'addProduct');

Route::post('/admin/product/save', [\App\Http\Controllers\ProductsController::class, 'savedProduct'])
    ->name('snimanjeOglasa');

Route::get('/admin/products/edit/{product}', [\App\Http\Controllers\ProductsController::class, 'singleProduct'])
    ->name('product.single');

Route::post('/admin/product/save/{product}', [\App\Http\Controllers\ProductsController::class, 'edit'])
    ->name('product.save');

require __DIR__.'/auth.php';
