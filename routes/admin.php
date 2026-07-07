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
        'industries' => ['App\Http\Controllers\Admin\IndustryController', 'industries'],
        'process-steps' => ['App\Http\Controllers\Admin\ProcessStepController', 'process-steps'],
        'why-choose-items' => ['App\Http\Controllers\Admin\WhyChooseItemController', 'why-choose-items'],
        'counters' => ['App\Http\Controllers\Admin\CounterController', 'counters'],
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
            Route::post('bulk-status', [$controller, 'bulkSetStatus'])
                ->middleware("can:{$permission}.edit")->name('bulk-status');
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
    // Job applications, newsletters — read/manage only (created from frontend)
    foreach ([
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

    /* --------------------- Contacts (lead management) --------------------- */
    if (class_exists('App\Http\Controllers\Admin\ContactController')) {
        Route::prefix('contacts')->name('contacts.')->middleware('can:contacts.view')->group(function () {
            $controller = 'App\Http\Controllers\Admin\ContactController';

            Route::get('/', [$controller, 'index'])->name('index');
            Route::get('export/csv', [$controller, 'exportCsv'])->name('export-csv');
            Route::get('export/excel', [$controller, 'exportExcel'])->name('export-excel');
            Route::get('{id}', [$controller, 'show'])->whereNumber('id')->name('show');

            Route::middleware('can:contacts.edit')->group(function () use ($controller) {
                Route::patch('{id}/mark-read', [$controller, 'markRead'])->whereNumber('id')->name('mark-read');
                Route::patch('{id}/mark-unread', [$controller, 'markUnread'])->whereNumber('id')->name('mark-unread');
                Route::patch('{id}/reply-status', [$controller, 'updateReplyStatus'])->whereNumber('id')->name('reply-status');
            });

            Route::middleware('can:contacts.delete')->group(function () use ($controller) {
                Route::delete('{id}', [$controller, 'destroy'])->whereNumber('id')->name('destroy');
                Route::post('bulk-delete', [$controller, 'bulkDelete'])->name('bulk-delete');
                Route::post('{id}/restore', [$controller, 'restore'])->whereNumber('id')->name('restore');
                Route::delete('{id}/force-delete', [$controller, 'forceDelete'])->whereNumber('id')->name('force-delete');
            });
        });
    }

    /* --------------------------- Media Manager --------------------------- */
    Route::prefix('media')->name('media.')->middleware('can:media.view')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\MediaController::class, 'index'])->name('index');
        Route::post('/', [\App\Http\Controllers\Admin\MediaController::class, 'store'])
            ->middleware('can:media.create')->name('store');
        Route::post('bulk-delete', [\App\Http\Controllers\Admin\MediaController::class, 'bulkDelete'])
            ->middleware('can:media.delete')->name('bulk-delete');
        Route::put('{id}', [\App\Http\Controllers\Admin\MediaController::class, 'update'])
            ->middleware('can:media.edit')->whereNumber('id')->name('update');
        Route::delete('{id}', [\App\Http\Controllers\Admin\MediaController::class, 'destroy'])
            ->middleware('can:media.delete')->whereNumber('id')->name('destroy');
    });

    Route::prefix('media-folders')->name('media-folders.')->middleware('can:media.view')->group(function () {
        Route::post('/', [\App\Http\Controllers\Admin\MediaFolderController::class, 'store'])
            ->middleware('can:media.create')->name('store');
        Route::put('{folder}', [\App\Http\Controllers\Admin\MediaFolderController::class, 'update'])
            ->middleware('can:media.edit')->name('update');
        Route::delete('{folder}', [\App\Http\Controllers\Admin\MediaFolderController::class, 'destroy'])
            ->middleware('can:media.delete')->name('destroy');
    });

    /* -------------------------- Homepage Builder -------------------------- */
    Route::prefix('home-sections')->name('home-sections.')->middleware('can:home-sections.edit')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\HomeSectionController::class, 'index'])->name('index');
        Route::post('reorder', [\App\Http\Controllers\Admin\HomeSectionController::class, 'reorder'])->name('reorder');
        Route::patch('{id}/toggle-status', [\App\Http\Controllers\Admin\HomeSectionController::class, 'toggleStatus'])->name('toggle-status');
        Route::get('{homeSection}/edit', [\App\Http\Controllers\Admin\HomeSectionController::class, 'edit'])->name('edit');
        Route::put('{homeSection}', [\App\Http\Controllers\Admin\HomeSectionController::class, 'update'])->name('update');
    });

    /* --------------------------- Notifications --------------------------- */
    Route::prefix('notifications')->name('notifications.')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\NotificationController::class, 'index'])->name('index');
        Route::post('read-all', [\App\Http\Controllers\Admin\NotificationController::class, 'readAll'])->name('read-all');
        Route::post('{id}/read', [\App\Http\Controllers\Admin\NotificationController::class, 'read'])->name('read');
        Route::delete('{id}', [\App\Http\Controllers\Admin\NotificationController::class, 'destroy'])->name('destroy');
    });

    /* ----------------------------- Analytics ----------------------------- */
    if (class_exists('App\Http\Controllers\Admin\AnalyticsController')) {
        Route::prefix('analytics')->name('analytics.')->middleware('can:analytics.view')->group(function () {
            $controller = 'App\Http\Controllers\Admin\AnalyticsController';

            Route::get('/', [$controller, 'index'])->name('index');
            Route::get('chart-data', [$controller, 'chartData'])->name('chart-data');
            Route::get('realtime', [$controller, 'realtime'])->name('realtime');
            Route::get('behavior', [$controller, 'behavior'])->name('behavior');
        });
    }

    /* ----------------------------- Settings ----------------------------- */
    // Site / contact / header / footer / theme / seo / mail / scripts + SEO defaults
    Route::middleware('can:settings.edit')->group(function () {
        Route::get('seo-settings', [\App\Http\Controllers\Admin\SeoSettingController::class, 'index'])->name('seo-settings.index');
        Route::put('seo-settings/{id}', [\App\Http\Controllers\Admin\SeoSettingController::class, 'update'])->name('seo-settings.update');

        Route::get('settings/{group?}', [\App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('settings.edit');
        Route::put('settings/{group?}', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
    });

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
