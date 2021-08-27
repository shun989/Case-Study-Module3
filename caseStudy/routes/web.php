<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [ProductController::class, 'indexHome'])->name('home-page');
Route::get('/search',[ProductController::class,'getSearch'])->name('product.search');

Route::group(['middleware' => 'locale'], function () {

        Auth::routes();
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/login', function () {
            return view('auth.login');
        })->name('login');
        Route::get('/register', function () {
            return view('auth.register');
        })->name('register');
        Route::get('/users', [HomeController::class, 'showPageGuest']);

//        Route::get('/', [ProductController::class, 'indexUser'])->name('users.index');
        Route::get('/item/{id}', [ProductController::class, 'show'])->name('users.item');
    Route::get('change-language/{language}', [LanguageController::class, 'changeLanguage'])->name('view.change-language');

});

Route::group(['middleware' => 'locale'], function () {

//    Route::prefix('/admin')->group(function () {
        Auth::routes();
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/login', function () {
            return view('auth.login');
        })->name('login');
        Route::get('/register', function () {
            return view('auth.register');
        })->name('register');
        Route::get('/admin', [HomeController::class, 'showPageAdmin'])->name('admin');

        Route::get('/table', [ProductController::class, 'index'])->name('admin.index');
        Route::get('/card', [ProductController::class, 'showCard'])->name('admin.showCard');
        Route::get('/create', [ProductController::class, 'createForm'])->name('admin.createForm');
        Route::post('/create', [ProductController::class, 'create'])->name('admin.create');
        Route::get('/update/{id}', [ProductController::class, 'updateForm'])->name('admin.updateForm');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('admin.update');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('admin.delete');

    Route::get('/search-guest',[ProductController::class,'getSearch'])->name('product.search');
    Route::get('/search',[ProductController::class,'getSearchAdmin'])->name('admin.search');

    Route::get('change-language/{language}', [LanguageController::class, 'changeLanguage'])->name('view.change-language');

});

Route::prefix('/cart')->group(function (){
    Route::get('/',[CartController::class,'index'])->name('cart.index');
    Route::get('/add-to-cart/{productId}',[CartController::class,'addToCart'])->name('cart.addToCart');
    Route::get('/update/{productId}',[CartController::class,'updateQuantityItem'])->name('cart.updateQuantityItem');
    Route::get('/delete/{id}',[CartController::class,'deleteCartItem'])->name('cart.delete');
//    Route::get('/delete-cart',[CartController::class,'deleteCart'])->name('cartDelete');
});

//Route::get('/search',[ProductController::class,'getSearch'])->name('product.search');
//Route::get('/search',[ProductController::class,'getSearchAdmin'])->name('admin.search');


