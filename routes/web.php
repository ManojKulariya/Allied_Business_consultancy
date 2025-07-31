<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\BillingController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\FCMController;
use App\Http\Controllers\SocialLinkController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/send-fcm', [FCMController::class, 'sendNotification']);
Route::post('/save-fcm-token', [FCMController::class, 'storeToken']);

Route::prefix('admin')->name('admin.')->group(function () {


    Route::middleware('guest')->group(function () {
        Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [AdminAuthController::class, 'login'])->name('login.submit');
        Route::get('register', [AdminAuthController::class, 'showRegisterForm'])->name('register');
        Route::post('register', [AdminAuthController::class, 'register'])->name('register.submit');
    });

        Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');

        Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

        // Products
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::post('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
       
        Route::get('bills', [BillingController::class, 'index'])->name('bills.index');
        Route::get('bills/create', [BillingController::class, 'create'])->name('bills.create');
        Route::post('bills', [BillingController::class, 'store'])->name('bills.store');
        Route::get('bills/{id}', [BillingController::class, 'show'])->name('bills.show');
        Route::delete('bills/{id}', [BillingController::class, 'destroy'])->name('bills.destroy');
        Route::get('bills/{id}/print', [BillingController::class, 'print'])->name('bills.print');

        // Customers (index, show, destroy)
        Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
        Route::get('customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
        Route::post('customers', [CustomerController::class, 'store'])->name('customers.store');
        Route::post('admin/customers/update/{id}', [CustomerController::class, 'update'])->name('customers.update');  
        Route::delete('customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
       

        Route::resource('coupons', CouponController::class);
        Route::resource('orders', OrderController::class)->only(['index', 'show', 'update', 'destroy']);
    
        Route::get('reports', [ReportController::class, 'index'])->name('reports.index');

        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('sliders', [SettingController::class, 'sliders'])->name('sliders');
            Route::post('sliders/store', [SettingController::class, 'storeSlider'])->name('sliders.store');
            Route::post('sliders/update/{id}', [SettingController::class, 'updateSlider'])->name('sliders.update');
            Route::delete('/slider/{id}', [SettingController::class, 'deleteSlider'])->name('slider.delete');

            Route::get('blogs/', [SettingController::class, 'blogs'])->name('blog-index');
            Route::post('/store', [SettingController::class, 'store'])->name('blogs.store');
            Route::post('blogs/update/{id}', [SettingController::class, 'updateBlog'])->name('update');
            Route::delete('/blog/{id}', [SettingController::class, 'deleteBlog'])->name('blog.delete');
            Route::get('/social-links', [SocialLinkController::class, 'create'])->name('social-create');
            Route::post('/social-links', [SocialLinkController::class, 'store'])->name('social-store');
            Route::get('/address', [AddressController::class, 'index'])->name('address-index');
            Route::post('/address', [AddressController::class, 'store'])->name('address-store');

        });
    });
    
});
    Route::prefix('users')->name('users.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/password/reset', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('/password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');

        Route::middleware('auth.user')->group(function () {
    Route::get('my-account', [UsersController::class, 'myprofile'])->name('my-profile');
    Route::get('my-account/details', [UsersController::class, 'editAccount'])->name('account-details');
    Route::post('account/update', [UsersController::class, 'updateAccount'])->name('update.account');

    
        Route::get('/addresses', [AddressController::class, 'index'])->name('addresses');
    Route::post('addresses', [AddressController::class, 'store'])->name('addresses.store');
    Route::put('addresses/{id}', [AddressController::class, 'update'])->name('addresses.update');
    Route::delete('addresses/{id}', [AddressController::class, 'destroy'])->name('addresses.destroy');
    Route::post('addresses/{id}/set-default', [AddressController::class, 'setDefault'])->name('addresses.set-default');
});


    Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::get('about-us/', [UsersController::class, 'aboutus'])->name('about-us');
        Route::get('blogs/', [UsersController::class, 'blogindex'])->name('blogs');
        Route::get('contact-us/', [UsersController::class, 'contactus'])->name('contact-us');
        Route::get('shop/', [UsersController::class, 'shop'])->name('shop');
        Route::get('cart/', [UsersController::class, 'cart'])->name('cart');
        Route::get('checkout/', [UsersController::class, 'checkout'])->name('checkout');

});
    Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset'); // keep this name exactly
    Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');