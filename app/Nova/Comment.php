<?php

namespace App\Nova;

use Illuminate\Http\Request;
use KirschbaumDevelopment\NovaComments\Nova\Comment as NovaComment;

class Comment extends NovaComment {
  public static function availableForNavigation(Request $request) {
    return false;
  }
}
