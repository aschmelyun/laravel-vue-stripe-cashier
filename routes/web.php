<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::any('/{any}', function() {
    return view('app');
})->where('any', '.*');
