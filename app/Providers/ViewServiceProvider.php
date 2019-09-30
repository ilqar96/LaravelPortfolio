<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        // Using Closure based composers...
        View::composer('backend/partials/category/*', function ($view) {
            $view->with('categories',Category::orderBy('name')->get());
        });

        View::composer('backend/partials/user/*', function ($view) {
            $view->with('users',User::orderBy('name')->get());
        });

        View::composer('backend/partials/tag/*', function ($view) {
            $view->with('tags',Tag::orderBy('name')->get());
        });
    }
}
