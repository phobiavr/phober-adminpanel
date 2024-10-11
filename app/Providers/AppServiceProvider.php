<?php

namespace App\Providers;

use App\Models\Config;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
        Nova::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        Relation::morphMap([
            'auth-user' => User::class,
            'crm-customer' => Customer::class,
            'crm-contact' => Contact::class,
            'config' => Config::class
        ]);
    }
}
