<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\ERP\CRM;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use JustSteveKing\Laravel\ERPContracts\Module\InstallerContract;

class ModuleInstaller implements InstallerContract
{
    public function install(): void
    {
        Artisan::call(
            command: "vendor:publish",
            parameters: [
                '--tag' => 'erp-crm-migrations',
                '--provider' => 'JustSteveKing\Laravel\ERP\CRM\CRMServiceProvider'
            ]
        );

        Artisan::call(
            command: "vendor:publish",
            parameters: [
                '--tag' => 'erp-crm-config',
                '--provider' => 'JustSteveKing\Laravel\ERP\CRM\CRMServiceProvider'
            ]
        );
        
        Log::info(
            message: 'Installing module juststeveking/laravel-erp-crm',
        );
    }
}
