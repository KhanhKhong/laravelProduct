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

Route::get('/', [
    'as' => 'page.home',
    'uses' => 'PageController@home'
]);

Route::get('/home', [
    'as' => 'page.home',
    'uses' => 'PageController@home'
]);

Route::get('/products/{Category_id}', [
    'as' => 'page.products',
    'uses' => 'PageController@products'
]);

Route::get('/product-detail/{product_id}', [
    'as' => 'page.product_detail',
    'uses' => 'PageController@product_detail'
]);

Route::get('/contact', [
    'as' => 'page.contact',
    'uses' => 'PageController@contact'
]);

Route::get('/news', [
    'as' => 'page.news',
    'uses' => 'PageController@news'
]);

Route::get('/about', [
    'as' => 'page.about',
    'uses' => 'PageController@about'
]);

Route::get('/new-detail/{id}', [
    'as' => 'page.new_detail',
    'uses' => 'PageController@new_detail'
]);

Route::get('/cart', [
    'as' => 'page.cart',
    'uses' => 'CartController@cart'
]);

Route::get('/search', [
    'as' => 'page.search',
    'uses' => 'PageController@search'
]);

Route::get('/create-cart/{productId}', [
    'as' => 'cart.create',
    'uses' => 'CartController@cartCreate'
]);

Route::get('/edit-cart/{rowId}', [
    'as' => 'cart.edit',
    'uses' => 'CartController@cartEdit'
]);

Route::get('/renove-cart/{rowId}', [
    'as' => 'cart.remove',
    'uses' => 'CartController@cartRemove'
]);

Route::group(['middleware' => ['auth']], function(){
    Route::get('/new1', [
        'as' => 'admin',
        'uses' => 'AdminController@index'
    ]);
    Route::get('/create-cart/{productId}', [
    'as' => 'cart.create',
    'uses' => 'CartController@cartCreate'
    ]);

    Route::get('/edit-cart/{rowId}', [
        'as' => 'cart.edit',
        'uses' => 'CartController@cartEdit'
    ]);

    Route::get('/renove-cart/{rowId}', [
        'as' => 'cart.remove',
        'uses' => 'CartController@cartRemove'
    ]);
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function(){
    
    Route::get('/', [
        'as' => 'admin',
        'uses' => 'AdminController@index'
    ]);


    // Route Categories
    Route::get('/categories', [
        'as' => 'categories',
        'uses' => 'AdminController@categories'
    ]);

    Route::get('/edit-category', [
        'as' => 'create_category',
        'uses' => 'AdminController@editCategory'
    ]);

    Route::post('/update-category', [
        'as' => 'update_category',
        'uses' => 'AdminController@updateCategory'
    ]);

    Route::get('/delete-category', [
        'as' => 'delete_category',
        'uses' => 'AdminController@deleteCategory'
    ]);
    // End Route Categories


    // Route Product
    Route::get('/products', [
        'as' => 'products',
        'uses' => 'AdminController@products'
    ]);

    Route::get('/edit-product', [
        'as' => 'create_product',
        'uses' => 'AdminController@editProduct'
    ]);

    Route::post('/update-product', [
        'as' => 'update_product',
        'uses' => 'AdminController@updateProduct'
    ]);

    Route::get('/delete-product', [
        'as' => 'delete_product',
        'uses' => 'AdminController@deleteProduct'
    ]);
    // End Route Product

    //News
    Route::get('/news', [
        'as' => 'news',
        'uses' => 'AdminController@news'
    ]);

    Route::get('/edit-new', [
        'as' => 'create_new',
        'uses' => 'AdminController@editNew'
    ]);

    Route::post('/update-new', [
        'as' => 'update_new',
        'uses' => 'AdminController@updateNew'
    ]);

    Route::get('/delete-new', [
        'as' => 'delete_new',
        'uses' => 'AdminController@deleteNew'
    ]);

    //End news

    // Slide Home
    Route::get('/slides', [
        'as' => 'slides',
        'uses' => 'AdminController@slides'
    ]);

    Route::get('/edit-slide', [
        'as' => 'create_slide',
        'uses' => 'AdminController@editSlide'
    ]);

    Route::post('/update-slide', [
        'as' => 'update_slide',
        'uses' => 'AdminController@updateSlide'
    ]);

    Route::get('/delete-slide', [
        'as' => 'delete_slide',
        'uses' => 'AdminController@deleteSlide'
    ]);
    // End Slide Home

    //About
    Route::get('/about', [
        'as' => 'about',
        'uses' => 'AdminController@about'
    ]);

    Route::get('/edit-about', [
        'as' => 'create_about',
        'uses' => 'AdminController@editAbout'
    ]);

    Route::post('/update-about', [
        'as' => 'update_about',
        'uses' => 'AdminController@updateAbout'
    ]);

    Route::get('/delete-about', [
        'as' => 'delete_about',
        'uses' => 'AdminController@deleteAbout'
    ]);

    //End About

    //Contact
    Route::get('/contact', [
        'as' => 'contact',
        'uses' => 'AdminController@contact'
    ]);

    Route::get('/edit-contact', [
        'as' => 'create_contact',
        'uses' => 'AdminController@editContact'
    ]);

    Route::post('/update-contact', [
        'as' => 'update_contact',
        'uses' => 'AdminController@updateContact'
    ]);

    Route::get('/delete-contact', [
        'as' => 'delete_contact',
        'uses' => 'AdminController@deleteContact'
    ]);

    //End Contact
});