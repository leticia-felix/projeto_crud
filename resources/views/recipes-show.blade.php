<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">
<x-app-layout class="">


<div class="container">


    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">


            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                    <h1 class="uppercase text-green font-extrabold text-2xl"
                    >{{$recipe->title}}</h1>

                    <h2 class="text-xl text-softgreen font-semibold"
                    >Tempo de preparo {{$recipe->time}}</h2>


                    <ol class="list-decimal list-inside">{{$recipe->instructions}}</ol>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
