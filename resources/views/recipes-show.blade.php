<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">
<x-app-layout class="">


<div class="container">





    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">


            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                    <h1 class="uppercase text-green font-extrabold text-2xl mb-3"
                    >{{$recipe->title}}</h1>

                    <h2 class="text-xl text-softgreen font-semibold"
                    >Tempo de preparo <span class="text-green"> {{$recipe->time}}</span></h2>

                    <div class="flex mt-2">
                        <p class="text-xl text-softgreen font-semibold">Categorias:
                            @foreach($recipe->categories as $category)
                              <span class="bg-cafe p-2 text-white text-base rounded-full">{{$category->name}}</span>
                            @endforeach
                        </p>
                    </div>

                    <h2 class="text-xl text-softgreen font-semibold mt-2"
                    >Ingredientes</h2>
                    <div style="white-space: pre-wrap;" class=" mt-3   text-lg"> {{$recipe->ingredients}}</div>


                    <h2 class="text-xl text-softgreen font-semibold mt-1"
                    >Instruções</h2>
                    <div style="white-space: pre-wrap;" class="mt-3 text-lg"> {{$recipe->instructions}}</div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
