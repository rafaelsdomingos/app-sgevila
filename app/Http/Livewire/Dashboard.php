<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Aluno;

class Dashboard extends Component
{
    public $totalDeAlunos;
    public $alunosEscolaPublica;
    public $alunosEscolaPrivada;
    public $ser1;
    public $ser2;
    public $ser3;
    public $ser4;
    public $ser5;
    public $ser6;
    public $ser7;
    public $ser8;
    public $ser9;
    public $ser10;
    public $ser11;
    public $ser12;
    public $semRegional;

    public function mount(){
        $this->totalDeAlunos = Aluno::all()->count();
        $this->alunosEscolaPublica = Aluno::where('tipo_instituicao', '=', 'Pública')->count();
        $this->alunosEscolaPrivada = Aluno::where('tipo_instituicao', '=', 'Privada')->count();
        $this->ser1 = Aluno::where('regional', '=', 'I')->count();
        $this->ser2 = Aluno::where('regional', '=', 'II')->count();
        $this->ser3 = Aluno::where('regional', '=', 'III')->count();
        $this->ser4 = Aluno::where('regional', '=', 'IV')->count();
        $this->ser5 = Aluno::where('regional', '=', 'V')->count();
        $this->ser6 = Aluno::where('regional', '=', 'VI')->count();
        $this->ser7 = Aluno::where('regional', '=', 'VII')->count();
        $this->ser8 = Aluno::where('regional', '=', 'VIII')->count();
        $this->ser9 = Aluno::where('regional', '=', 'IX')->count();
        $this->ser10 = Aluno::where('regional', '=', 'X')->count();
        $this->ser11 = Aluno::where('regional', '=', 'XI')->count();
        $this->ser12 = Aluno::where('regional', '=', 'XII')->count();
        $this->semRegional = Aluno::where('regional', '=', 'SN')->count();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
