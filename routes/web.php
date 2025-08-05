<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/db-reset', function () {
    Artisan::call('db:reset');
    return Response::make(Artisan::output());
});