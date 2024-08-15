<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('card', function() {
    return view('card');
});

Route::get('card-with-tailwind', function() {
    return view('card-with-tailwind');
});

Route::get('flex-examples', function() {
    return view('flex-examples');
});

Route::get('sticky-footer', function() {
    return view('sticky-footer');
});

Route::get('pricing-selection-design', function() {
    return view('pricing-selection-design');
});

Route::get('call-to-action-banner', function() {
    return view('call-to-action-banner');
});
