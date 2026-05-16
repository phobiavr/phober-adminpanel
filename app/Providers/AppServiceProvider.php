<?php

namespace App\Providers;

use App\Models\Config;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\Device;
use App\Models\DeviceInstance;
use App\Models\DeviceInstanceSchedule;
use App\Models\Employee;
use App\Models\Game;
use App\Models\Genre;
use App\Models\Invoice;
use App\Models\LoyaltyCard;
use App\Models\Reservation;
use App\Models\Session;
use App\Models\Snack;
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
            'device-model' => Device::class,
            'device-instance' => DeviceInstance::class,
            'device-genre' => Genre::class,
            'device-schedule' => DeviceInstanceSchedule ::class,
            'crm-customer' => Customer::class,
            'crm-contact' => Contact::class,
            'crm-loyalty-card' => LoyaltyCard::class,
            'staff-employee' => Employee::class,
            'staff-session' => Session::class,
            'staff-invoice' => Invoice::class,
            'staff-snack' => Snack::class,
            'staff-snack-sale' => SnackSale::class,
            'staff-reservation' => Reservation::class,
            'config' => Config::class
        ]);
    }
}
