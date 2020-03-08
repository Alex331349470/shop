<?php

namespace App\Providers;

use App\Models\UserAddress;
use App\Observers\UserAddressObserver;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Schema;
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
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
		\App\Models\User::observe(\App\Observers\UserObserver::class);
        UserAddress::observe(UserAddressObserver::class);
        Resource::withoutWrapping();
        Schema::defaultStringLength(191);
    }
}
