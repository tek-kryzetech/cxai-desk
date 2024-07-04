<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            $this->mapApiRoutes();
            $this->mapWebRoutes();
            $this->mapUserRoutes();
            $this->mapAdminRoutes();
            if(isAddonInstalled('DESKSAAS') > 0){
                $this->mapSAASRoutes();
            }
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }

    protected function mapWebRoutes()
    {
        foreach ($this->centralDomains() as $domain) {
            Route::middleware(['installed', 'web'])
                ->domain($domain)
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        }
    }

    protected function mapSAASRoutes()
    {
        foreach ($this->centralDomains() as $domain) {
            Route::middleware(['installed', 'web'])
                ->domain($domain)
                ->namespace($this->namespace)
                ->group(base_path('routes/saas.php'));
        }
    }

    protected function mapApiRoutes()
    {
        foreach ($this->centralDomains() as $domain) {
            Route::prefix('api')
                ->domain($domain)
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));
        }
    }


    protected function mapUserRoutes()
    {
        foreach ($this->centralDomains() as $domain) {
            Route::middleware(['installed', 'web', 'auth', 'user', 'is_email_verify', 'version.update','2fa_verify', 'common'])
                ->domain($domain)
                ->namespace($this->namespace)
                ->prefix('user')
                ->as('user.')
                ->group(base_path('routes/user.php'));
        }
    }
    protected function mapAdminRoutes()
    {
        foreach ($this->centralDomains() as $domain) {
            Route::middleware(['installed', 'web', 'auth', 'admin', 'is_email_verify', 'version.update', 'addon.update'])
                ->domain($domain)
                ->namespace($this->namespace)
                ->prefix('admin')
                ->as('admin.')
                ->group(base_path('routes/admin.php'));
        }
    }





    protected function centralDomains(): array
    {
        return config('tenancy.central_domains');
    }


}