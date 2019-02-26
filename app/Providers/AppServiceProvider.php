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
            ['partials.categoryNav','partials.searchfrm','lists.categories','lists.categoryNav','ads.edit'],'App\Http\ViewComposer\CategoryComposer'
        );

        view()->composer(
            ['partials.searchfrm','lists.countries','ads.edit'],'App\Http\ViewComposer\CountryComposer'
        );

        view()->composer(
            ['lists.currencies', 'ads.edit'],'App\Http\ViewComposer\CurrencyComposer'
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

        $this->app->singleton('App\Http\ViewComposer\CountryComposer');

        $this->app->singleton('App\Http\ViewComposer\CurrencyComposer');
    }
}
