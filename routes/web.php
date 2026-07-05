<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes  (name: frontend.)
|--------------------------------------------------------------------------
| Controllers land in the page-building phase. The route map below is
| final so menus, SEO settings and sitemaps can reference stable names.
*/

Route::name('frontend.')->group(function () {
    $frontend = 'App\Http\Controllers\Frontend';

    if (class_exists("{$frontend}\HomeController")) {
        Route::get('/', ["{$frontend}\HomeController", 'index'])->name('home');

        // Static-ish pages
        Route::get('about-us', ["{$frontend}\PageController", 'about'])->name('about');
        Route::get('contact-us', ["{$frontend}\ContactController", 'index'])->name('contact');
        Route::post('contact-us', ["{$frontend}\ContactController", 'store'])->name('contact.store');

        // Newsletter
        Route::post('newsletter/subscribe', ["{$frontend}\NewsletterController", 'subscribe'])->name('newsletter.subscribe');
        Route::get('newsletter/unsubscribe/{token}', ["{$frontend}\NewsletterController", 'unsubscribe'])->name('newsletter.unsubscribe');

        // Blog
        Route::get('blog', ["{$frontend}\BlogController", 'index'])->name('blogs.index');
        Route::get('blog/category/{blogCategory:slug}', ["{$frontend}\BlogController", 'category'])->name('blogs.category');
        Route::get('blog/{blog:slug}', ["{$frontend}\BlogController", 'show'])->name('blogs.show');

        // Services
        Route::get('services', ["{$frontend}\ServiceController", 'index'])->name('services.index');
        Route::get('services/{service:slug}', ["{$frontend}\ServiceController", 'show'])->name('services.show');

        // Team, gallery, testimonials, FAQs
        Route::get('our-team', ["{$frontend}\TeamController", 'index'])->name('teams.index');
        Route::get('gallery', ["{$frontend}\GalleryController", 'index'])->name('galleries.index');
        Route::get('testimonials', ["{$frontend}\TestimonialController", 'index'])->name('testimonials.index');
        Route::get('faqs', ["{$frontend}\FaqController", 'index'])->name('faqs.index');

        // Careers
        Route::get('careers', ["{$frontend}\CareerController", 'index'])->name('careers.index');
        Route::get('careers/{career:slug}', ["{$frontend}\CareerController", 'show'])->name('careers.show');
        Route::post('careers/{career:slug}/apply', ["{$frontend}\CareerController", 'apply'])->name('careers.apply');

        // Dynamic CMS pages — keep LAST (catch-all slug)
        Route::get('{page:slug}', ["{$frontend}\PageController", 'show'])->name('page');
    } else {
        // Placeholder until the frontend phase is built
        Route::get('/', fn () => view('welcome'))->name('home');
    }
});
