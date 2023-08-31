<?php

namespace App\Services;

use App\Enums\SettingTypesEnum;
use App\Jobs\SetEnvValuesJob;
use App\Models\Setting;
use App\Models\SettingType;
use Exception;

class SettingService
{
    /**
     * @throws Exception
     */
    public function updateSettings(array $data, SettingType $settingType): void
    {
        try {
            foreach ($data as $key => $value) {
                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value],
                );
            }
            foreach ($settingType as $setting) {
                Setting::UpdateOrCreate(
                    ['setting_type_id' => $setting->id]
                );
            }


            $this->setupConfigs();
        } catch (Exception $ex) {
            throw new Exception('Error updating settings: ' . $ex->getMessage());
        }
    }


    public function setupConfigs(): void
    {
        $routesToConfig = [
            'admin.mail.index' => SettingTypesEnum::MAIL->value,
        ];

        foreach ($routesToConfig as $routeName => $envName) {
            SetEnvValuesJob::dispatch($envName);
        }
    }
}
