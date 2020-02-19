<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\SaveToCsv;

class ExportDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Helpers\Contracts\ExportData', function(){
            return new SaveToCsv();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
