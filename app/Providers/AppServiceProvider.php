<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Blade::component('components.alert', 'alert');
        Blade::withoutDoubleEncoding();
        Blade::if('env',function($environment){
            return app()->environment($environment);
        });
        Blade::directive('datetime',function($expression){
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });
        // parent::boot();
        // Route::model('task',App\Task::class);
       View::share('name','Liew');
        // view()->share('name',':leiahs');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
