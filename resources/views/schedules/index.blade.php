<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">

<x-app-layout class="w-full">


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="w-full max-w-full px-3 mb-6 font-bold ml-10 pt-5 text-2xl text-snow " >
                <p><div class="text-green font-extrabold"> Olá {{ Auth::user()->name }}!</div>Lembra dos nossos compromissos?</p>
            </div>



            <x-alert-edit></x-alert-edit>

            <div class="flex justify-end mr-10">

                <a type="button" href="{{ route('schedules.create') }}"
                class="bg-cafe flex justify-center items-center rounded-full px-4 mr-2 pt-2 pb-2 uppercase leading-normal text-snow hover:text-primary-600 focus:text-primary-600  ">

                    <p class="text-2xs font-semibold">Agendar Receita</p>

                </a>


            </div>

                <div class="flex flex-wrap mx-3 mb-5">
                    <div class="w-full max-w-full px-3 mb-6  mx-auto">


                        <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5 ">


                            <div class="flex-auto block  px-9">

                                <div class="overflow-x-auto">
                                    <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                    @foreach ($schedules as $schedule)
                                    <thead class="align-bottom text-green ">

                                        <tr class="font-semibold text-[0.95rem] text-secondary-dark m-4">
                                        <th class="pb-3 text-start min-w-[175px] ">DATA</th>
                                        <th class="pb-3 pt-3 text-end min-w-[100px]">RECEITA</th>
                                        <th class="pb-3 pt-3 pr-12 text-end min-w-[175px]"></th>
                                        <th class="pb-3 pr-12 text-end min-w-[100px]"></th>

                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr class="border-b border-dashed last:border-b-0 pb-4">
                                        <td class="p-3 pl-0 min-w-[175px] max-w-[175px] break-words">
                                            <div class="flex items-center">
                                            <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                            <x-calendar-icon></x-calendar-icon>
                                            </div>
                                            <div class="flex flex-col justify-start min-w-[175px] max-w-[175px] break-words">
                                                <a href="{{ route('schedules.show', $schedule) }}"class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-green"> {{ $schedule->scheduled_date }} </a>


                                            </div>
                                            </div>
                                        </td>
                                        <td class="p-3 pr-0 text-end min-w-[175px] max-w-[175px] break-words">
                                            <a href="{{ route('recipes.show', $schedule->recipe->id) }}"class="font-semibold text-green text-md/normal">{{ $schedule->recipe->title }}</a>
                                        </td>

                                        <td class="p-3 pr-12 text-end min-w-[175px] max-w-[175px] break-words">
                                            <a href="{{ route('schedules.show', $schedule) }}"class="font-semibold text-light-inverse text-md/ text-green "> Ver lista de compras</a>
                                        </td>

                                        <td class="p-3 ml-3 text-end flex ">

                                            <form action="{{ route('schedules.destroy', $schedule) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja deletar este agendamento?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-3 flex items-center rounded bg-softgreen px-5 pb-3 pt-3 text-xs font-medium uppercase leading-normal"> <x-delete-icon class=""> </x-delete-icon></button>
                                            </form>
                                            <form >
                                                <a href="{{ route('schedules.edit', $schedule) }}" type="button" data-twe-ripple-init data-twe-ripple-color="light" class=" ml-3 flex items-center rounded bg-cafe px-5 pb-3 pt-3 text-xs font-medium uppercase leading-normal ">

                                                    <x-edit-icon class=""> </x-edit-icon>

                                                </a>
                                            </form>

                                            </td>
                                        </td>

                                        <td class="p-3 pr-0 text-end ">

                                            <a href="{{ route('schedules.show', $schedule) }}"class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary">

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
                                    </tbody>
                                </div>
                            </div>
                        </div>
                    </div>
                </div >
        </div>
    </div>





    @endforeach

</x-app-layout>
