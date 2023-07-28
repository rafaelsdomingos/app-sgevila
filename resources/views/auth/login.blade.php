<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SGE Vila</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/tailwind.output.css')}}" />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="{{asset('js/init-alpine.js')}}"></script>
        @livewireStyles
    </head>
    <body>
        <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
            <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
                <div class="flex flex-col overflow-y-auto md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{asset('img/fachada_vila.jpg')}}" alt="Office"/>
                        <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{asset('img/fachada_vila.jpg')}}" alt="Office" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <img src="{{asset('img/logo_vila.png')}}" alt="Logo da Vila" class="mx-auto my-8">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <label class="block text-sm">
                                    <span class="text-gray-700 dark:text-gray-400">E-mail / Login</span>
                                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Digite seu e-mail ou login" name="email" :value="old('email')" required />
                                </label>

                                <label class="block mt-4 text-sm"><span class="text-gray-700 dark:text-gray-400">Senha</span>
                                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Digite sua senha" type="password" name="password" required  />
                                </label>

                                <!-- You should use a button here, as the anchor is only used for the example  -->
                                <button
                                    class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                    type="submit"
                                >
                                    Entrar
                                </button>
                            </form>

                            <div class="my-8"></div>

                            <!--
                            <hr class="my-8" />

                            <p class="mt-4">
                                <a
                                class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                                href="./forgot-password.html"
                                >
                                Esqueceu sua senha?
                                </a>
                            </p>
                            -->
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @livewireScripts
    </body>
</html>
  
