<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schema;
>>>>>>> f749806 (3.0ValidatedData)

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
<<<<<<< HEAD
=======
        Schema::defaultStringLength(191);
>>>>>>> f749806 (3.0ValidatedData)
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        //
=======
>>>>>>> f749806 (3.0ValidatedData)
    }
}
