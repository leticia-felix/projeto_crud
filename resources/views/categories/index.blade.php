<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">
<x-app-layout>


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">


        <x-alert-edit></x-alert-edit>
        <div class="flex justify-end mr-10">

            <a type="button" href="{{ route('categories.create') }}"
                    class="bg-cafe flex justify-center items-center rounded-full px-4 pt-2 pb-2 uppercase leading-normal text-snow hover:text-primary-600 focus:text-primary-600  ">

                    <p class="text-2xs font-semibold">Adicionar Categoria</p>

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0,0,256,256" class="ml-2">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M12,2c-5.523,0 -10,4.477 -10,10c0,5.523 4.477,10 10,10c5.523,0 10,-4.477 10,-10c0,-5.523 -4.477,-10 -10,-10zM16,13h-3v3c0,0.552 -0.448,1 -1,1v0c-0.552,0 -1,-0.448 -1,-1v-3h-3c-0.552,0 -1,-0.448 -1,-1v0c0,-0.552 0.448,-1 1,-1h3v-3c0,-0.552 0.448,-1 1,-1v0c0.552,0 1,0.448 1,1v3h3c0.552,0 1,0.448 1,1v0c0,0.552 -0.448,1 -1,1z"></path></g></g>
                    </svg>

            </a>
        </div>
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">


                <div class="overflow-x-auto">
                    <table class="w-full my-0 align-middle text-dark border-neutral-200">

                        <thead class="align-bottom text-green ">

                            <tr class="font-semibold text-[0.95rem] text-secondary-dark m-6">
                            <th class="pb-3 text-start min-w-[175px] ">CATEGORIA</th>
                            <th class="pb-3 pt-3 text-end min-w-[100px]"></th>
                            <th class="pb-3 pt-3 pr-12 text-end min-w-[175px]"> </th>
                            <th class="pb-3 pr-12 text-end min-w-[100px]"></th>

                            </tr>
                        </thead>


                        @foreach ($categories as $category)

                            <tbody>
                                <tr class="border-b border-dashed last:border-b-0 pb-4">

                                    <td class="p-2 pr-0 text-start min-w-[175px] max-w-[175px] break-words">
                                        <p class="font-semibold text-green text-md/normal">{{ $category->name }}</p>
                                    </td>


                                    <td class="p-3 ml-3 text-start flex ">

                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja deletar esta categoria?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-3 flex items-center rounded bg-softgreen px-5 pb-3 pt-3 text-xs font-medium uppercase leading-normal"> <x-delete-icon class=""> </x-delete-icon></button>
                                        </form>
                                        <form >
                                            <a href="{{ route('categories.edit', $category->id) }}" type="button" data-twe-ripple-init data-twe-ripple-color="light" class=" ml-3 flex items-center rounded bg-cafe px-5 pb-3 pt-3 text-xs font-medium uppercase leading-normal ">

                                                <x-edit-icon class=""> </x-edit-icon>

                                            </a>
                                        </form>

                                    </td>


                                </tr>




                            </tbody>



                        @endforeach


                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
