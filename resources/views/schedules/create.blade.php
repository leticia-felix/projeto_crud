<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                    <form action="{{ route('schedules.store') }}" method="POST">
                        @csrf

                        <div>
                            <x-input-label for="recipe_id" value="Receita*" class="text-green font-bold text-xl" />
                            <select multiple id="recipe_id" name="recipe_id" class="bg-softgreen border border-none text-snow text-sm rounded-lg focus:ring-green focus:border-none block w-full p-2.5 dark:bg-noner dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green dark:focus:border-blue-500">
                                @foreach ($recipes as $recipe)
                                    <option class="text-lg text-snow font-bold"value="{{ $recipe->id }}">{{ $recipe->title }}</option>
                                @endforeach
                            </select>
                            @error('recipe_id')
                            <p class="text-cafe text-base font-medium mt-1">{{ $message }}</p>
                            @enderror

                        </div>
                        <div>
                            <x-input-label for="scheduled_date" value="Data*" class="text-green font-bold text-xl mt-2"/>
                            <input type="date" id="scheduled_date" name="scheduled_date"  rows="4" class="rounded-md border-none focus-ring-none focus:outline-none p-2.5 text-snow text-xl font-bold bg-softgreen mt-1 block w-full"  ></input>

                            @error('scheduled_date')
                            <p class="text-cafe text-base font-medium mt-1">{{ $message }}</p>
                            @enderror

                        </div>

                        <div>
                            <x-input-label for="meal" value="Refeição" class="text-green font-bold text-xl" />
                            <select multiple id="meal" name="meal" class="bg-softgreen border border-none text-snow text-sm rounded-lg focus:ring-green focus:border-none block w-full p-2.5 dark:bg-noner dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green dark:focus:border-blue-500">

                                    <option class="text-lg text-snow font-bold"value="cafe_manha">Café da Manhã</option>
                                    <option class="text-lg text-snow font-bold"value="cafe_manha">Lanche da Manhã</option>
                                    <option class="text-lg text-snow font-bold"value="cafe_manha">Almoço</option>
                                    <option class="text-lg text-snow font-bold"value="cafe_manha">Lanche da Tarde</option>
                                    <option class="text-lg text-snow font-bold"value="cafe_manha">Jantar</option>
                                    <option class="text-lg text-snow font-bold"value="cafe_manha">Sobremesa</option>
                            </select>

                            @error('meal')
                            <p class="text-cafe text-base font-medium mt-1">{{ $message }}</p>
                            @enderror


                        </div>



                        <div>
                            <x-input-label for="shopping_list" value="Lista de Compras" class="text-green font-bold text-xl mt-2"/>
                            <textarea id="shopping_list" name="shopping_list" rows="4" class="rounded-md border-none focus-ring-none focus:outline-none p-2.5 text-snow text-xl font-bold bg-softgreen mt-1 block w-full"></textarea>

                            @error('shopping_list')
                            <p class="text-cafe text-base font-medium mt-1">{{ $message }}</p>
                            @enderror

                        </div>


                        <x-primary-button type="submit" class="mt-4">Agendar</x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
