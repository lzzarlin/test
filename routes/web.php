<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/index', 'PagesController@root')->name('root');
// 后台路由
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'create', 'store', 'update', 'edit']]);
    // 更多受保护的路由...
    Route::resource('siteconfig', 'SiteConfigController', ['only' => ['edit', 'update']]);
    // 友情链接管理
    Route::resource('links', 'LinksController');
    // 栏目管理
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductsController');
    Route::resource('news', 'NewsController');
    Route::resource('anlis', 'AnlisController');
    Route::resource('banners', 'BannersController');
    // 图片上传路由
    Route::post('upload_image', 'ProductsController@uploadImage')->name('products.upload_image');
    Route::post('uploadimage', 'ProductsController@upload_Image')->name('products.uploadimage');
});
// 用户身份验证相关的路由
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// // 限制1小时内登录次数
Route::middleware('throttle:5,10')->group(function () {
    Route::post('login', 'Auth\LoginController@login');
});
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// // 用户注册相关路由
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// // 密码重置相关路由
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// // 再次确认密码（重要操作前提示）
// Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
// Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// // Email 认证相关路由
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


// 用户访问路由

Route::get('/', 'PagesController@index')->name('index');
// 产品路由

Route::get('/products', 'PagesController@product')->name('product.index');
// 产品栏目路由
Route::get('/products/{category:slug}', 'PagesController@productList')->name('product');
// 产品内容路由
Route::get('/product/{product:slug}', 'PagesController@productShow')->name('product.show');
// 新闻路由
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/news/{news:slug}', 'PagesController@newsShow')->name('news.show');
// 关于我们路由
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');

// // 列表页路由
// Route::get('/products/{category:slug}', 'PagesController@category')->name('category.product');