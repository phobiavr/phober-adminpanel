<?php

namespace App\Nova;

use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class Employee extends Resource {
    public static $model = \App\Models\Employee::class;
    public static $search = ['first_name', 'last_name'];
    public static $group = "Staff";

    public function title(): string {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function fields(Request $request) {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Full name', 'full_name')
                ->exceptOnForms(),

            Text::make('First name')
                ->sortable()
                ->onlyOnForms()
                ->rules('required', 'max:255'),

            Text::make('Last name')
                ->sortable()
                ->onlyOnForms()
                ->rules('required', 'max:255'),

            Number::make('Serviced TOTAL', 'serviced_total')
                ->exceptOnForms()
                ->displayUsing(fn($value) => $value . ' times'),

            Number::make('Serviced time TOTAL', 'serviced_minutes_total')
                ->exceptOnForms()
                ->displayUsing(fn($value) => $value . ' mins'),


            Number::make('Serviced in a DAY', 'serviced_in_a_day')
                ->exceptOnForms()
                ->displayUsing(fn($value) => $value . ' times')
                ->onlyOnDetail(),

            Number::make('Serviced time in a DAY', 'serviced_minutes_in_a_day')
                ->exceptOnForms()
                ->displayUsing(fn($value) => $value . ' mins')
                ->onlyOnDetail(),


            Number::make('Serviced in a WEEK', 'serviced_in_a_week')
                ->exceptOnForms()
                ->displayUsing(fn($value) => $value . ' times')
                ->onlyOnDetail(),

            Number::make('Serviced time in a WEEK', 'serviced_minutes_in_a_week')
                ->exceptOnForms()
                ->displayUsing(fn($value) => $value . ' mins')
                ->onlyOnDetail(),


            Number::make('Serviced in a MONTH', 'serviced_in_a_month')
                ->exceptOnForms()
                ->displayUsing(fn($value) => $value . ' times')
                ->onlyOnDetail(),

            Number::make('Serviced time in a MONTH', 'serviced_minutes_in_a_month')
                ->exceptOnForms()
                ->displayUsing(fn($value) => $value . ' mins')
                ->onlyOnDetail(),

            HasMany::make('Sessions'),

            new Commenter(),
            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
        ];
    }
}
