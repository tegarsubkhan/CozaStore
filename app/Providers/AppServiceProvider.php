<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('user_level', function($app){
            return [
                'name' => ['', 'Admin', 'Customer'],
                'color' => ['', 'green', 'yellow']
            ];
        });

        $this->app->singleton('order_status', function($app){
            return [
                'name' => ['', 'Belum Dibayar', 'Sudah Bayar', 'Dalam Pengiriman', 'Selesai'],
                'color' => ['', 'danger', 'warning', 'primary', 'success']
            ];
        });

        Blade::directive('datetime', function ($expression) {
            return "<?php echo date('d-m-Y H:i', strtotime($expression)); ?>";
        });
    }
}
