<?php

use Illuminate\Support\Facades\Route;
use App\Http\Components\users\Home;
use App\Http\Components\users\Login;
use App\Http\Components\users\Register;
use App\Http\Components\users\Product;
use App\Http\Components\users\Orders;
use App\Http\Components\users\Invoice;
use App\Http\Components\admin\Login as AdLogin;
use App\Http\Components\admin\Dashboard;
use App\Http\Components\admin\Addproduct;
use App\Http\Components\admin\EditProduct;
use App\Http\Controllers\Payment;




route::get('/' , Home::class) -> name('home');
Route::middleware(['guest:web'])->group(function () {
    route::get('/login' , Login::class) -> name('login');
    route::get('/register' , Register::class) -> name('register');
});

route::get('/product/{product}' , Product::class) -> name('product');

Route::middleware(['auth:web'])->group(function () {
    route::post('/charge' , [Payment::class , 'charge']) -> name('charge');
    route::get('/orders' , Orders::class) -> name('order');
    route::get('/invoice/{order_id}' , Invoice::class) -> name('invoice');
    route::get('/payment' , [Payment::class , 'index']) -> name('payment');

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
