<?php

use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('form');  // pake Blade
});

Route::post('/submit', [FormController::class, 'submit']);

