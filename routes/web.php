<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\InscritoController;
use App\Models\Candidato;
use App\Models\Inscricao;
use App\Models\Vaga;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Rotas para entidade VAGA */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lista', [VagaController::class, 'ReturnList'])->name('vaga.ReturnLists');

Route::get('/vaga', [VagaController::class, 'createList'])->name('vaga.createList');

Route::post('/inserir', [VagaController::class, 'insert'])->name('vaga.insert');

Route::get('/vaga/{id}', [VagaController::class, 'opportunity'])->name('vaga.show');

Route::get('/edita/{id}', [VagaController::class, 'edit'])->name('vaga.edit');


Route::put('/atualiza/{id}', [VagaController::class, 'update'])->name('vaga.change');


Route::delete('/deleta/{id}', [VagaController::class, 'del'])->name('vaga.destroy');


/* Rotas para entidade CANDIDATO */
Route::get('/candidato/Lista', [CandidatoController::class, 'ReturnList'])->name('candidato.ReturnLists');

Route::get('/candidato', [CandidatoController::class, 'createList'])->name('candidato.createList');

Route::post('/candidato/inserir', [CandidatoController::class, 'insert'])->name('candidato.insert');

Route::get('/candidato/{id}', [CandidatoController::class, 'candidate'])->name('candidato.show');

Route::get('/candidato/edita/{id}', [CandidatoController::class, 'edit'])->name('candidato.edit');

Route::put('/candidato/atualiza/{id}', [CandidatoController::class, 'update'])->name('candidato.change');

Route::delete('/candidato/deleta/{id}', [CandidatoController::class, 'del'])->name('candidato.destroy');


/* Rotas para INSCRIÇÃO*/
Route::get('/listaVagas', [VagaController::class, 'ListVaga'])->name('vaga.Listagem');