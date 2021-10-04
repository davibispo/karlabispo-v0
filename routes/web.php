<?php

use App\Http\Controllers\{
    RaizesController,
    SiteController,
    BlogController,
};
use Illuminate\Support\Facades\Route;

Route::resource('blog', BlogController::class);
Route::resource('site', SiteController::class);
Route::resource('raizes', RaizesController::class);
Route::get('/', function () {
    return view('welcome');
});
