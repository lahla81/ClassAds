<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        view()->composer(
            ['partials.categoryNav','partials.searchfrm','lists.categories','lists.countries','lists.categoryNav'],'App\Http\ViewComposer\CategoryComposer'
        );

        view()->composer(
            ['partials.searchfrm','ads.create'],'App\Http\ViewComposer\CountryComposer'
        );

        view()->composer(
            ['ads.create'],'App\Http\ViewComposer\CurrencyComposer'
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Http\ViewComposer\CategoryComposer');
    }
}
