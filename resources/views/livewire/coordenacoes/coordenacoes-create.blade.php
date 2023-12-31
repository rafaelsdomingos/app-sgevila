<div>
    <!--Cabeçalho do componente -->
    <div class="flex flex-row justify-between">

        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Nova Coordenação</h2>
    
        <div class="my-6">
            <a
              class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              href="{{route('coordenacoes.index')}}"
            >
              <i class="ti ti-arrow-left mr-2 text-lg"></i>
              Voltar
            </a>
        </div>
    </div>

    <!--Inicio dos inputs do formulário -->
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        
        <form method="post" wire:submit.prevent="create">
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Nome da Coordenação</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Nome da Coordenação"
                    wire:model.lazy="nome"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('nome')
                        {{$message}}
                    @enderror
                </span>
            </label>
    
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Sigla</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Sigla da Coordenação"
                  wire:model.lazy="sigla"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('sigla')
                        {{$message}}
                    @enderror
                </span>
            </label>
    
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Coordenador(a)</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Nome do Coordenador"
                  wire:model.lazy="coordenador"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('coordenador')
                        {{$message}}
                    @enderror
                </span>
            </label>
    
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Fone</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Telefone para contato"
                  wire:model.lazy="fone"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('fone')
                        {{$message}}
                    @enderror
                </span>
            </label>
    
            <label class="block text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">E-mail</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="E-mail da coordenação"
                  type="email"
                  wire:model.lazy="email"
                />
                <span class="text-xs text-red-600 dark:text-red-400">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </label>

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
