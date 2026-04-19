<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrushController;

Route::get('/', function () {
    return redirect()->route('crushes.index');
});

Route::resource('crushes', CrushController::class);
