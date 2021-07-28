<?php

use App\Http\Controllers\{
    RaizesController,
};
use Illuminate\Support\Facades\Route;

Route::resource('raizes', RaizesController::class);
Route::get('/', function () {
    return view('welcome');
});
