<?php

namespace App\Http\Livewire\Alunos;

use Livewire\Component;
use App\Models\Aluno;
use Livewire\WithPagination;

class AlunosIndex extends Component
{
    use withPagination;

    public $busca;

    public function render()
    {
        $alunos = Aluno::where('nome', 'LIKE', $this->busca.'%')->orderBy('nome')->paginate(10);
        return view('livewire.alunos.alunos-index', compact('alunos'));
    }
}
