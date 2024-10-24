<?php

namespace App\Nova;

use App\Nova\Actions\SyncConfigsButtonAction;
use Guillaumeferron\PostContent\PostContent;
use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\Text;
use Marshmallow\LiveUpdate\TextLiveUpdate;

class Post extends Resource {
    public static $model = \App\Models\Post::class;
    public static $search = ['title', 'post'];
    public static $group = "Device";
    public static $title = 'title';

    public static $perPageOptions = [100, 150, 250];

    public function fields(Request $request): array {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Title'),

//            PostContent::make('Post')->hideFromIndex(),
        ];
    }
}
