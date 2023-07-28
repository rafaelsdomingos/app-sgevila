<?php

namespace App\Http\Livewire\Coordenacoes;

use Livewire\Component;
use App\Models\Coordenacao;
use Livewire\WithPagination;

class CoordenacoesIndex extends Component
{
    use withPagination;

    public $busca;

    public function render()
    {
        $coordenacoes = Coordenacao::where('nome', 'LIKE', $this->busca.'%')->orderBy('nome')->paginate(10);
        return view('livewire.coordenacoes.coordenacoes-index', compact('coordenacoes'));
    }
}
