# A Laravel ERP Module providing CRM functionality

[![Latest Version on Packagist](https://img.shields.io/packagist/v/juststeveking/laravel-erp-crm.svg?style=flat-square)](https://packagist.org/packages/juststeveking/laravel-erp-crm)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/juststeveking/laravel-erp-crm/run-tests?label=tests)](https://github.com/juststeveking/laravel-erp-crm/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/juststeveking/laravel-erp-crm/Check%20&%20fix%20styling?label=code%20style)](https://github.com/juststeveking/laravel-erp-crm/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/juststeveking/laravel-erp-crm.svg?style=flat-square)](https://packagist.org/packages/juststeveking/laravel-erp-crm)

A Laravel ERP Module providing CRM functionality
## Installation

You can install the package via composer:

```bash
composer require juststeveking/laravel-erp-crm
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="JustSteveKing\Laravel\ERP\CRM\CRMServiceProvider" --tag="laravel-erp-crm-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="JustSteveKing\Laravel\ERP\CRM\CRMServiceProvider" --tag="laravel-erp-crm-config"
```

This is the contents of the published config file:

```php
return [
];
```


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Steve McDougall](https://github.com/JustSteveKing)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
