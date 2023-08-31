<?php

namespace App\Jobs;

use App\Enums\SettingTypesEnum;
use App\Helpers\EmailConfigHelper;
use App\Helpers\GlobalHelper;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SetEnvValuesJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    private string $type;

    /**
     * Create a new job instance.
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $configs = match ($this->type) {
            SettingTypesEnum::MAIL->value => [
                EmailConfigHelper::getDevelopmentEnvEmailConfigs(),
                EmailConfigHelper::getProductionEnvEmailConfigs(),
                EmailConfigHelper::getTestEmailReceiver(),
            ],
            default => [],
        };

        $this->setConfigsInEnv($configs);

        GlobalHelper::optimizeClear();
        GlobalHelper::configCache();
    }

    /**
     * @throws DotEnvException
     */
    private function setConfigsInEnv(array $configs): void
    {
        foreach ($configs as $config) {
            GlobalHelper::setValuesInEnv($config);
        }
    }
}
