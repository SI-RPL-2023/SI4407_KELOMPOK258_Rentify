<?php

namespace App\Providers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
{
    view()->composer('*', function ($view) {
        $count = DB::table('favorites')
            ->where('id_user', Auth::id())
            ->count();
        $view->with('count', $count);
    });
}
}
