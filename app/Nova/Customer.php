<?php

namespace App\Nova;

use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Text;

class Customer extends Resource {
  public static $model = \App\Models\Customer::class;
  public static $search = ['id'];
  public static $group = "CRM";

  public function title(): string {
    return $this->first_name . ' ' . $this->last_name;
  }

  public function fields(Request $request): array {
    return [
      ID::make(__('ID'), 'id')->sortable(),

      Text::make('First name')
        ->sortable()
        ->rules('required', 'max:255'),

      Text::make('Last name')
        ->sortable()
        ->rules('max:255'),

      Date::make("Birthday"),

      HasOne::make('LoyaltyCard', 'loyaltyCard'),

      HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),

      MorphOne::make('Author'),

      MorphMany::make('Revisions'),

      new Commenter(),
    ];
  }
}
