# Clean cache when something happens in the database

[![Latest Version on Packagist](https://img.shields.io/packagist/v/giacomomasseron/laravel-cache-when-db.svg?style=flat-square)](https://packagist.org/packages/giacomomasseron/laravel-cache-when-db)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/giacomomasseron/laravel-cache-when-db/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/giacomomasseron/laravel-cache-when-db/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/giacomomasseron/laravel-cache-when-db/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/giacomomasseron/laravel-cache-when-db/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/giacomomasseron/laravel-cache-when-db.svg?style=flat-square)](https://packagist.org/packages/giacomomasseron/laravel-cache-when-db)

Clean cache keys when you insert, update or delete some records of your database.

## Installation

You can install the package via composer:

```bash
composer require giacomomasseron/laravel-cache-when-db
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-cache-when-db"
```

This is the contents of the published config file:

```php
    /*
    |--------------------------------------------------------------------------
    | Cache keys
    |--------------------------------------------------------------------------
    |
    | Define Cache keys to clean when one of the tables of the array changes
    | [
    |      'cache_key' => [
    |          'database_table',
    |          'database_table',
    |      ],
    |
    */
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Giacomo Masseroni](https://github.com/giacomomasseron)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
