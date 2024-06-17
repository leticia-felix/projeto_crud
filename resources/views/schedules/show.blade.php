<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">
<x-app-layout class="">


<div class="container">





    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">


            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                    <a href="{{ route('recipes.show', $schedule->recipe->id) }}" class="uppercase text-green font-extrabold text-2xl mb-3"
                    >{{ $schedule->recipe->title }}</a>

                    <h1 class="uppercase text-green font-extrabold text-xl mb-3"
                    >{{ $schedule->scheduled_date }}</h1>

                    <h2 class="text-xl text-softgreen font-semibold"
                    >Tempo de preparo <span class="text-green"> {{$schedule->recipe->time}}</span></h2>

                    <div class="flex mt-2">
                        <p class="text-xl text-softgreen font-semibold">Refeição
                           <span class="text-green">
                            {{ [
                                'cafe_manha' => 'Café da Manhã',
                                'almoco' => 'Almoço',
                                'jantar' => 'Jantar',
                                'lanche_manha' => 'Lanche da Manhã',
                                'lanche_tarde' => 'Lanche da Tarde'
                            ][$schedule->meal] }}

                        </span>
                        </p>
                    </div>

                    <h2 class="text-xl text-softgreen font-semibold mt-2"
                    >Lista de Compras</h2>
                    <div style="white-space: pre-wrap;" class=" mt-3  text-green font-semibold text-lg"> {{ $schedule->shopping_list }}</div>


                </div>
            </div>
        </div>
    </div>






</x-app-layout>
