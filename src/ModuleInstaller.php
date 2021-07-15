<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\ERP\CRM;

use Illuminate\Support\Facades\Log;
use JustSteveKing\Laravel\ERPContracts\Module\InstallerContract;

class ModuleInstaller implements InstallerContract
{
    public function install(): void
    {
        Log::info(
            message: 'Installing module juststeveking/laravel-erp-crm',
        );
    }
}
