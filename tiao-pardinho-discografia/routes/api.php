<?php

/*Aplicando Rotas*/
use Illuminate\Support\Facades\Route;

/*Classes importadas*/
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;

Route::get('albuns', [AlbumController::class, 'index']);
Route::get('albuns/{id}', [AlbumController::class, 'show']);
Route::post('albuns', [AlbumController::class, 'store']);
Route::put('albuns/{id}', [AlbumController::class, 'update']);
Route::delete('albuns/{id}', [AlbumController::class, 'delete']);

Route::post('faixas', [FaixaController::class, 'store']);
Route::delete('faixas/{id}', [FaixaController::class, 'delete']);