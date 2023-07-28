@section('title')
    Dashboard
@endsection
<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Dashboard</h2>

    <!-- Container dos cards-->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                ></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Total de Estudantes
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{$totalDeAlunos}}
                </p>
            </div>
        </div>

        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                ></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Alunos de escola pública
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{$alunosEscolaPublica}}
                </p>
            </div>
        </div>

        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                ></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Alunos de escola particular
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{$alunosEscolaPrivada}}
                </p>
            </div>
        </div>
    </div>

    <!-- Container dos gráficos -->
    <div class="grid gap-6 mb-8 md:grid-cols-2">
        <!--Gráfico Disco -->
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Escola
            </h4>
            <canvas id="pie-escola"></canvas>
            <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
            
                <!-- Chart legend -->
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"></span>
                    <span>Privada</span>
                </div>
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
                    <span>Pública</span>
                </div>
            </div>
        </div>


        <!-- Gráfico em Barras -->
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Alunos por Regional
            </h4>
            <canvas id="bars"></canvas>
            <div class="flex justify-start mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                <!-- Chart legend -->
                <div class="flex items-center">
                    <span>Alunos de outros municípios: <strong>{{$semRegional}}</strong></span>
                </div>
            </div>
      </div>
      
    </div>
</div>

@push('scripts')
    <script>
        const pieConfig = {
        type: 'doughnut',
        data: {
            datasets: [
            {
                data: [{{$alunosEscolaPublica}}, {{$alunosEscolaPrivada}}],
                /**
                 * These colors come from Tailwind CSS palette
                 * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
                 */
                backgroundColor: ['#0694a2', '#1c64f2'],
                label: 'Dataset 1',
            },
            ],
            labels: ['Pública', 'Privada'],
        },
        options: {
            responsive: true,
            cutoutPercentage: 80,
            /**
             * Default legends are ugly and impossible to style.
             * See examples in charts.html to add your own legends
             *  */
            legend: {
            display: false,
            },
        },
        }
        const pieCtx = document.getElementById('pie-escola')
        window.myPie = new Chart(pieCtx, pieConfig)
    </script>

    <script>
        const barConfig = {
            type: 'bar',
            data: {
                labels: ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'],
                datasets: [
                {
                    label: 'Quantidade de Alunos',
                    backgroundColor: ['#0694a2', '#1c64f2', '#ef4444', '#d1c6ad', '#bbada0', '#a1869e', '#797596', '#0b1d51', '#5efc8d', '#8ef9f3', '#93bedf', '#8377d1' ],
                    // borderColor: window.chartColors.red,
                    borderWidth: 1,
                    data: [{{$ser1}}, {{$ser2}}, {{$ser3}}, {{$ser4}}, {{$ser5}}, {{$ser6}}, {{$ser7}}, {{$ser8}}, {{$ser9}}, {{$ser10}}, {{$ser11}}, {{$ser12}}],
                },
                ],
            },
            options: {
                responsive: true,
                legend: {
                display: false,
                },
            },
        }
        const barsCtx = document.getElementById('bars')
        window.myBar = new Chart(barsCtx, barConfig)
    </script>
@endpush
