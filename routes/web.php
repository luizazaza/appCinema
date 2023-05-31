<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filmeController;
use App\Http\Controllers\funcionarioController;
use App\Http\Controllers\cadastroSala;
use App\Http\Controllers\poltronaController;



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

Route::get('/',[filmeController::class,'homeFilme'])->name('home');

//Route::get('/pg-filme/{registrosFilme}',[filmeController::class,'pgFilme'])->name('pg-filme');
Route::get('/pg-filme/{id}', [filmeController::class,'pgFilme'])->name('pg-filme');




Route::get('/cadastro-Filme',[filmeController::class,'buscaCadastroFilme'])->name('busca-cadastro-filme');

Route::post('/cadastro-Filme',[filmeController::class,'cadastrarFilme'])->name('cadastro-filme');

Route::get('/cadastro-Sala',[cadastroSala::class,'buscaCadastroSala']);


Route::get('/cadastro-funcionario',[funcionarioController::class,'buscaCadastroFuncionario'])->name('busca-cadastro-funcionario');
Route::post('/cadastro-funcionario',[funcionarioController::class,'cadastrarFuncionario'])->name('cadastro-funcionario');
Route::get('/gerenciar-funcionario',[funcionarioController::class,'MostrarGerenciadorFuncionario'])->name('gerenciar-funcionario');
Route::get('/alterar-funcionario/{registroFuncionario}',[funcionarioController::class,'MostrarRegistroFuncionario'])->name('mostrar-funcionario');
Route::put('/gerenciar-funcionario/{registrosFuncionarios}',[funcionarioController::class,'AlterarBancoFuncionario'])->name('alterar-banco-funcionario');
Route::delete('/gerenciar-funcionario/{registrosFuncionarios}',[funcionarioController::class, 'ApagarFuncionario'])->name('apagar-funcionario');

Route::get('/gerenciar-filme',[filmeController::class,'MostrarGerenciadorFilme'])->name('gerenciar-filme');
Route::delete('/gerenciar-filme/{registrosFilme}',[filmeController::class,'ApagarFilme'])->name('apagar-filme');
Route::get('/alterar-filme/{registrosFilme}',[filmeController::class,'MostrarRegistroFilme'])->name('mostrar-filme');
Route::put('/gerenciar-filme/{registrosFilme}',[filmeController::class,'AlterarBancoFilme'])->name('alterar-banco-filme');

Route::get('/cadastro-poltrona',[poltronaController::class,'buscarCadastroPoltrona'])->name('busca-cadastro-poltrona');
Route::post('/cadastro-poltrona',[poltronaController::class,'cadastrarPoltrona'])->name('cadastro-poltrona');
Route::get('/gerenciar-poltrona',[poltronaController::class,'MostrarGerenciadorPoltrona'])->name('gerenciar-poltrona');
Route::delete('/gerenciar-poltrona/{registrosPoltronas}',[poltronaController::class,'ApagarPoltrona'])->name('apagar-poltrona');
Route::put('/gerenciar-poltrona/{registrosPoltronas}',[poltronaController::class,'AlterarBancoPoltrona'])->name('alterar-banco-poltrona');
