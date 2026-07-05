<?php

use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes  (prefix: /admin, name: admin.)
|--------------------------------------------------------------------------
*/

/* ---------------------------------- Guest ---------------------------------- */
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.attempt');

    Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
});

/* ------------------------------ Authenticated ------------------------------ */
Route::middleware(['auth', 'active'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Profile
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('profile/password', [ProfileController::class, 'changePassword'])->name('profile.password');

    /*
    |----------------------------------------------------------------------
    | CRUD Modules
    |----------------------------------------------------------------------
    | Each module = resource routes + trash actions + status toggle + bulk
    | delete, guarded by module permissions. Controllers arrive in the
    | page-building phase; the map below is the single source of truth.
    |
    | Registered via a loop to guarantee identical, permission-guarded
    | route sets for every module (no duplicate code).
    */
    $modules = [
        // route prefix        => [controller class,                                permission prefix]
        'pages' => ['App\Http\Controllers\Admin\PageController', 'pages'],
        'blog-categories' => ['App\Http\Controllers\Admin\BlogCategoryController', 'blogs'],
        'blogs' => ['App\Http\Controllers\Admin\BlogController', 'blogs'],
        'service-categories' => ['App\Http\Controllers\Admin\ServiceCategoryController', 'services'],
        'services' => ['App\Http\Controllers\Admin\ServiceController', 'services'],
        'testimonials' => ['App\Http\Controllers\Admin\TestimonialController', 'testimonials'],
        'teams' => ['App\Http\Controllers\Admin\TeamController', 'teams'],
        'clients' => ['App\Http\Controllers\Admin\ClientController', 'clients'],
        'partners' => ['App\Http\Controllers\Admin\PartnerController', 'partners'],
        'gallery-categories' => ['App\Http\Controllers\Admin\GalleryCategoryController', 'galleries'],
        'galleries' => ['App\Http\Controllers\Admin\GalleryController', 'galleries'],
        'faqs' => ['App\Http\Controllers\Admin\FaqController', 'faqs'],
        'careers' => ['App\Http\Controllers\Admin\CareerController', 'careers'],
        'sliders' => ['App\Http\Controllers\Admin\SliderController', 'sliders'],
        'banners' => ['App\Http\Controllers\Admin\BannerController', 'banners'],
        'menus' => ['App\Http\Controllers\Admin\MenuController', 'menus'],
        'social-links' => ['App\Http\Controllers\Admin\SocialLinkController', 'settings'],
        'users' => ['App\Http\Controllers\Admin\UserController', 'users'],
    ];

    foreach ($modules as $prefix => [$controller, $permission]) {
        if (! class_exists($controller)) {
            continue; // module controllers are added in the page-building phase
        }

        $name = str_replace('-', '_', $prefix);

        // Extra CRUD actions (trash, restore, toggle, bulk) — before resource routes
        Route::prefix($prefix)->name("{$prefix}.")->group(function () use ($controller, $permission) {
            Route::post('bulk-delete', [$controller, 'bulkDelete'])
                ->middleware("can:{$permission}.delete")->name('bulk-delete');
            Route::patch('{id}/toggle-status', [$controller, 'toggleStatus'])
                ->middleware("can:{$permission}.edit")->name('toggle-status');
            Route::post('{id}/restore', [$controller, 'restore'])
                ->middleware("can:{$permission}.delete")->whereNumber('id')->name('restore');
            Route::delete('{id}/force-delete', [$controller, 'forceDelete'])
                ->middleware("can:{$permission}.delete")->whereNumber('id')->name('force-delete');
        });

        Route::resource($prefix, $controller)
            ->except(['show'])
            ->middleware([
                'index' => "can:{$permission}.view",
                'create' => "can:{$permission}.create",
                'store' => "can:{$permission}.create",
                'edit' => "can:{$permission}.edit",
                'update' => "can:{$permission}.edit",
                'destroy' => "can:{$permission}.delete",
            ]);
    }

    /* ------------------------- Inbox-style modules ------------------------- */
    // Contacts, job applications, newsletters — read/manage only (created from frontend)
    foreach ([
        'contacts' => ['App\Http\Controllers\Admin\ContactController', 'contacts'],
        'job-applications' => ['App\Http\Controllers\Admin\JobApplicationController', 'careers'],
        'newsletters' => ['App\Http\Controllers\Admin\NewsletterController', 'newsletters'],
    ] as $prefix => [$controller, $permission]) {
        if (! class_exists($controller)) {
            continue;
        }

        Route::prefix($prefix)->name("{$prefix}.")->middleware("can:{$permission}.view")->group(function () use ($controller) {
            Route::get('/', [$controller, 'index'])->name('index');
            Route::get('{id}', [$controller, 'show'])->whereNumber('id')->name('show');
            Route::delete('{id}', [$controller, 'destroy'])->whereNumber('id')->name('destroy');
            Route::post('bulk-delete', [$controller, 'bulkDelete'])->name('bulk-delete');
        });
    }

    /* ----------------------------- Settings ----------------------------- */
    // Site / header / footer / contact / scripts settings + SEO defaults
    if (class_exists('App\Http\Controllers\Admin\SettingController')) {
        Route::middleware('can:settings.edit')->group(function () {
            Route::get('settings/{group?}', ['App\Http\Controllers\Admin\SettingController', 'edit'])->name('settings.edit');
            Route::put('settings/{group?}', ['App\Http\Controllers\Admin\SettingController', 'update'])->name('settings.update');

            Route::get('seo-settings', ['App\Http\Controllers\Admin\SeoSettingController', 'index'])->name('seo-settings.index');
            Route::put('seo-settings/{id}', ['App\Http\Controllers\Admin\SeoSettingController', 'update'])->name('seo-settings.update');
        });
    }

    /* --------------------------- Activity Logs --------------------------- */
    if (class_exists('App\Http\Controllers\Admin\ActivityLogController')) {
        Route::get('activity-logs', ['App\Http\Controllers\Admin\ActivityLogController', 'index'])
            ->middleware('can:activity-logs.view')->name('activity-logs.index');
    }

    /* ------------------------- Roles & Permissions ------------------------- */
    if (class_exists('App\Http\Controllers\Admin\RoleController')) {
        Route::resource('roles', 'App\Http\Controllers\Admin\RoleController')
            ->except(['show'])
            ->middleware('can:roles.manage');
    }
});
