<?php

use App\Helpers;
use App\Models\Setting;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class GlobalHelper
{
    /**
     * Get the application settings from cache or database
     *
     * @return array
     */
    public static function getSettings(): array
    {
        return Cache::rememberForever('settings', function () {
            return Setting::all();
        });
    }

    public static function getSettingValue(string $key): string
    {
        $settings = self::getSettings();
        return $settings[$key] ?? '';
    }

    public static function optimizeClear(): void
    {
        Artisan::call('optimize:clear');
    }

    public static function configCache(): void
    {
        Artisan::call('config:cache');
    }
}
