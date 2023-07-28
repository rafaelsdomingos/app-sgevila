<?php

namespace App\Http\Livewire\Coordenacoes;

use Livewire\Component;
use App\Models\Coordenacao;

class CoordenacoesCreate extends Component
{

    public $nome;
    public $sigla;
    public $coordenador;
    public $fone;
    public $email;

    protected $rules = [
        'nome' => 'required|min:5|max:120',
        'sigla' => 'required|min:3|max:5',
        'coordenador' => 'required|string',
        'fone' => 'required|numeric',
        'email' => 'required|email',
    ];

    public function create()
    {
        $this->validate();

        Coordenacao::create([
            'nome' => $this->nome,
            'sigla' => $this->sigla,
            'coordenador' => $this->coordenador,
            'fone' => $this->fone,
            'email' => $this->email,
        ]);
    }

    public function render()
    {
        return view('livewire.coordenacoes.coordenacoes-create');
    }
}
