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
                <p class="bg-cafe font-extrabold flex justify-center items-center rounded-full px-4 pt-2 pb-2 uppercase leading-normal text-snow hover:text-primary-600 focus:text-primary-600">Adicione sua nova receita.</p>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form action="/recipes" method="POST">
                        @csrf

                        <div class="mt-4">
                            <x-input-label for="title" value="Título" class="text-green font-bold text-xl" />
                            <x-text-input id="title" name="title" class="text-snow font-bold text-xl bg-softgreen mt-1 block w-full" value="{{ old('title') }}" />
                            @error('title')
                                <p class="text-cafe text-base font-medium mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-input-label for="time" value="Tempo de Preparo" class="text-green font-bold text-xl" />
                            <x-text-input id="time" name="time" class="text-snow text-xl font-bold bg-softgreen mt-1 block w-full" value="{{ old('time') }}" />
                            @error('time')
                                <p class="text-cafe text-base font-medium mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-input-label for="ingredients" value="Ingredientes" class="text-green font-bold text-xl" />
                            <textarea id="ingredients" name="ingredients" rows="4" class="rounded-md border-none focus-ring-none focus:outline-none p-2.5 text-snow text-xl font-bold bg-softgreen mt-1 block w-full">{{ old('ingredients') }}</textarea>
                            @error('ingredients')
                                <p class="text-cafe text-base font-medium mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-input-label for="instructions" value="Instruções" class="text-green font-bold text-xl" />
                            <textarea id="instructions" name="instructions" rows="4" class="rounded-md border-none focus-ring-none focus:outline-none p-2.5 text-snow text-xl font-bold bg-softgreen mt-1 block w-full">{{ old('instructions') }}</textarea>
                            @error('instructions')
                                <p class="text-cafe text-base font-medium mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-input-label for="category" value="Categoria" class="text-green font-bold text-xl" />
                            <select multiple id="category" name="categories[]" class="bg-softgreen border border-none text-snow text-sm rounded-lg focus:ring-green focus:border-none block w-full p-2.5 dark:bg-noner dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green dark:focus:border-blue-500">
                                @foreach ($categories as $category)
                                    <option class="text-xl text-green font-bold" value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('categories')
                                <p class="text-cafe text-base font-medium mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <p class="text-softgreen mt-6">Todos os campos devem ser preenchidos para que uma receita possa ser cadastrada com sucesso.</p>

                        <x-primary-button type="submit" class="mt-4">Enviar Receita</x-primary-button>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>

</x-app-layout>
