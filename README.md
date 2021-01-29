# Laravel Front Components

Blade components to quickly build demo pages.

## Installation

You can install the package via composer:

``` bash
composer require akkurate/laravel-front-components
```

You need to publish some assets:
```
php artisan vendor:publish --provider="Akkurate\LaravelFrontComponents\LaravelFrontComponentsServiceProvider" --tag="public"
```

The package will automatically register itself.

You can publish the views with:
```bash
php artisan vendor:publish --provider="Akkurate\LaravelFrontComponents\LaravelFrontComponentsServiceProvider" --tag="views"
```
