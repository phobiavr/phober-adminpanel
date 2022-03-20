<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;

class LoyaltyCard extends Resource {
  public static $model = \App\Models\LoyaltyCard::class;
  public static $title = 'code';
  public static $search = ['id', 'code'];
  public static $group = "CRM";

  public function fields(Request $request): array {
    return [
      Text::make('Code')->sortable(),

      Select::make('Customer', 'id')
        ->options($this->customerSelectBoxOptions())
        ->rules('required')
        ->hideWhenCreating(function () use ($request) {
          return ($request->viaResource === 'customers');
        })
        ->hideWhenUpdating()
        ->hideFromIndex()
        ->hideFromDetail(),

      BelongsTo::make('Customer')->hideWhenUpdating()->hideWhenCreating(),
    ];
  }

  public function customerSelectBoxOptions() {
    return \App\Models\Customer::query()->select('first_name', 'last_name', 'id')
      ->doesntHave('loyaltyCard')
      ->get()
      ->mapWithKeys(function ($item) {
        return [$item['id'] => $item['first_name'] . ' ' . $item['last_name']];
      });
  }
}
