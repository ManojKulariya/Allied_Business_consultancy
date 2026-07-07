<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Module => actions permission matrix.
     */
    private const MODULES = [
        'pages' => ['view', 'create', 'edit', 'delete'],
        'blogs' => ['view', 'create', 'edit', 'delete'],
        'services' => ['view', 'create', 'edit', 'delete'],
        'testimonials' => ['view', 'create', 'edit', 'delete'],
        'teams' => ['view', 'create', 'edit', 'delete'],
        'clients' => ['view', 'create', 'edit', 'delete'],
        'partners' => ['view', 'create', 'edit', 'delete'],
        'galleries' => ['view', 'create', 'edit', 'delete'],
        'faqs' => ['view', 'create', 'edit', 'delete'],
        'careers' => ['view', 'create', 'edit', 'delete'],
        'sliders' => ['view', 'create', 'edit', 'delete'],
        'banners' => ['view', 'create', 'edit', 'delete'],
        'menus' => ['view', 'create', 'edit', 'delete'],
        'media' => ['view', 'create', 'edit', 'delete'],
        'home-sections' => ['edit'],
        'industries' => ['view', 'create', 'edit', 'delete'],
        'process-steps' => ['view', 'create', 'edit', 'delete'],
        'why-choose-items' => ['view', 'create', 'edit', 'delete'],
        'counters' => ['view', 'create', 'edit', 'delete'],
        'contacts' => ['view', 'edit', 'delete'],
        'newsletters' => ['view', 'delete'],
        'users' => ['view', 'create', 'edit', 'delete'],
        'settings' => ['edit'],
        'analytics' => ['view'],
        'activity-logs' => ['view'],
        'roles' => ['manage'],
    ];

    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        // Create all module permissions
        foreach (self::MODULES as $module => $actions) {
            foreach ($actions as $action) {
                Permission::findOrCreate("{$module}.{$action}");
            }
        }

        // Super Admin — bypasses checks via Gate::before, holds role only
        Role::findOrCreate('super-admin');

        // Admin — everything except role management
        $admin = Role::findOrCreate('admin');
        $admin->syncPermissions(
            Permission::query()->where('name', 'not like', 'roles.%')->get()
        );

        // Editor — content only, no delete, no users/settings
        $editor = Role::findOrCreate('editor');
        $editor->syncPermissions(
            Permission::query()
                ->where(fn ($q) => $q
                    ->where('name', 'like', '%.view')
                    ->orWhere('name', 'like', '%.create')
                    ->orWhere('name', 'like', '%.edit'))
                ->where('name', 'not like', 'users.%')
                ->where('name', 'not like', 'settings.%')
                ->where('name', 'not like', 'analytics.%')
                ->where('name', 'not like', 'roles.%')
                ->where('name', 'not like', 'activity-logs.%')
                ->get()
        );
    }
}
