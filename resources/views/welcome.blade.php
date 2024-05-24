<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-cafe flex justify-center items-center h-screen ">

        <div class="flex h-full flex-wrap items-center justify-center lg:justify-between">

            <div class="shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-6/12">
                <x-application-logo  ></x-application-logo >
            </div>


            <div class=" mb-12 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12 text-snow font-semibold">
                <h1 class="text-4xl">TODAS as suas receitas em um só lugar!</h1>
                <div class="mt-6">

                @if (Route::has('login'))

                    @auth
                        <a href="{{ url('/dashboard') }}"> Dashboard </a>

                @else
                    <a href="{{ route('login') }}">
                        <button
                            type="button"
                            class="inline-flex items-center  px-6 py-3 bg-green  rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-softgreen  focus:bg-gray-700  focus:outline-none ftransition ease-in-out duration-150  ">
                            Login
                        </button>
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">
                        <button
                        type="button"
                        class="inline-flex items-center  px-6 py-3 bg-green  rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-softgreen  focus:bg-gray-700  focus:outline-none ftransition ease-in-out duration-150  ">
                        Registro
                    </button>
                    </a>
                @endif
                    @endauth

                </div>
            </div>






        </div>


    </body>
    </html>




@endif



















