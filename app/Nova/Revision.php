<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\MorphTo;
use Laravel\Nova\Fields\Text;

class Revision extends Resource {
  public static $model = \App\Models\Revision::class;
  public static $title = 'id';
  public static $search = ['id'];
  public static $group = "AdminPanel";

  public function fields(Request $request) {
    return [
      Text::make('Model', 'model')->exceptOnForms(),

      MorphTo::make('Revisionable')->exceptOnForms(),

      BelongsTo::make('Revised by', 'revisedBy', User::class),

      Text::make('Type')->exceptOnForms(),

      Code::make('value')->language('xml'),

      DateTime::make('Created at')->format('YYYY-MM-DD HH:mm:ss'),
    ];
  }
}
