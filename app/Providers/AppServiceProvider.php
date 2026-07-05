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

        // Observers (admin notifications)
        \App\Models\Contact::observe(\App\Observers\ContactObserver::class);
        \App\Models\JobApplication::observe(\App\Observers\JobApplicationObserver::class);

        // Policies
        Gate::policy(User::class, UserPolicy::class);

        // Super-admin bypasses all permission checks
        Gate::before(function (User $user, string $ability) {
            return $user->hasRole('super-admin') ? true : null;
        });

        $this->applyMailSettings();
    }

    /**
     * Override mail config from DB SMTP settings (Settings → SMTP / Mail).
     * Silently skipped when the DB isn't migrated yet (fresh install, CI).
     */
    private function applyMailSettings(): void
    {
        try {
            if (! \Illuminate\Support\Facades\Schema::hasTable('settings')) {
                return;
            }

            $mail = settings_group('mail');

            if (empty($mail['mail_host'])) {
                return;
            }

            config([
                'mail.default' => 'smtp',
                'mail.mailers.smtp.host' => $mail['mail_host'],
                'mail.mailers.smtp.port' => (int) ($mail['mail_port'] ?? 587),
                'mail.mailers.smtp.username' => $mail['mail_username'] ?? null,
                'mail.mailers.smtp.password' => $mail['mail_password'] ?? null,
                'mail.mailers.smtp.scheme' => ($mail['mail_encryption'] ?? null) === 'ssl' ? 'smtps' : null,
                'mail.from.address' => $mail['mail_from_address'] ?? config('mail.from.address'),
                'mail.from.name' => $mail['mail_from_name'] ?? setting('site_name', config('mail.from.name')),
            ]);
        } catch (\Throwable) {
            // DB unavailable (artisan before migrate, etc.) — keep .env mail config
        }
    }
}
