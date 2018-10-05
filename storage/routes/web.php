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

Route::get('/index', function () {
    return view('welcome');
});





/********************************************************
                       Frontend
*********************************************************/
Route::get('/','websiteController@index')->name('index');
Route::get('/product_details/{id}','websiteController@product_details')->name('singleProduct');
Route::get('/myaccount','websiteController@myaccount')->name('myaccount');


Route::get('/checkout','checkoutController@checkout')->name('checkout');
Route::post('/customerRegister','checkoutController@customerRegister')->name('customerRegister');
Route::get('/checklogin','checkoutController@checklogin')->name('checklogin');

// Customer auth
Route::post('/customerLogin','checkoutController@customerLogin')->name('customerLogin');
Route::get('/customerLogout','checkoutController@customerLogout')->name('customerLogout');





// shipping
Route::post('/shiping','shipingController@shiping')->name('shiping');


//Thanks you page 

Route::get('/Thankyou','paymentController@Thankyou')->name('Thankyou');


Route::get('/blog','websiteController@blog')->name('blog');
Route::get('/blog_single','websiteController@blog_single')->name('blog_single');


Route::get('/contactus','websiteController@contactus')->name('contactus');

Route::get('/shop','websiteController@shop')->name('shop');


Route::get('/cart','cartController@show_cart')->name('cart');
Route::post('/addTocart/{id}','cartController@index')->name('addTocart');
Route::post('/update-cart/{rowId}','cartController@update_cart')->name('update_cart');
Route::get('/delete_cart/{id}','cartController@delete_cart')->name('delete_cart');





/********************************************************
                       Backend
*********************************************************/
Route::get('/','websiteController@index')->name('index');

// ---------Auth----------
Auth::routes();
Route::get('/home', 'adminController@index')->name('home');




//--------Category----------

Route::get('allcetagory','categoryController@index')->name('allcetagory');
Route::get('addCategory','categoryController@addCategory')->name('addCategory');
Route::post('insertCategory','categoryController@insertCategory')->name('insertCategory');
Route::get('editCategory/{id}','categoryController@editCategory')->name('editCategory');
Route::post('updateCategory/{id}','categoryController@updateCategory')->name('updateCategory');
Route::get('deleteCategory/{id}','categoryController@deleteCategory')->name('deleteCategory');





//--------Manufacture----------
Route::get('allmanufacture','manufatureController@index')->name('allmanufacture');
Route::get('addmanufacture','manufatureController@addmanufacture')->name('addmanufacture');
Route::post('insertmanufacture','manufatureController@insertmanufacture')->name('insertmanufacture');
Route::get('editmanufature/{id}','manufatureController@editmanufature')->name('editmanufature');
Route::post('updatemanuaceture/{id}','manufatureController@updatemanuaceture')->name('updatemanuaceture');
Route::get('deletemanufacture/{id}','manufatureController@deletemanufacture')->name('deletemanufacture');


//--------Product----------
Route::get('allProduct','productCotroller@index')->name('allProduct');
Route::get('addProduct','productCotroller@addProduct')->name('addProduct');
Route::post('insertProduct','productCotroller@insertProduct')->name('insertProduct');
Route::get('editProduct/{id}','productCotroller@editProduct')->name('editProduct');
Route::post('updateProduct/{id}','productCotroller@updateProduct')->name('updateProduct');
Route::get('deleteProduct/{id}','productCotroller@deleteProduct')->name('deleteProduct');


//--------Payment----------
Route::get('/Payment','paymentController@Payment')->name('Payment');
Route::post('/place-order','paymentController@Place_order')->name('Place_order');
Route::get('/order','paymentController@order')->name('order');
Route::get('/vieworder/{id}','paymentController@vieworder')->name('vieworder');
Route::get('/delete_order/{id}','paymentController@delete_order')->name('delete_order');


//--------slider----------
Route::get('/slider','sliderController@index')->name('slider');
Route::get('/addslider','sliderController@addslider')->name('addslider');
Route::post('/insertslider','sliderController@insertslider')->name('insertslider');
Route::get('deleteslider/{id}','sliderController@deleteslider')->name('deleteslider');