<?php

namespace Modules\Recruitment\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Recruitment';

    /**
     * The module namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $moduleNamespace = 'Modules\Recruitment\Http\Controllers';

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapEmployeeRoutes();
        $this->mapOperatorRoutes();
    }

    /**
     * Define the "employee" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapEmployeeRoutes()
    {
        Route::middleware('web')
            ->namespace($this->moduleNamespace . '\Employee')
            ->prefix('Employee')
            ->group(module_path($this->moduleName, '/Routes/v1/employee.php'));
    }

     /**
     * Define the "operator" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapOperatorRoutes()
    {
        Route::middleware('web')
            ->namespace($this->moduleNamespace . '\Operator')
            ->prefix('Operator')
            ->group(module_path($this->moduleName, '/Routes/v1/operator.php'));
    }

  

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
            ->group(module_path($this->moduleName, '/Routes/api.php'));
    }
}
