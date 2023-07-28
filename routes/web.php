<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Alunos\AlunosIndex;
use App\Http\Livewire\Alunos\AlunosCreate;
use App\Http\Livewire\Coordenacoes\CoordenacoesIndex;
use App\Http\Livewire\Coordenacoes\CoordenacoesCreate;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/alunos', AlunosIndex::class)->name('alunos.index');
    Route::get('/alunos/create', AlunosCreate::class)->name('alunos.create');
    
    Route::get('/coordenacoes', CoordenacoesIndex::class)->name('coordenacoes.index');
    Route::get('/coordenacoes/create', CoordenacoesCreate::class)->name('coordenacoes.create');
});
