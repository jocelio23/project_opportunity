<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\InscritoController;
use App\Http\Controllers\LoginController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [VagaController::class, 'padrao'])->name('vaga.padrao');

Route::get('/lista', [VagaController::class, 'ReturnList'])->name('vaga.ReturnLists')->middleware('auth');

Route::get('/vaga', [VagaController::class, 'createList'])->name('vaga.createList')->middleware('auth');

Route::post('/inserir', [VagaController::class, 'insert'])->name('vaga.insert')->middleware('auth');

Route::get('/vaga/{id}', [VagaController::class, 'opportunity'])->name('vaga.show')->middleware('auth');

Route::get('/edita/{id}', [VagaController::class, 'edit'])->name('vaga.edit');

Route::put('/atualiza/{id}', [VagaController::class, 'update'])->name('vaga.change');

Route::delete('/deleta/{id}', [VagaController::class, 'del'])->name('vaga.destroy');

Route::get('/pause/{id}', [VagaController::class, 'pause'])->name('vaga.pause');

Route::get('/reactive/{id}', [VagaController::class, 'reactive'])->name('vaga.reactive');


/* Rotas para entidade CANDIDATO */

Route::get('/candidato/registro', [CandidatoController::class, 'registro'])->name('candidato.registro');

Route::get('/candidato/login', [CandidatoController::class, 'login'])->name('candidato.login');

Route::post('/candidato/acesso', [CandidatoController::class, 'logCandidato'])->name('candidato.log');

Route::get('/candidato/Lista', [CandidatoController::class, 'ReturnList'])->name('candidato.ReturnLists');

Route::get('/candidato', [CandidatoController::class, 'createList'])->name('candidato.createList');

Route::post('/candidato/inserir', [CandidatoController::class, 'insert'])->name('candidato.insert');

Route::get('/candidato/{id}', [CandidatoController::class, 'candidate'])->name('candidato.show');

Route::get('/candidato/edita/{id}', [CandidatoController::class, 'edit'])->name('candidato.edit');

Route::put('/candidato/atualiza/{id}', [CandidatoController::class, 'update'])->name('candidato.change');

Route::delete('/candidato/deleta/{id}', [CandidatoController::class, 'del'])->name('candidato.destroy');


/* Rotas para INSCRIÇÃO*/
Route::get('/listaVagas', [VagaController::class, 'ListVaga'])->name('vaga.Listagem');

Route::get('/login', [LoginController::class, 'log'])->name('login.show');

Route::post('/login/acesso', [LoginController::class, 'logar'])->name('login.send');

Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy')->middleware('auth');
