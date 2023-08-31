<?php

namespace App\Helpers;

use App\Models\Setting;
use Brotzka\DotenvEditor\DotenvEditor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\URL;

class GlobalHelper
{
    /**
     * This function is used to generate fake emails
     * depends on type for example customer or driver etc
     *
     * @param string $type
     * @return string
     */
    public static function generateFakeEmail(string $type): string
    {
        return strtolower(fake()->firstName) . '_' . $type . '@' . config('app.domain');
    }

    public static function getSettingValue(string $key): string
    {
        $settings = self::getSettings();
        return $settings[$key] ?? '';
    }

    /**
     * Get the application settings from cache or database
     *
     * @return array
     */
    public static function getSettings(): array
    {
        return Cache::rememberForever('settings', function () {
            return Setting::pluck('value', 'key')->toArray();
        });
    }

    public static function wasPreviousRoute(string $routeName): bool
    {
        $previousRouteName = self::getPreviousRouteName();
        return $previousRouteName === $routeName;
    }

    public static function getPreviousRouteName(): string
    {
        return app('router')
            ->getRoutes()
            ->match(Request::create(URL::previous()))->getName();
    }

    public static function getToEmail(string $email): string
    {
        if (env('APP_ENV') === 'production') {
            return $email;
        } else {
            return config('mail.test_email_receiver');
        }
    }

    /**
     *
     * @param array $data
     * @return void
     * @throws DotEnvException
     */
    public static function setValuesInEnv(array $data): void
    {
        $env = new DotenvEditor();
        $env->addData($data);
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
