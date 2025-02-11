<?php

use Illuminate\Support\Facades\Route;
use Nova\Custom\Http\Controllers\NovaInlineTextFieldController;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::middleware(['nova'])->prefix('nova-vendor/nova-inline-text-field')->group(function () {
    Route::post('/update/{resource}', [NovaInlineTextFieldController::class, 'update']);
});
