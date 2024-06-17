<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">
<x-app-layout>



<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">


        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

            <div class="max-w-xl">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf



                    <div>
                        <x-input-label for="name" value="Nome" class="text-green font-bold text-xl mt-2"/>
                        <input id="name" name="name"  rows="4" class="rounded-md border-none focus-ring-none focus:outline-none p-2.5 text-snow text-xl font-bold bg-softgreen mt-1 block w-full"  ></input>

                        @error('name')
                        <p class="text-cafe text-base font-medium mt-1">{{ $message }}</p>
                        @enderror

                    </div>


                    <p class="text-softgreen mt-6">O campos devem ser preenchido para que a categoria possa ser cadastrada com sucesso.</p>

                    <x-primary-button type="submit" class="mt-4">Cadastrar</x-primary-button>
                </form>
            </div>

        </div>
    </div>
</div>


















</x-app-layout>
