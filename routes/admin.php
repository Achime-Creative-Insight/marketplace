<?php

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    //All the admin routes will be defined here...
    Route::namespace('Auth')->group(function(){

        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');

        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

    });
    Route::middleware(['auth:admin'])->group(function()
    {
        Route::get('/', 'HomeController@index')->name('home');

        Route::post('/settings', 'SettingsController@save')->name('settings');

        Route::prefix('products')->group(function () {
            Route::get('/', 'ProductController@index')->name('product.index');
            // Requires Auth
            Route::get('{product}/edit', 'ProductController@edit')->name('product.edit');
            Route::put('{product}', 'ProductController@update')->name('product.update');
    
            Route::delete('{product}', 'ProductController@destroy')->name('product.destroy');
            
            Route::get('{product}', 'ProductController@show')->name('product.show');
        });
        
        Route::prefix('categories')->group(function ()
        {
            Route::get('/', 'CategoryController@index')->name('category.index');
            Route::get('{category}', 'CategoryController@show')->name('category.show');

            Route::get('new', 'CategoryController@create')->name('category.create');
            Route::post('new', 'CategoryController@store')->name('category.store');
    
            Route::get('{category}/edit', 'CategoryController@edit')->name('category.edit');
            Route::put('{category}', 'CategoryController@update')->name('category.update');
    
            Route::delete('{category}', 'CategoryController@destroy')->name('category.destroy');
        });
    });

});
