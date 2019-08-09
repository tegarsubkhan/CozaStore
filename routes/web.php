<?php

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
Route::auth();
Route::get('/', function () {
    return redirect('/produk');
});
Route::get('/produk', 'ProdukController@index');
Route::get('/produk/{id}', 'ProdukController@show');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'can:public'], function () {
        Route::post('/cart/checkout', 'CartController@checkout');
        Route::resource('/cart', 'CartController');
        Route::get('/checkout', 'CheckoutController@index');
        Route::post('/checkout', 'CheckoutController@checkout');
        Route::get('/payment-info/{id}', 'PaymentInfoController@index');
        Route::get('/order', 'OrderController@index');
    });
    Route::group(['middleware' => 'can:admin', 'prefix' => 'admin'], function () {
        Route::get('/', function () {
            return redirect('admin/transaksi');
        });
        Route::resource('/transaksi', 'Admin\TransaksiController');
        Route::resource('/barang', 'Admin\BarangController');
        Route::resource('/kategori', 'Admin\KategoriController');
        Route::resource('/user', 'Admin\UserController');
    });
});
