<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Setting;
use App\Models\SocialLink;
use App\Models\User;
use App\Observers\MenuCacheObserver;
use App\Observers\SettingObserver;
use App\Observers\SocialLinkObserver;
use App\Policies\UserPolicy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Bootstrap 5 pagination views
        Paginator::useBootstrapFive();

        // Catch missing $fillable/$guarded mistakes early in local dev
        Model::preventSilentlyDiscardingAttributes($this->app->isLocal());

        // Observers (cache invalidation)
        Setting::observe(SettingObserver::class);
        Menu::observe(MenuCacheObserver::class);
        MenuItem::observe(MenuCacheObserver::class);
        SocialLink::observe(SocialLinkObserver::class);

        // Policies
        Gate::policy(User::class, UserPolicy::class);

        // Super-admin bypasses all permission checks
        Gate::before(function (User $user, string $ability) {
            return $user->hasRole('super-admin') ? true : null;
        });
    }
}
