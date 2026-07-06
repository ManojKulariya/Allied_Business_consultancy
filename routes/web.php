<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes  (name: frontend.)
|--------------------------------------------------------------------------
| Each controller's routes register only once that controller exists,
| so safe_route() yields '#' for pages not yet built — no dead 500 links.
*/

Route::name('frontend.')->group(function () {
    $frontend = 'App\Http\Controllers\Frontend';

    // Home
    if (class_exists("{$frontend}\HomeController")) {
        Route::get('/', ["{$frontend}\HomeController", 'index'])->name('home');
    } else {
        Route::get('/', fn () => view('welcome'))->name('home');
    }

    // Newsletter
    if (class_exists("{$frontend}\NewsletterController")) {
        Route::post('newsletter/subscribe', ["{$frontend}\NewsletterController", 'subscribe'])->name('newsletter.subscribe');
        Route::get('newsletter/unsubscribe/{token}', ["{$frontend}\NewsletterController", 'unsubscribe'])->name('newsletter.unsubscribe');
    }

    // Contact
    if (class_exists("{$frontend}\ContactController")) {
        Route::get('contact-us', ["{$frontend}\ContactController", 'index'])->name('contact');
        Route::post('contact-us', ["{$frontend}\ContactController", 'store'])->name('contact.store');
    }

    // Blog
    if (class_exists("{$frontend}\BlogController")) {
        Route::get('blog', ["{$frontend}\BlogController", 'index'])->name('blogs.index');
        Route::get('blog/category/{blogCategory:slug}', ["{$frontend}\BlogController", 'category'])->name('blogs.category');
        Route::get('blog/{blog:slug}', ["{$frontend}\BlogController", 'show'])->name('blogs.show');
    }

    // Services (detail pages are a future phase — the mega menu already
    // targets these route names via safe_route() and will auto-connect)
    if (class_exists("{$frontend}\ServiceController")) {
        Route::get('services', ["{$frontend}\ServiceController", 'index'])->name('services.index');
        Route::get('services/category/{serviceCategory:slug}', ["{$frontend}\ServiceController", 'category'])->name('services.category');
        Route::get('services/{service:slug}', ["{$frontend}\ServiceController", 'show'])->name('services.show');
    }

    // Team, gallery, testimonials, FAQs
    if (class_exists("{$frontend}\TeamController")) {
        Route::get('our-team', ["{$frontend}\TeamController", 'index'])->name('teams.index');
    }
    if (class_exists("{$frontend}\GalleryController")) {
        Route::get('gallery', ["{$frontend}\GalleryController", 'index'])->name('galleries.index');
    }
    if (class_exists("{$frontend}\TestimonialController")) {
        Route::get('testimonials', ["{$frontend}\TestimonialController", 'index'])->name('testimonials.index');
    }
    if (class_exists("{$frontend}\FaqController")) {
        Route::get('faqs', ["{$frontend}\FaqController", 'index'])->name('faqs.index');
    }

    // Careers
    if (class_exists("{$frontend}\CareerController")) {
        Route::get('careers', ["{$frontend}\CareerController", 'index'])->name('careers.index');
        Route::get('careers/{career:slug}', ["{$frontend}\CareerController", 'show'])->name('careers.show');
        Route::post('careers/{career:slug}/apply', ["{$frontend}\CareerController", 'apply'])->name('careers.apply');
    }

    // Dynamic CMS pages — keep LAST (catch-all slug)
    if (class_exists("{$frontend}\PageController")) {
        Route::get('about-us', ["{$frontend}\PageController", 'about'])->name('about');
        Route::get('{page:slug}', ["{$frontend}\PageController", 'show'])->name('page');
    }
});
