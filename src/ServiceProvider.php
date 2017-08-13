<?php

namespace Ashrafi\ThemeManager;

use Illuminate\Support\ServiceProvider as LaraServiceProvider;
use Ashrafi\ThemeManager\Commands\ThemeActive;
use Ashrafi\ThemeManager\Commands\ThemeCreate;
use Ashrafi\ThemeManager\Commands\ThemeDefault;
use Ashrafi\ThemeManager\Commands\ThemeImport;
use Ashrafi\ThemeManager\Commands\ThemeList;

class ServiceProvider extends LaraServiceProvider
{
    protected $commandList=[
        ThemeCreate::class,
        ThemeImport::class,
        ThemeActive::class,
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
        $this->loadViewsFrom(resource_path('views/Themes/'.config('theme.default')),'ThemeView');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
