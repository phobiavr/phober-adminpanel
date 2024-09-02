<?php

namespace App\Nova;

use App\Nova\Actions\SyncConfigsButtonAction;
use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Text;
use Marshmallow\LiveUpdate\TextLiveUpdate;

class Config extends Resource {
    public static $model = \App\Models\Config::class;
    public static $search = ['key', 'value'];
    public static $group = "AdminPanel";
    public static $title = 'key';

    public static $perPageOptions = [100, 150, 250];

    public function fields(Request $request): array {
        return [
            Text::make('Key')->sortable(),

            TextLiveUpdate::make('Value')->sortable(),

            HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),

            MorphMany::make('Revisions'),

            new Commenter(),
        ];
    }

    public function actions(Request $request)
    {
        return [
            SyncConfigsButtonAction::make()->standalone()->withoutConfirmation(),
        ];
    }
}
