<?php

Auth::routes();

// Authentication routes...
Route::get('login-reg', 'Auth\AuthCustomController@getLogin');
Route::post('login-custom', 'Auth\AuthCustomController@postLogin');

// Registration routes...
// Route::get('register', 'Auth\AuthController@getRegister');
// Route::post('register-custom', 'Auth\AuthCustomController@postRegister');
// Route::get('confirm/{token}', 'Auth\AuthCustomController@confirm');

// User Profile
Route::group(['middleware' => 'auth', 'role:user'], function() {

    Route::get('profile', 'ProfileController@profile');
    Route::get('profile/edit', 'ProfileController@editProfile');
    Route::post('profile', 'ProfileController@updateProfile');
    Route::get('orders', 'ProfileController@orders');
});

// Joystick Administration
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {

    Route::get('/', 'Joystick\AdminController@index');

    Route::resource('categories', 'Joystick\CategoryController');
    Route::resource('countries', 'Joystick\CountryController');
    Route::resource('companies', 'Joystick\CompanyController');
    Route::resource('cities', 'Joystick\CityController');
    Route::resource('news', 'Joystick\NewsController');
    Route::resource('languages', 'Joystick\LanguageController');
    Route::resource('modes', 'Joystick\ModeController');
    Route::resource('options', 'Joystick\OptionController');
    Route::resource('orders', 'Joystick\OrderController');
    Route::resource('pages', 'Joystick\PageController');
    Route::resource('projects', 'Joystick\ProjectController');
    Route::resource('products', 'Joystick\ProductController');
    Route::resource('slide', 'Joystick\SlideController');
    Route::get('products/{id}/comments', 'Joystick\ProductController@comments');
    Route::get('products/{id}/destroy-comment', 'Joystick\ProductController@destroyComment');
    Route::get('products-search', 'Joystick\ProductController@search');
    Route::get('products-category/{id}', 'Joystick\ProductController@categoryProducts');
    Route::get('products-actions', 'Joystick\ProductController@actionProducts');
    Route::get('edit-page/{id}', 'Joystick\ProductController@editPage');
    Route::get('save-html/{id}', 'Joystick\ProductController@saveHtml');

    Route::resource('roles', 'Joystick\RoleController');
    Route::resource('users', 'Joystick\UserController');
    Route::resource('permissions', 'Joystick\PermissionController');

    Route::get('apps', 'Joystick\AppController@index');
    Route::get('apps/{id}', 'Joystick\AppController@show');
    Route::delete('apps/{id}', 'Joystick\AppController@destroy');
});

// Route::get('save-html/{id}', function(\Request $request, $id) {

//     $product = \App\Product::find($id);
//     $product->description = $_GET['html'];
//     $product->save();

//     return response()->json($id);
// });

// Input
Route::get('search', 'InputController@search');
Route::get('search-ajax', 'InputController@searchAjax');
Route::get('search-ajax-admin', 'InputController@searchAjaxAdmin');
Route::post('filter-products', 'InputController@filterProducts');
Route::post('send-app', 'InputController@sendApp');


// Shop
Route::get('shop', 'ShopController@index');

Route::get('brand/{company}', 'ShopController@brandProducts');
Route::get('brand/{company}/{category}/{id}', 'ShopController@brandCategoryProducts');

Route::get('c/{category}/{id}', 'ShopController@categoryProducts');
Route::get('c/{category}/{subcategory}/{id}', 'ShopController@subCategoryProducts');
Route::get('c/{category}/{subcategory}/{subsubcategory}/{id}', 'ShopController@subSubCategoryProducts');

Route::get('p/{id}-{product}', 'ShopController@product');
Route::post('comment-product', 'ShopController@saveComment');


// Promo
Route::get('/promo', 'PromoController@index');
Route::get('/epimediumnaya-pasta', 'PromoController@epimedium');
Route::get('/protein', 'PromoController@collagen');
Route::get('/', 'PromoController@collagen');


// Cart Actions
Route::get('cart', 'CartController@cart');
Route::get('checkout', 'CartController@checkout');
Route::get('add-to-cart/{id}', 'CartController@addToCart');
Route::get('remove-from-cart/{id}', 'CartController@removeFromCart');
Route::get('clear-cart', 'CartController@clearCart');
Route::post('store-order', 'CartController@storeOrder');
Route::get('destroy-from-cart/{id}', 'CartController@destroy');


// Favourite Actions
Route::get('favorite', 'FavouriteController@getFavorite');
Route::get('toggle-favourite/{id}', 'FavouriteController@toggleFavourite');


// News
Route::get('news', 'NewsController@news');
Route::get('news-category/{page}', 'NewsController@newsCategory');
Route::get('news/{page}', 'NewsController@newsSingle');
Route::post('comment-news', 'NewsController@saveComment');


// Pages
Route::get('i/catalogs', 'PageController@catalogs');
Route::get('i/contacts', 'PageController@contacts');
Route::get('i/{page}', 'PageController@page');
