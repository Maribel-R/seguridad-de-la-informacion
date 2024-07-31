<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $this->loadCustomRoutes();
    }

    /**
     * Load custom routes.
     *
     * @return void
     */
    protected function loadCustomRoutes()
    {
        Route::middleware('web')
            ->group(base_path('routes/legislacion/web.php'))
            ->group(base_path('routes/registro/web.php'))
            ->group(base_path('routes/procesos/web.php'))
            ->group(base_path('routes/etica/web.php'))
            ->group(base_path('routes/delitos/web.php'))
            ->group(base_path('routes/conclusiones/web.php'));
    }
}
