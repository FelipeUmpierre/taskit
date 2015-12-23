<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Blade directive to dump a variable/object inside a template.
         * This is similar to dd(), except that it doesn't interrupt the
         * execution of the app. It does NOT support multiple arguments
         * however, you have to use one directive per variable.
         *
         * @example @dump($posts->comments)
         */
        Blade::directive('dump', function($param) {
            return '<?php (new \Illuminate\Support\Debug\Dumper)->dump{$param}; ?>';
        });
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
