<nav x-data="{ open: false }" class="bg-cafe p-6 border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex mt-6 mb-6 ">
                <!-- Logo -->
                <div class="shrink-0 flex items-center align-left">
                    <a href="{{ route('recipes.index') }}">
                        <x-application-icon class=" block m-6 h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
            </div>




            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-2xl font-semibold leading-4  rounded-md   hover:text-snow text-snow focus:outline-none transition ease-in-out duration-150">

                            <div class="mr-3"><svg height="30px" width="30px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ffffff;} </style> <g> <path class="st0" d="M512,200.388c-0.016-63.431-51.406-114.828-114.845-114.836c-11.782-0.008-23.118,1.952-33.846,5.275 C338.408,58.998,299.57,38.497,256,38.497c-43.57,0-82.408,20.501-107.309,52.329c-10.737-3.322-22.073-5.283-33.846-5.275 C51.406,85.56,0.016,136.957,0,200.388c0.008,54.121,37.46,99.352,87.837,111.523c-11.368,35.548-21.594,81.104-21.538,140.848 v20.744h379.402v-20.744c0.056-59.744-10.169-105.3-21.538-140.848C474.54,299.741,511.984,254.509,512,200.388z M449.023,252.265 c-13.322,13.297-31.505,21.456-51.803,21.48l-0.51-0.007l-30.524-0.77l10.534,28.66c11.977,32.704,24.464,72.928,27,130.387 H108.281c2.536-57.459,15.023-97.683,27-130.387l10.534-28.669l-31.043,0.786c-20.29-0.024-38.473-8.184-51.803-21.48 c-13.305-13.338-21.473-31.546-21.481-51.876c0.008-20.322,8.176-38.53,21.481-51.867c13.346-13.306,31.554-21.473,51.876-21.482 c11.725,0.008,22.689,2.731,32.493,7.577l17.251,8.54l9.804-16.571C190.956,98.663,221.222,79.977,256,79.985 c34.778-0.008,65.044,18.678,81.606,46.601l9.796,16.571l17.26-8.54c9.804-4.846,20.761-7.568,32.493-7.577 c20.322,0.008,38.531,8.176,51.876,21.482c13.305,13.338,21.473,31.545,21.481,51.867 C470.505,220.719,462.337,238.927,449.023,252.265z"></path> </g> </g></svg>
                            </div>

                            <div class="">{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">


        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-none  mt-4">


            <div class="mt-3 space-y-1 text-snow">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
