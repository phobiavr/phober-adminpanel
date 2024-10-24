<?php

namespace App\Providers;

use App\Models\Config;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\Game;
use App\Models\Session;
use App\Models\SnackSale;
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

        \Spatie\NovaTranslatable\Translatable::defaultLocales(['en', 'ru', 'az']);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        Relation::morphMap([
            'auth-user' => User::class,
            'device-game' => Game::class,
            'crm-customer' => Customer::class,
            'crm-contact' => Contact::class,
            'staff-session' => Session::class,
            'staff-snack-sale' => SnackSale::class,
            'config' => Config::class
        ]);
    }
}
