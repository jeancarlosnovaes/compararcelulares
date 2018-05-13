<?php

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


Route::get( 'marcas-de-celulares', [ 'as' => 'brands.brand', 'uses' => 'BrandController@getAllBrands' ] );
Route::get( 'marcas-de-celulares/{brand}', [ 'as' => 'smartphones.smartphone', 'uses' => 'SmartphoneController@getAllSmartphones' ] );
Route::get( 'marcas-de-tablets', [ 'as' => 'brands.index', 'uses' => 'BrandController@index' ] );;
Route::get( 'marcas-de-tablets/{brand}', [ 'as' => 'tablets.tablet', 'uses' => 'BrandController@index' ] );

Route::get( 'cupons-de-descontos', [ 'as' => 'coupons.index', 'uses' => 'CouponController@index' ]  );
Route::get( 'cupom-de-desconto/{cupom}', [ 'as' => 'coupons.coupon', 'uses' => 'CouponController@getCoupon' ]  );

Route::get( 'ofertas', [ 'as' => 'deals.index', 'uses' => 'DealsController@index' ] );
Route::get( 'oferta/{oferta}', [ 'as' => 'deals.deals', 'uses' => 'DealsController@getDeals' ] );

Route::prefix( 'smartphone' )->group( function() {
    Route::get( '{slug}', [ 'as' => 'smartphones.smartphone', 'uses' => 'SmartphoneController@getSmartphone' ] );
});
Route::get( 'smartphones' , [ 'as' => 'smartphones.index', 'uses' => 'SmartphoneController@index' ] );


Route::prefix( 'tablet' )->group( function() {
    Route::get( '{slug}', [ 'as'=> 'tablets.tablet', 'uses' => 'TabletController@getTablet' ] ); 
});
Route::get( 'tablets', [ 'as' => 'tablets.index', 'uses' => 'TabletController@index' ] );



Route::prefix( 'comparar' )->group( function() {
    Route::get( '{slug1}/vs/{slug2}', [ 'as' => 'compare.index', 'uses' => 'ControllerCompare@compareSmartphone' ] );  
    Route::get( '{slug1}/vs/{slug2}/vs/{slug3}', [ 'as' => 'compare.index', 'uses' => 'ControllerCompare@compareSmartphone' ] );  
    Route::get( '{slug1}/vs/{slug2}/vs/{slug3}/vs/{slug4}', [ 'as' => 'compare.index', 'uses' => 'ControllerCompare@compareSmartphone' ] );
    
    Route::get( '{slug1}/vs/{slug2}', [ 'as' => 'compare.index', 'uses' => 'ControllerCompare@compareTablet' ] );  
    Route::get( '{slug1}/vs/{slug2}/vs/{slug3}', [ 'as' => 'compare.index', 'uses' => 'ControllerCompare@compareTablet' ] );  
    Route::get( '{slug1}/vs/{slug2}/vs/{slug3}/vs/{slug4}', [ 'as' => 'compare.index', 'uses' => 'ControllerCompare@compareTablet' ] );
});


Route::resource( 'comments', 'CommentController' );

Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin');
