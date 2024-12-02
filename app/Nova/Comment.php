<?php

namespace App\Nova;

use Illuminate\Support\Str;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\MorphTo;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;

class Comment extends Resource {
    public static $group = "AdminPanel";
    public static $model = \App\Models\Comment::class;
    public static $globallySearchable = false;
    public static $title = 'id';

    public static $search = [
        'comment',
    ];

    /**
     * Get the fields displayed by the resource.
     */
    public function fields(NovaRequest $request): array {
        return [
            Textarea::make('comment')
                ->alwaysShow()
                ->hideFromIndex(),

            MorphTo::make('Commentable')->onlyOnIndex(),

            Text::make('comment')
                ->displayUsing(function ($comment) {
                    return Str::limit($comment, 150);
                })
                ->onlyOnIndex(),

            BelongsTo::make('Commenter', 'commenter', \App\Nova\User::class)
                ->exceptOnForms(),

            DateTime::make('Created', 'created_at')
                ->exceptOnForms()
                ->sortable(),
        ];
    }
}
