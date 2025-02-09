<?php

namespace App\Nova;

use App\Nova\Actions\SyncConfigsButtonAction;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Outl1ne\NovaInlineTextField\InlineText;

class Config extends Resource {
    public static $model = \App\Models\Config::class;
    public static $search = ['key', 'value'];
    public static $group = "AdminPanel";
    public static $title = 'key';

    public static $perPageOptions = [100, 150, 250];
    
    public function authorizedToUpdate(Request $request)
    {
        return false;
    }

    public function fields(Request $request): array {
        return [
            Text::make('Key')->sortable(),

            InlineText::make('Value','value'),
        ];
    }

    public function actions(Request $request) {
        return [
            SyncConfigsButtonAction::make()->standalone()->withoutConfirmation()->onlyOnIndex(),
        ];
    }
}
