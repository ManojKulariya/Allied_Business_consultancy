<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
    /**
     * Tab groups shown in the settings UI (order matters).
     */
    public const GROUPS = [
        'site' => ['label' => 'Company & Site', 'icon' => 'bi-buildings'],
        'contact' => ['label' => 'Contact Info', 'icon' => 'bi-telephone'],
        'contact_page' => ['label' => 'Contact Page', 'icon' => 'bi-envelope-paper'],
        'announcement' => ['label' => 'Announcement Bar', 'icon' => 'bi-megaphone'],
        'header' => ['label' => 'Header', 'icon' => 'bi-window'],
        'footer' => ['label' => 'Footer', 'icon' => 'bi-layout-text-window-reverse'],
        'theme' => ['label' => 'Theme', 'icon' => 'bi-palette'],
        'seo' => ['label' => 'SEO Defaults', 'icon' => 'bi-search'],
        'mail' => ['label' => 'SMTP / Mail', 'icon' => 'bi-envelope-gear'],
        'scripts' => ['label' => 'Analytics & Scripts', 'icon' => 'bi-code-slash'],
    ];

    /**
     * Settings form for one group (tabbed navigation).
     */
    public function edit(string $group = 'site'): View
    {
        abort_unless(array_key_exists($group, self::GROUPS), 404);

        return view('admin.settings.edit', [
            'groups' => self::GROUPS,
            'group' => $group,
            'settings' => Setting::query()
                ->where('group', $group)
                ->orderBy('sort_order')
                ->get(),
        ]);
    }

    /**
     * Persist all submitted values for the group.
     * Boolean switches submit '0'/'1' via hidden+checkbox pairing;
     * image fields carry media-library paths from the picker.
     */
    public function update(Request $request, string $group = 'site'): RedirectResponse
    {
        abort_unless(array_key_exists($group, self::GROUPS), 404);

        $settings = Setting::query()->where('group', $group)->get();

        $validated = $request->validate(
            $settings->mapWithKeys(fn (Setting $setting) => [
                "settings.{$setting->key}" => match ($setting->type) {
                    'boolean' => ['nullable', 'in:0,1'],
                    'color' => ['nullable', 'regex:/^#[0-9a-fA-F]{6}$/'],
                    default => ['nullable', 'string', 'max:65000'],
                },
            ])->all(),
            ['settings.*.regex' => 'Colors must be valid hex values, e.g. #0D6EFD.']
        );

        foreach ($settings as $setting) {
            if (array_key_exists($setting->key, $validated['settings'] ?? [])) {
                $setting->update(['value' => $validated['settings'][$setting->key]]);
            }
        }

        clear_settings_cache(); // observer clears per-save; final sweep for safety

        return back()->with('success', self::GROUPS[$group]['label'].' settings saved.');
    }
}
