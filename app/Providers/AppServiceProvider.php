<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Movie;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.sidebar', function ($view) {

        // Get the $data
        $latestFiveMovies = Movie::getLastFiveMoviesForSidebar();
        $view->with('movies', $latestFiveMovies);

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
