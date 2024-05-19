<?php

namespace Modules\Alva\Providers;

use App\Contracts\Modules\ServiceProvider;

/**
 * @package $NAMESPACE$
 */

class AppServiceProvider extends ServiceProvider
{
    private $moduleSvc;

    protected $defer = false;

    /**
     * Boot Application Events
     */
    public function boot(): void
    {
        $this->moduleSvc = app('App\Services\ModuleService');
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerLinks();

        // Uncomment this ONLY if we have migrations
        // $this->loadMigrationsFrom(__DIR__ . '/../$MIGRATIONS_PATH$');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
    }

    /**
     * Module Links
     */
    public function registerLinks(): void
    {
        // If logged in
        // $this->moduleSvc->addFrontEndLink('Alva', '/alva', '', $logged_in=true);

        // If Admin
        $this->moduleSvc->addAdminLink('Alva', '/admin/alva');
    }

    /**
     * Register config
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__ . '/../Config/config.php' => config_path('alva.php')
        ], 'alva');

        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'alva');
    }

    /**
     * Register views.
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/alva');
        $sourcePath = __DIR__ . '/../Resources/views';

        $this->publishes([$sourcePath => $viewPath], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/alva';
        }, \Config::get('view.paths')), [$sourcePath]), 'alva');
    }

    /**
     * Register translations
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/alva');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'alva');
        } else {
            $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'alva');
        }
    }
}
