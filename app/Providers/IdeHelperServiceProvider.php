<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider as IdeHelper;

/**
 * Class IdeHelperServiceProvider.
 *
 * @package App\Providers
 */
class IdeHelperServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        parent::register();

        if ($this->app->environment() !== 'production') {
            $this->app->register(IdeHelper::class);
        }
    }
}
