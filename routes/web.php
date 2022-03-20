<?php

use App\Http\Controllers\{
    AdjetivoController,
    ObjetoController,
    LayoutController,
    AlimentoController,
    AnimalController,
    DesenhoController,
    FilmeController,
    GeralController,
    ProfissaoController,
    VerboController
};

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LayoutController::class, 'index']);
Route::get('/objetos', [ObjetoController::class, 'index']);
Route::get('/adjetivos', [AdjetivoController::class, 'index']);
Route::get('/alimentos', [AlimentoController::class, 'index']);
Route::get('/animais', [AnimalController::class, 'index']);
Route::get('/desenhos-animado', [DesenhoController::class, 'index']);
Route::get('/filmes', [FilmeController::class, 'index']);
Route::get('/gerais', [GeralController::class, 'index']);
Route::get('/profissoes', [ProfissaoController::class, 'index']);
Route::get('/verbos', [VerboController::class, 'index']);
