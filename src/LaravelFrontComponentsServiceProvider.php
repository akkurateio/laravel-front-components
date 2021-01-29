<?php

namespace Akkurate\LaravelFrontComponents;

use Illuminate\Support\ServiceProvider;

/**
 * Config service provider
 *
 */
class LaravelFrontComponentsServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'front');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/front'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/../resources/sass' => resource_path('sass/vendor/front-components'),
        ], 'sass');

    }

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{

	}
}
