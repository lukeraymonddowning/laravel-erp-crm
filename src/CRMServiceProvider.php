<?php

namespace JustSteveKing\Laravel\ERP\CRM;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CRMServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-erp-crm')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations(
                'create_erp_crm_companies_table',
                'create_erp_crm_contacts_table',
                'create_erp_crm_links_table',
            );
    }

    public function boot(): void
    {
        parent::boot();

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
