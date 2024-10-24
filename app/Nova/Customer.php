<?php

namespace App\Nova;

use Datomatic\Nova\Fields\Enum\Enum;
use Datomatic\Nova\Fields\Enum\EnumFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Phobiavr\PhoberLaravelCommon\Enums\CustomerStatusEnum;
use Phobiavr\PhoberLaravelCommon\Enums\GenderEnum;

class Customer extends Resource {
    public static $model = \App\Models\Customer::class;
    public static $search = ['first_name', 'last_name'];
    public static $group = "CRM";

    public function title(): string {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function fields(Request $request): array {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Full name', 'first_name')
                ->displayUsing(fn($value) => $this->first_name . ' ' . $this->last_name)
                ->exceptOnForms()
                ->sortable(),

            Text::make('First name')
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Text::make('Last name')
                ->hideFromIndex()
                ->rules('max:255'),

            Enum::make('Gender', 'gender')->attach(GenderEnum::class)->sortable(),
            Enum::make('Status', 'status')->attach(CustomerStatusEnum::class)->sortable(),

            Date::make("Birthday")->sortable(),

            Textarea::make('Note')->hideFromIndex(),

            HasMany::make('Contacts', 'contacts'),

            HasOne::make('Loyalty Card', 'loyaltyCard'),

            MorphOne::make('Author'),

            HasMany::make('Invoices'),
        ];
    }

    public function filters(Request $request) {
        return [
            EnumFilter::make('status', CustomerStatusEnum::class),
            EnumFilter::make('gender', GenderEnum::class),
        ];
    }
}
