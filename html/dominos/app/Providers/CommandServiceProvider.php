<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\ImportOrders;

class CommandServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('dominos.importorders', function()
        {
            return new ImportOrders;
        });

        $this->commands(
            'dominos.importorders'
        );
    }
}
