<?php

namespace App\Providers;

use App\Nova\Config;
use App\Nova\Contact;
use App\Nova\Customer;
use App\Nova\Device;
use App\Nova\DeviceInstance;
use App\Nova\DeviceInstanceSchedule;
use App\Nova\Employee;
use App\Nova\Game;
use App\Nova\Genre;
use App\Nova\Hostname;
use App\Nova\Invoice;
use App\Nova\LoyaltyCard;
use App\Nova\Post;
use App\Nova\Reservation;
use App\Nova\Revision;
use App\Nova\Session;
use App\Nova\Snack;
use App\Nova\SnackSale;
use App\Nova\TariffPlan;
use App\Nova\User;
use Illuminate\Support\Facades\Gate;
use KirschbaumDevelopment\NovaComments\Nova\Comment;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::serving(
            function (): void {
                Nova::script('commentable', base_path() . '/vendor/kirschbaum-development/nova-comments/dist/js/tool.js');
                Nova::style('commentable', base_path() . '/vendor/kirschbaum-development/nova-comments/dist/css/tool.css');
            }
        );

        Nova::breadcrumbsEnabled();

        Nova::mainMenu(function () {
            return [
                MenuSection::make('Admin', [
                    MenuItem::resource(Comment::class),
                    MenuItem::resource(Config::class),
                    MenuItem::resource(Hostname::class),
                    MenuItem::resource(Revision::class),
                ])->icon('star')->collapsable(),
                MenuSection::make('Auth', [
                    MenuItem::resource(User::class),
                ])->icon('key')->collapsable(),
                MenuSection::make('CRM', [
                    MenuItem::resource(Contact::class),
                    MenuItem::resource(Customer::class),
                    MenuItem::resource(LoyaltyCard::class),
                ])->icon('user-group')->collapsable(),
                MenuSection::make('Hardware', [
                    MenuItem::resource(Device::class),
                    MenuItem::resource(Game::class),
                    MenuItem::resource(Genre::class),
                    MenuItem::resource(DeviceInstance::class),
                    MenuItem::resource(DeviceInstanceSchedule::class),
                    //MenuItem::resource(TariffPlan::class),
                    MenuItem::resource(Post::class),
                ])->icon('chip')->collapsable(),
                MenuSection::make('Staff', [
                    MenuItem::resource(Employee::class),
                    MenuItem::resource(Invoice::class),
                    MenuItem::resource(Reservation::class),
                    MenuItem::resource(Session::class),
                    MenuItem::resource(Snack::class),
                    MenuItem::resource(SnackSale::class),
                ])->icon('identification')->collapsable(),
            ];
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes(default: true)
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
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
