<?php

use App\Http\Controllers\{
    RaizesController,
    SiteController,
    BlogController,
    ClinicaController,
    ContatoController,
    LinksController,
    LojaController,
    PalestrasController,
    VideosController,
};
use Illuminate\Support\Facades\Route;

Route::resource('videos', VideosController::class);
Route::resource('palestras', PalestrasController::class);
Route::resource('loja', LojaController::class);
Route::resource('links', LinksController::class);
Route::resource('contato', ContatoController::class);
Route::resource('clinica', ClinicaController::class);
Route::resource('blog', BlogController::class);
Route::resource('site', SiteController::class);
Route::resource('raizes', RaizesController::class);
Route::get('/', function () {
    return view('welcome');
});
