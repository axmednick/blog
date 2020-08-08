<?php

namespace App\Providers;

use App\Http\ViewComposer\CategoriesComposer;
use App\Http\ViewComposer\LastFourPostsComposer;
use App\Http\ViewComposer\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer(['*'],MenuComposer::class);
        View::composer(['*'],CategoriesComposer::class);
        View::composer(['*'],LastFourPostsComposer::class);

    }
}
