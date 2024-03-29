<?php

namespace App\Providers;

use App\Models\SiteSetting;
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
     */
    public function boot(): void
    {
        $sitesetting_details            =   SiteSetting::first();
        
        view()->composer('*', function ($view) 
        { 
            $permissions                    =   get_permissions();
            $view->with(['permissions' => $permissions]);
        });

        view()->share('sitesetting_details', $sitesetting_details);
    }
}
