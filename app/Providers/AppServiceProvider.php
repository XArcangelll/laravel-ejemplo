<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

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
     * para urls mas amigables jijiji si quieres q sea por id borralo
     */
    public function boot(): void
    {
            Route::resourceVerbs([
                "create" => 'crear',
                "edit" => 'modificar'
            ]);
    }
}
