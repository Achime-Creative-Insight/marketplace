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
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::post('/newsletter/signup', 'NewsletterController@signUp')->name('newsletter.signup');

// User Routes
Route::prefix('user')->group(function () {
    Route::get('{user}', 'UserController@show')->name('user.show');
});

// Product Routes
Route::prefix('product')->group(function () {
    Route::get('{product}', 'ProductController@show')->name('product.show');

    // Requires Auth
    Route::middleware(['auth'])->group(function () {
        Route::get('mine', 'ProductController@mine')->name('product.mine');

        Route::get('new', 'ProductController@create')->name('product.create');
        Route::post('new', 'ProductController@store')->name('product.store');

        Route::get('{product}/edit', 'ProductController@edit')->name('product.edit');
        Route::put('{product}', 'ProductController@update')->name('product.update');

        Route::delete('{product}', 'ProductController@destroy')->name('product.destroy');

        Route::prefix('{product}/review')->group(function () {
            Route::get('/', 'ProductReviewController@create')->name('product.review.create');
            Route::post('/', 'ProductReviewController@store')->name('product.review.store');
        });
    });

});
