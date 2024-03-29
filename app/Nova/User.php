<?php

namespace App\Nova;

use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Commenter;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;

class User extends Resource {
  public static $model = \App\Models\User::class;
  public static $title = 'username';
  public static $search = ['first_name', 'last_name', 'username', 'email'];
  public static $group = "AdminPanel";


  public function fields(Request $request) {
    return [
      ID::make()->sortable(),

      Gravatar::make()->maxWidth(50),

      Text::make('Username')
        ->sortable()
        ->rules('required', 'max:255'),

      Text::make('First name')
        ->sortable()
        ->rules('required', 'max:255'),

      Text::make('Last name')
        ->sortable()
        ->rules('required', 'max:255'),

      Text::make('Email')
        ->sortable()
        ->rules('required', 'email', 'max:254')
        ->creationRules('unique:users,email')
        ->updateRules('unique:users,email,{{resourceId}}'),

      Password::make('Password')
        ->onlyOnForms()
        ->creationRules('required', 'string', 'min:8')
        ->updateRules('nullable', 'string', 'min:8'),

      MorphOne::make('Author'),

      MorphMany::make('Revisions'),

      new Commenter(),
      //new CommentsPanel(),

      HasMany::make('Comments', 'comments')->hideFromDetail()->hideFromIndex(),
    ];
  }

  /**
   * Get the cards available for the request.
   *
   * @param Request $request
   * @return array
   */
  public function cards(Request $request) {
    return [];
  }

  /**
   * Get the filters available for the resource.
   *
   * @param Request $request
   * @return array
   */
  public function filters(Request $request) {
    return [];
  }

  /**
   * Get the lenses available for the resource.
   *
   * @param Request $request
   * @return array
   */
  public function lenses(Request $request) {
    return [];
  }

  /**
   * Get the actions available for the resource.
   *
   * @param Request $request
   * @return array
   */
  public function actions(Request $request) {
    return [];
  }
}
