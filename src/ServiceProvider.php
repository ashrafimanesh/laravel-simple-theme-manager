<?php

namespace Ashrafi\ThemeManager;

use Illuminate\Support\ServiceProvider as LaraServiceProvider;
use Ashrafi\ThemeManager\Commands\ThemeCreate;
use Ashrafi\ThemeManager\Commands\ThemeDefault;
use Ashrafi\ThemeManager\Commands\ThemeImport;
use Ashrafi\ThemeManager\Commands\ThemeList;

class ServiceProvider extends LaraServiceProvider
{
    protected $commandList=[
        ThemeCreate::class,
        ThemeImport::class,
        ThemeList::class,
        ThemeDefault::class,
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands($this->commandList);
        $this->loadViewsFrom(resource_path('views/Themes/'. $this->getDefaultThemeName()),'ThemeView');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/config/theme.php'=>config_path('theme.php')
        ], 'config');
    }

    /**
     * @return string
     */
    protected function getDefaultThemeName()
    {
        return config('theme.default', 'default');
    }
}
