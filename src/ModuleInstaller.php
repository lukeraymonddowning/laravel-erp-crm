<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\ERP\CRM;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use JustSteveKing\Laravel\ERPContracts\Module\InstallerContract;
use Throwable;

class ModuleInstaller implements InstallerContract
{
    public function install(): void
    {
        try {
            Artisan::call(
                command: 'vendor:publish',
                parameters: [
                             'provider' => 'JustSteveKing\Laravel\ERP\CRM\CRMServiceProvider',
                             'tag' => 'laravel-erp-crm-migrations',
                         ],
            );
        } catch (Throwable $exception) {
            throw $exception;
        }

        try {
            Artisan::call(
                command: 'vendor:publish',
                parameters: [
                             'provider' => 'JustSteveKing\Laravel\ERP\CRM\CRMServiceProvider',
                             'tag' => 'laravel-erp-crm-config',
                         ],
            );
        } catch (Throwable $exception) {
            throw $exception;
        }

        Log::info(
            message: 'Installing module juststeveking/laravel-erp-crm',
        );
    }
}
