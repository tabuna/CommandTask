<?php

namespace App\Providers;

use App\Models\Organization;
use App\Observer\OrganizationObserver;
use App\Observer\UserObserver;
use Illuminate\Support\ServiceProvider;
use App\Models\User;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        Organization::observe(OrganizationObserver::class);
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
