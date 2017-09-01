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
// localhost/Electric_Bike/public/index
Route::get('/', function () {
    return view('pages.home-page');
});

Route::get('index',['as'=>'homepage','uses'=>'PageController@getHomePage']);
Route::get('products',['as'=>'products','uses'=>'PageController@getProducts']);
Route::get('product-detail/{id}',['as'=>'product-detail','uses'=>'PageController@getProductDetail']);
Route::get('add-to-cart/{id}/{quantity}/{check_ajax}',['as'=>'add-to-cart','uses'=>'PageController@getAddToCart']);
Route::get('reduce-to-cart/{id}/{quantity}/{check_ajax}',['as'=>'reduce-to-cart','uses'=>'PageController@getReduceToCart']);
Route::get('remove-item-cart/{id}',['as'=>'remove-item-cart','uses'=>'PageController@getRemoveItemCart']);
Route::get('show-cart-info',['as'=>'show-cart-info','uses'=>'PageController@getShowCartInfo']);
Route::get('search-products',['as'=>'search-products','uses'=>'PageController@getSearchProducts']);
Route::get('search-products-by/{product_type}/{id_brand}/{cheap}',['as'=>'search-products-by','uses'=>'PageController@getSearchProductsBy']);
Route::get('hot-new-sale/{option}',['as'=>'hot-new-sale','uses'=>'PageController@getHotNewSale']);
Route::get('search-all',['as'=>'search-all','uses'=>'PageController@getSearchAll']);
Route::get('cart',['as'=>'cart','uses'=>'PageController@getCart']);
Route::get('checkout',['as'=>'checkout','uses'=>'PageController@getCheckout']);

Route::get('test-route/{id}/{shin}',['as'=>'test-route','uses'=>'PageController@getTestRoute']);


