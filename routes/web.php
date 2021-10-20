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
    CursosController,
    PostController,
};
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class);
Route::resource('cursos', CursosController::class);
Route::resource('videos', VideosController::class);
Route::resource('palestras', PalestrasController::class);
Route::resource('loja', LojaController::class);
Route::resource('links', LinksController::class);
Route::resource('contato', ContatoController::class);
Route::resource('clinica', ClinicaController::class);
Route::resource('blog', BlogController::class);
Route::resource('site', SiteController::class);
Route::resource('raizes', RaizesController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
