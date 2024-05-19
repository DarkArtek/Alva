<?php

namespace Modules\Alva\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

/**
 *  Routes registering
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * root namespace to assume when generating urls to actions.
     *
     * @var string
     */
    protected $namespace = 'Modules\Alva\Http\Controllers';

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     *
     * @param Router $router
     * @return void
     */
    public function before(Router $router)
    {
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        $this->registerWebRoutes();
        $this->registerAdminRoutes();
        $this->registerApiRoutes();
    }

    protected function registerWebRoutes(): void
    {
        $config = [
            'as'         => 'alva.',
            'prefix'     => 'alva',
            'namespace'  => $this->namespace . '\Frontend',
            'middleware' => ['web']
        ];

        Route::group($config, function () {
            $this->loadRoutesFrom(__DIR__ . '/../Http/Routes/web.php');
        });
    }

    protected function registerAdminRoutes(): void
    {
        $config = [
            'as'         => 'admin.alva.',
            'prefix'     => 'admin/alva',
            'namespace'  => $this->namespace . '\Admin',
            'middleware' => ['web', 'role:admin'],
        ];

        Route::group($config, function () {
            $this->loadRoutesFrom(__DIR__ . '/../Http/Routes/web.php');
        });
    }

    /**
     * Register API Routes. Remove if it's not necessary.
     */
    protected function registerApiRoutes(): void
    {
        $config = [
            'as'         => 'api.alva.',
            'prefix'     => 'api/alva',
            'namespace'  => $this->namespace . '\Api',
            'middleware' => ['api'],
        ];

        Route::group($config, function () {
            $this->loadRoutesFrom(__DIR__ . '/../Http/Routes/api.php');
        });
    }
}
