<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">
<x-app-layout>


<div class="container">


    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="flex justify-start ml-5">

                <p class="bg-cafe font-extrabold flex justify-center items-center rounded-full px-4 pt-2 pb-2 uppercase leading-normal text-snow hover:text-primary-600 focus:text-primary-600 "></>Adicione sua nova receita.</p>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">


                <div class="max-w-xl">


                    <form action="/recipes" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="title" value="Título" class="text-green font-bold text-xl mt-2" />
                            <x-text-input id="title" name="title" class="text-snow font-bold text-xl bg-softgreen mt-1 block w-full" required />

                        </div>
                        <div>
                            <x-input-label for="time" value="Tempo de Preparo" class="text-green font-bold text-xl mt-2" />
                            <x-text-input id="time" name="time" class="text-snow text-xl font-bold bg-softgreen mt-1 block w-full" required />

                        </div>

                        <div>
                            <x-input-label for="ingredients" value="Ingredientes" class="text-green font-bold text-xl mt-2"/>
                            <textarea id="ingredients" name="ingredients"  rows="4" class="rounded-md border-none focus-ring-none focus:outline-none p-2.5 text-snow text-xl font-bold bg-softgreen mt-1 block w-full" required  ></textarea>

                        </div>
                        <div>
                            <x-input-label for="instructions" value="Instruções" class="text-green font-bold text-xl mt-2"/>
                            <textarea id="instructions" name="instructions"  rows="4" class="rounded-md border-none focus-ring-none focus:outline-none p-2.5 text-snow text-xl font-bold bg-softgreen mt-1 block w-full" required ></textarea>

                        </div>

                        <p class="text-softgreen mt-6">Todos os campos devem ser preenchidos para que uma receita possa ser cadastrada com sucesso.</p>

                        <x-primary-button type="submit" class="mt-4">Enviar Receita</x-primary-button>

                    </form>
















</x-app-layout>
