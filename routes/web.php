<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WhiteListController;

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

Route::get('/', [Controller::class, 'welcome'])->name('welcome');
Route::get('/shop', [Controller::class, 'shop'])->name('shop');
Route::get('/blogs', [Controller::class, 'blogs'])->name('blogs');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/signin', [Controller::class, 'signin'])->name('signin');
Route::get('/signup', [Controller::class, 'signup'])->name('signup');
Route::get('/{id}/product', [Controller::class, 'product'])->name('product');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [Controller::class, 'profile'])->name('profile');
    Route::get('/groups', [Controller::class, 'groups'])->name('groups');

    Route::resource('users', UserController::class);
    Route::resource('rates', RateController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);    
    Route::resource('whitelists', WhiteListController::class);

    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';
