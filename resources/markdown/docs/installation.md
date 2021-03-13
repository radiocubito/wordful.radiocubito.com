# Installation

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

You may use Composer to install Contentful into your new or existent Laravel project:

```bash
composer require radiocubito/laravel-contentful
```

### Publish the migrations and run the migration

```bash
php artisan vendor:publish --provider="Radiocubito\Contentful\ContentfulServiceProvider" --tag="contentful-migrations"
php artisan migrate
```

### Publish the assets

```bash
php artisan vendor:publish --provider="Radiocubito\Contentful\ContentfulServiceProvider" --tag="contentful-assets"
```

### Dashboard Authorization

Contentful exposes a dashboard at /contentful. By default, you will only be able to access this dashboard in the local environment. To use it in another environment, you need to register a gate check.

You can determine which users of your application are allowed to view the Contentful dashboard by defining a gate check called `viewContentful`.

A common place to register this check is in a service provider:

```php
// in a service provider

public function boot()
{
   Gate::define('viewContentful', function ($user) {
       return in_array($user->email, [
            'oliver@radiocubito.com',
        ]);
   });
}
```

## Visit the Dashboard

After performing all these steps, you should be able to visit the Contentful Dashboard at `/contentful`.
