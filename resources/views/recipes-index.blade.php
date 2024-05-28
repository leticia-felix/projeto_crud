<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">

<x-app-layout class="w-full">


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="w-full max-w-full px-3 mb-6 font-bold ml-10 pt-5 text-2xl text-snow " >
                <p><div class="text-green font-extrabold"> Olá {{ Auth::user()->name }}!</div>O que vamos preparar hoje?</p>
            </div>


            <x-alert-edit></x-alert-edit>

            <div class="flex justify-end mr-10">

                <a type="button" href="{{ route('recipes.create') }}"
                        class="bg-cafe flex justify-center items-center rounded-full px-4 pt-2 pb-2 uppercase leading-normal text-snow hover:text-primary-600 focus:text-primary-600  ">

                        <p class="text-2xs font-semibold">Adicionar receita</p>

                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0,0,256,256" class="ml-2">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M12,2c-5.523,0 -10,4.477 -10,10c0,5.523 4.477,10 10,10c5.523,0 10,-4.477 10,-10c0,-5.523 -4.477,-10 -10,-10zM16,13h-3v3c0,0.552 -0.448,1 -1,1v0c-0.552,0 -1,-0.448 -1,-1v-3h-3c-0.552,0 -1,-0.448 -1,-1v0c0,-0.552 0.448,-1 1,-1h3v-3c0,-0.552 0.448,-1 1,-1v0c0.552,0 1,0.448 1,1v3h3c0.552,0 1,0.448 1,1v0c0,0.552 -0.448,1 -1,1z"></path></g></g>
                            </svg>

                        </a>
            </div>

                <div class="flex flex-wrap mx-3 mb-5">
                <div class="w-full max-w-full px-3 mb-6  mx-auto">


                    <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5 ">


                        <div class="flex-auto block  px-9">

                        <div class="overflow-x-auto">
                            <table class="w-full my-0 align-middle text-dark border-neutral-200">
                            @foreach ($recipes as $recipe)
                            <thead class="align-bottom text-green ">

                                <tr class="font-semibold text-[0.95rem] text-secondary-dark m-4">
                                <th class="pb-3 text-start min-w-[175px] ">RECEITA</th>
                                <th class="pb-3 pt-3 text-end min-w-[100px]">USÚARIO</th>
                                <th class="pb-3 pt-3 pr-12 text-end min-w-[175px]">TEMPO DE PREPARO</th>
                                <th class="pb-3 pr-12 text-end min-w-[100px]"></th>

                                </tr>
                            </thead>


                            <tbody>
                                <tr class="border-b border-dashed last:border-b-0 pb-4">
                                <td class="p-3 pl-0 min-w-[175px] max-w-[175px] break-words">
                                    <div class="flex items-center">
                                    <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                       <x-icon-receita></x-icon-receita>
                                    </div>
                                    <div class="flex flex-col justify-start min-w-[175px] max-w-[175px] break-words">
                                        <a href="{{ route('recipes.show', $recipe->id) }}"class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-green"> {{ $recipe->title }} </a>


                                    </div>
                                    </div>
                                </td>
                                <td class="p-3 pr-0 text-end min-w-[175px] max-w-[175px] break-words">
                                    <p class="font-semibold text-light-inverse text-md/normal">{{ $recipe->user->name }}</p>
                                </td>

                                <td class="p-3 pr-12 text-end min-w-[175px] max-w-[175px] break-words">
                                    <p class="font-semibold text-light-inverse text-md/ text-green "> {{ $recipe->time}} </p>
                                </td>

                                <td class="p-3 ml-3 text-end flex ">

                                    <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja deletar esta receita?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="ml-3 flex items-center rounded bg-softgreen px-5 pb-3 pt-3 text-xs font-medium uppercase leading-normal"> <x-delete-icon class=""> </x-delete-icon></button>
                                    </form>
                                    <form >
                                        <a href="{{ route('recipes.edit', $recipe->id) }}" type="button" data-twe-ripple-init data-twe-ripple-color="light" class=" ml-3 flex items-center rounded bg-cafe px-5 pb-3 pt-3 text-xs font-medium uppercase leading-normal ">

                                            <x-edit-icon class=""> </x-edit-icon>

                                        </a>
                                    </form>






                                    </td>
                                </td>

                                <td class="p-3 pr-0 text-end ">

                                    <a href="{{ route('recipes.show', $recipe->id) }}"class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary">

                                    <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                    <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </span>
                                    </button>
                                    </a>
                                </td>

                                </tr>

                </div>
            </div >
        </div>
    </div>





    @endforeach

</x-app-layout>
