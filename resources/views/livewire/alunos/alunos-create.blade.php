<div>
    <!--Cabeçalho do componente -->
    <div class="flex flex-row justify-between">

        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Novo Aluno</h2>
    
        <div class="my-6">
            <a
              class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              href="{{route('alunos.index')}}"
            >
              <i class="ti ti-arrow-left mr-2 text-lg"></i>
              Voltar
            </a>
        </div>
    </div>

    <!--Formulário dados pessoais -->
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        
        <form method="post" wire:submit.prevent="create">

            <h4 class="my-6 text-center text-xl font-semibold text-gray-700 dark:text-gray-200">DADOS PESSOAIS</h4>
            
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Nome da Completo</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="nome"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('nome')
                        {{$message}}
                    @enderror
                </span>
            </label>
    
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Nascimento</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  type="date"
                  wire:model.lazy="nascimento"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('nascimento')
                        {{$message}}
                    @enderror
                </span>
            </label>
    
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Nacionalidade</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="nacionalidade"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('nacionalidade')
                        {{$message}}
                    @enderror
                </span>
            </label>


            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Naturalidade</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="naturalidade"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('naturalidade')
                        {{$message}}
                    @enderror
                </span>
            </label>


            <label class="block mt-4 text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Sexo</span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  wire:model.lazy="sexo"
                >
                    <option>Selecione o sexo</option>
                    <option value="FEMININO">FEMININO</option>
                    <option value="MASCULINO">MASCULINO</option>
                </select>
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('sexo')
                        {{$message}}
                    @enderror
                </span>
            </label>


            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Cor / Raça</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="raca"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('raca')
                        {{$message}}
                    @enderror
                </span>
            </label>
           
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Endereço</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="endereco"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('endereco')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Bairro</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="bairro"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('bairro')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Cidade</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="cidade"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('cidade')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">UF</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="uf"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('uf')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">CEP</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    placeholder="Digite o CEP"
                    wire:model.lazy="cep"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('cep')
                        {{$message}}
                    @enderror
                </span>
            </label>


            <label class="block mt-4 text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Regional</span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  wire:model.lazy="regional"
                >
                    <option>Selecione a SER</option>
                    <option value="I">SER I</option>
                    <option value="II">SER II</option>
                    <option value="III">SER III</option>
                    <option value="IV">SER IV</option>
                    <option value="V">SER V</option>
                    <option value="VI">SER VI</option>
                    <option value="VII">SER VII</option>
                    <option value="VIII">SER VIII</option>
                    <option value="IX">SER IX</option>
                    <option value="X">SER X</option>
                    <option value="XI">SER XI</option>
                    <option value="XII">SER II</option>
                    <option value="SN">Outro município</option>
                </select>
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('regional')
                        {{$message}}
                    @enderror
                </span>
            </label>
            
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Celular</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="fone1"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('fone1')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Telefone</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="fone2"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('fone1')
                        {{$message}}
                    @enderror
                </span>
            </label>


            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">E-mail</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="email"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </label>


            <div class="mt-4 text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Possui alguma necessidade especial?</span>
                <div class="mt-2">
                    <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                        <input
                        type="radio"
                        class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        wire:model="deficiencia"
                        value="1"
                        />
                        <span class="ml-2">Sim</span>
                    </label>
                    
                    <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                        <input
                            type="radio"
                            class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            wire:model="deficiencia"
                            value="0"
                        />
                        <span class="ml-2">Não</span>
                    </label>
                </div>
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('deficiencia')
                        {{$message}}
                    @enderror
                </span>
            </div>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Se sim, qual seria?</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="tipo_deficiencia"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('tipo_deficiencia')
                        {{$message}}
                    @enderror
                </span>
            </label>



            <div class="mt-4 text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Possui alguma alergia?</span>
                <div class="mt-2">
                    <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                        <input
                        type="radio"
                        class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        wire:model="alergia"
                        value="1"
                        />
                        <span class="ml-2">Sim</span>
                    </label>
                    
                    <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                        <input
                            type="radio"
                            class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            wire:model="alergia"
                            value="0"
                        />
                        <span class="ml-2">Não</span>
                    </label>
                </div>
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('deficiencia')
                        {{$message}}
                    @enderror
                </span>
            </div>



            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Se sim, qual seria?</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="tipo_alergia"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('tipo_alergia')
                        {{$message}}
                    @enderror
                </span>
            </label>
    
            <!-- Formulário de escolaridade -->
            <hr class="my-6 border-1 border-neutral-300">
            <h4 class="my-6 text-center text-xl font-semibold text-gray-700 dark:text-gray-200">ESCOLARIDADE</h4>

            <label class="block mt-4 text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Escolaridade</span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  wire:model.lazy="escolaridade"
                >
                    <option></option>
                    <option value="ENSINO FUNDAMENTAL INCOMPLETO">ENSINO FUNDAMENTAL INCOMPLETO</option>
                    <option value="ENSINO FUNDAMENTAL">ENSINO FUNDAMENTAL</option>
                    <option value="ENSINO MÉDIO INCOMPLETO">ENSINO MÉDIO INCOMPLETO</option>
                    <option value="ENSINO MÉDIO">ENSINO MÉDIO</option>
                    <option value="ENSINO SUPERIOR INCOMPLETO">ENSINO SUPERIOR INCOMPLETO</option>
                    <option value="ENSINO SUPERIOR">ENSINO SUPERIOR</option>
                </select>
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('escolaridade')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Série</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="serie"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('serie')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block mt-4 text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Turno</span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  wire:model.lazy="tuno"
                >
                    <option></option>
                    <option value="MANHÃ">MANHÃ</option>
                    <option value="TARDE">TARDE</option>
                    <option value="NOITE">NOITE</option>
                </select>
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('turno')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Instituição de Ensino</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="instituicao"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('instituicao')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block mt-4 text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Tipo de Instituição de Ensino</span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  wire:model.lazy="tipo_instituicao"
                >
                    <option></option>
                    <option value="PÚBLICA">PÚBLICA</option>
                    <option value="PRIVADA">PRIVADA</option>
                </select>
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('tipo_instituicao')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <!-- Formulário de documentação -->
            <hr class="my-6 border-1 border-neutral-300">
            <h4 class="my-6 text-center text-xl font-semibold text-gray-700 dark:text-gray-200">DOCUMENTAÇÃO</h4>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">RG</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="rg"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('rg')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Emissor</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="emissor"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('emissor')
                        {{$message}}
                    @enderror
                </span>
            </label>


            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">UF</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="uf_emissor"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('uf_emissor')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">CPF</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="cpf"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('cpf')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <!-- Formulário de Identificação dos responsáveis -->
            <hr class="my-6 border-1 border-neutral-300">
            <h4 class="my-6 text-center text-xl font-semibold text-gray-700 dark:text-gray-200">IDENTIFICAÇÃO DOS PAIS / RESPONSÁVEIS</h4>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Nome da Mãe</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="mae"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('mae')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">RG da Mãe</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="rgmae"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('rgmae')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Emissor</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="emissor_rg_mae"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('emissor_rg_mae')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">UF</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="uf_rg_mae"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('uf_rg_mae')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Nome do Pai</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="pai"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('pai')
                        {{$message}}
                    @enderror
                </span>
            </label>


            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">RG do Pai</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="rgpai"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('rgpai')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Emissor</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="emissor_rg_pai"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('emissor_rg_pai')
                        {{$message}}
                    @enderror
                </span>
            </label>

            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">UF</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text"
                    wire:model.lazy="uf_rg_pai"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('uf_rg_pai')
                        {{$message}}
                    @enderror
                </span>
            </label>


            <!-- Formulário de Contatos -->
            <hr class="my-6 border-1 border-neutral-300">
            <h4 class="my-6 text-center text-xl font-semibold text-gray-700 dark:text-gray-200">CONTATOS</h4>

            <div>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Nome Contanto 1</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="text"
                        wire:model.lazy="nome_contato1"
                    />
                    <span class="text-xs text-red-600 dark:text-red-400">
                        @error('nome_contato1')
                            {{$message}}
                        @enderror
                    </span>
                </label>
    
    
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Celular</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="text"
                        wire:model.lazy="fone_contato1"
                    />
                    <span class="text-xs text-red-600 dark:text-red-400">
                        @error('fone_contato1')
                            {{$message}}
                        @enderror
                    </span>
                </label>
    
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">E-mail</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="text"
                        wire:model.lazy="email_contato1"
                    />
                    <span class="text-xs text-red-600 dark:text-red-400">
                        @error('email_contato1')
                            {{$message}}
                        @enderror
                    </span>
                </label>
            </div>

            <div>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Nome Contanto 2</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="text"
                        wire:model.lazy="nome_contato2"
                    />
                    <span class="text-xs text-red-600 dark:text-red-400">
                        @error('nome_contato2')
                            {{$message}}
                        @enderror
                    </span>
                </label>
    
    
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Celular</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="text"
                        wire:model.lazy="fone_contato2"
                    />
                    <span class="text-xs text-red-600 dark:text-red-400">
                        @error('fone_contato2')
                            {{$message}}
                        @enderror
                    </span>
                </label>
    
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">E-mail</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="text"
                        wire:model.lazy="email_contato2"
                    />
                    <span class="text-xs text-red-600 dark:text-red-400">
                        @error('email_contato2')
                            {{$message}}
                        @enderror
                    </span>
                </label>
            </div>

            <div>
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Nome Contanto 3</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="text"
                        wire:model.lazy="nome_contato3"
                    />
                    <span class="text-xs text-red-600 dark:text-red-400">
                        @error('nome_contato3')
                            {{$message}}
                        @enderror
                    </span>
                </label>
    
    
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Celular</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="text"
                        wire:model.lazy="fone_contato3"
                    />
                    <span class="text-xs text-red-600 dark:text-red-400">
                        @error('fone_contato3')
                            {{$message}}
                        @enderror
                    </span>
                </label>
    
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">E-mail</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="text"
                        wire:model.lazy="email_contato3"
                    />
                    <span class="text-xs text-red-600 dark:text-red-400">
                        @error('email_contato1')
                            {{$message}}
                        @enderror
                    </span>
                </label>
            </div>


            <!-- Formulário de Documentção entregue -->
            <hr class="my-6 border-1 border-neutral-300">
            <h4 class="my-6 text-center text-xl font-semibold text-gray-700 dark:text-gray-200">DOCUMENTAÇÃO ENTREGUE</h4>

            
            
            <div class="grid grid-cols-2">

                <div class="mt-6 text-sm">
                    <label class="flex items-center dark:text-gray-400">
                        <input
                            type="checkbox"
                            class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            wire:model.lazy="comp_endereco"
                        />
                        <span class="ml-2">
                            Comprovante de Endereço(cópia)
                        </span>
                    </label>
                </div>

                <div class="mt-6 text-sm">
                    <label class="flex items-center dark:text-gray-400">
                        <input
                            type="checkbox"
                            class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            wire:model.lazy="renda"
                        />
                        <span class="ml-2">
                            Comprovante de Renda
                        </span>
                    </label>
                </div>

                <div class="flex mt-6 text-sm">
                    <label class="flex items-center dark:text-gray-400">
                        <input
                            type="checkbox"
                            class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            wire:model.lazy="foto"
                        />
                        <span class="ml-2">
                            Foto 3x4
                        </span>
                    </label>
                </div>
            </div>

            <div class="flex flex-col md:flex-row">
                <div class="flex mt-6 text-sm">
                    <label class="flex items-center dark:text-gray-400">
                        <input
                            type="checkbox"
                            class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            wire:model.lazy="dec_matricula"
                        />
                        <span class="ml-2">
                            Declaração de Matrícula
                        </span>
                    </label>
                </div>

                <div class="flex mt-6 text-sm">
                    <label class="flex items-center dark:text-gray-400">
                        <input
                            type="checkbox"
                            class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            wire:model.lazy="certidao"
                        />
                        <span class="ml-2">
                            Certidão de Nascimento
                        </span>
                    </label>
                </div>

                <div class="flex mt-6 text-sm">
                    <label class="flex items-center dark:text-gray-400">
                        <input
                            type="checkbox"
                            class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            wire:model.lazy="rg_responsavel"
                        />
                        <span class="ml-2">
                            RG do Responsável
                        </span>
                    </label>
                </div>

                <div class="flex mt-6 text-sm">
                    <label class="flex items-center dark:text-gray-400">
                        <input
                            type="checkbox"
                            class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            wire:model.lazy="atestado"
                        />
                        <span class="ml-2">
                            Atestado Médico
                        </span>
                    </label>
                </div>
            </div>
            


            <div class="my-6">
                <button
                  class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                  type="submit"
                >
                  <i class="ti ti-device-floppy text-lg mr-2"></i>
                  Salvar
                </button>
            </div>
        </form>

    </div>
</div>
