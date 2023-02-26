<?php

use Illuminate\Support\Facades\Route;
use App\Http\Components\users\Home;
use App\Http\Components\users\Login;
use App\Http\Components\users\Register;
use App\Http\Components\users\Product;
use App\Http\Components\admin\Login as AdLogin;
use App\Http\Components\admin\Dashboard;
use App\Http\Components\admin\Addproduct;
use App\Http\Components\admin\EditProduct;

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



route::get('/' , Home::class) -> name('home');
Route::middleware(['guest:web'])->group(function () {
    route::get('/login' , Login::class) -> name('login');
    route::get('/register' , Register::class) -> name('register');
});

route::get('/product/{product}' , Product::class) -> name('product');

Route::middleware(['auth:web'])->group(function () {

});

Route::prefix('admin') -> name('admin.') ->group(function () {
    Route::middleware(['guest:admin'])->group(function () {
        route::get('/login' , AdLogin::class) -> name('login');

    });

    Route::middleware(['auth:admin'])->group(function () {
        route::get('/dashboard' , Dashboard::class) -> name('dashboard');
        route::get('/addproduct' , Addproduct::class) -> name('product');
        route::get('/editproduct/{product}' , EditProduct::class) -> name('editproduct');
    });

});
