<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\ERP\CRM;

use Illuminate\Support\Facades\Log;
use JustSteveKing\Laravel\ERPContracts\Module\InstallerContract;
use Symfony\Component\Process\ExecutableFinder;
use Symfony\Component\Process\Process;

class ModuleInstaller implements InstallerContract
{
    public function install(): void
    {
        $process = new Process([
            (new ExecutableFinder())->find(
                name: 'php',
                default: 'php',
            ),
            'artisan',
            'vendor:publish --provider="JustSteveKing\Laravel\ERP\CRM\CRMServiceProvider" --tag="laravel-erp-crm-migrations"',
        ]);

        $process->mustRun();

        Log::info(
            message: 'Installing module juststeveking/laravel-erp-crm',
        );
    }
}
