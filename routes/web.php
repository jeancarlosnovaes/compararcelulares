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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get( '/auth/{provider}', 'Auth\RegisterController@redirectToProvider' );
Route::get( '/auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback' );

Route::get( 'users/{user}/edit',  [ 'as' => 'users.edit', 'uses' => 'UserController@edit'] );
Route::patch( 'users/{user}/update',  [ 'as' => 'users.update', 'uses' => 'UserController@update' ] );

Route::get( '/verify/token/{token}', 'Auth\VerificationController@verify' )->name( 'auth.verify' );
Route::get( '/verify/resend', 'Auth\VerificationController@resend' )->name( 'auth.verify.resend' );
Route::get( '/home', 'HomeController@index' );

Route::middleware( [ 'is_admin' ] )->group( function() {
    Route::prefix( 'admin' )->group( function() {
        Route::resource( 'brands', 'BrandController' );
        Route::resource( 'coupons', 'CouponController' );
        Route::resource( 'stores', 'StoreController' );
        Route::resource( 'priceAlerts', 'PriceAlertController' );
        Route::resource( 'deals', 'DealsController' );
        Route::resource( 'advertisements', 'AdvertisementController' );
        Route::resource( 'smartphones', 'SmartphoneController' );
        Route::resource( 'tablets', 'TabletController' );
    });
});

Route::resource( 'comments', 'CommentController' );
