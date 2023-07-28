<?php

namespace App\Http\Livewire\Alunos;

use Livewire\Component;
use App\Models\Aluno;

class AlunosCreate extends Component
{

    //Declaração das variáveis
    public $nome;
    public $nacionalidade;
    public $naturalidade;
    public $sexo;
    public $nascimento;
    public $genero;
    public $raca;
    public $endereco;
    public $bairro;
    public $cidade;
    public $uf;
    public $cep;
    public $regional;
    public $fone1;
    public $fone2;
    public $email;
    public $deficiencia;
    public $tipo_deficiencia;
    public $alergia;
    public $tipo_alergia;
    public $escolaridade;
    public $serie;
    public $turno;
    public $instituicao;
    public $tipo_instituicao;
    public $rg;
    public $emissor;
    public $uf_emissor;
    public $cpf;
    public $mae;
    public $rgmae;
    public $emissor_rg_mae;
    public $uf_rg_mae;
    public $pai;
    public $rgpai;
    public $emissor_rg_pai;
    public $uf_rg_pai;
    public $nome_contato1;
    public $fone_contato1;
    public $email_contato1;
    public $nome_contato2;
    public $fone_contato2;
    public $email_contato2;
    public $nome_contato3;
    public $fone_contato3;
    public $email_contato3;
    public $transporte;
    public $cia;
    public $comp_endereco;
    public $dec_matricula;
    public $atestado;
    public $renda;
    public $certidao;
    public $rg_responsavel;
    public $foto;
    public $url_foto_perfil;

    protected $rules = [
        'nome' => 'required|string|max:255|min:3',
        'nacionalidade' => 'nullable|string',
        'naturalidade' => 'nullable|string',
        'sexo' => 'nullable|string',
        'nascimento' => 'required|date',
        'genero' => 'nullable|string',
        'raca' => 'nullable|string',
        'endereco' => 'nullable|string',
        'bairro' => 'nullable|string',
        'cidade' => 'nullable|string',
        'uf' => 'nullable|string',
        'cep' => 'nullable|string',
        'regional' => 'nullable|string',
        'fone1' => 'nullable|string',
        'fone2' => 'nullable|string',
        'email' => 'nullable|string',
        'deficiencia' => 'nullable|boolean',
        'tipo_deficiencia' => 'nullable|string',
        'alergia' => 'nullable|boolean',
        'tipo_alergia' => 'nullable|string',
        'escolaridade' => 'nullable|string',
        'serie' => 'nullable|string',
        'turno' => 'nullable|string',
        'instituicao' => 'nullable|string',
        'tipo_instituicao' => 'nullable|string',
        'rg' => 'nullable|string',
        'emissor' => 'nullable|string',
        'uf_emissor' => 'nullable|string',
        'cpf' => 'nullable|string',
        'mae' => 'nullable|string',
        'rgmae' => 'nullable|string',
        'emissor_rg_mae' => 'nullable|string',
        'uf_rg_mae' => 'nullable|string',
        'pai' => 'nullable|string',
        'rgpai' => 'nullable|string',
        'emissor_rg_pai' => 'nullable|string',
        'uf_rg_pai' => 'nullable|string',
        'nome_contato1' => 'nullable|string',
        'fone_contato1' => 'nullable|string',
        'email_contato1' => 'nullable|string',
        'nome_contato2' => 'nullable|string',
        'fone_contato2' => 'nullable|string',
        'email_contato2' => 'nullable|string',
        'nome_contato3' => 'nullable|string',
        'fone_contato3' => 'nullable|string',
        'email_contato3' => 'nullable|string',
        'transporte' => 'nullable|boolean',
        'cia' => 'nullable|string',
        'comp_endereco' => 'nullable|boolean',
        'dec_matricula' => 'nullable|boolean',
        'atestado' => 'nullable|boolean',
        'renda' => 'nullable|boolean',
        'certidao' => 'nullable|boolean',
        'rg_responsavel' => 'nullable|boolean',
        'foto' => 'nullable|boolean',
        'url_foto_perfil' => 'nullable',
    ];

    public function create()
    {

    }

    public function render()
    {
        return view('livewire.alunos.alunos-create');
    }
}
