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
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When you generate new controller classes using the Artisan command,
     * they are placed in this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers'; // Ini mungkin ada atau tidak, tergantung versi Laravel

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            // Ini akan memuat routes/api.php
            // Pastikan bagian ini ada dan tidak dikomentari
            Route::prefix('api')
                ->middleware('api') // Ini menerapkan middleware group 'api'
                ->namespace($this->namespace) // Opsional, tergantung versi Laravel
                ->group(base_path('routes/api.php'));

            // Ini akan memuat routes/web.php
            Route::middleware('web')
                ->namespace($this->namespace) // Opsional
                ->group(base_path('routes/web.php'));

            // Jika Anda memiliki metode mapApiRoutes() dan mapWebRoutes() terpisah,
            // pastikan mereka dipanggil di sini.
            // Contoh:
            // $this->mapWebRoutes();
            // $this->mapApiRoutes();
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
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }

    // Jika Anda ingin mendefinisikan metode mapApiRoutes() secara terpisah seperti pada contoh yang lebih lama:
    /*
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
    */
}