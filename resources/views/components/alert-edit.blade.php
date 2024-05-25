
@if(session('success'))

<div id="alert-box" class="max-w-lg mx-auto p-4">
    <div class="relative flex flex-col bg-snow rounded-lg  p-4 mb-4" role="alert">
        <button onclick="closeAlert()" type="button" class=" absolute top-2 right-2 p-1.5  inline-flex items-center justify-center h-8 w-8 " aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="#006D77" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
        <div class="flex flex-col lg:flex-row lg:items-center">
            <div class="flex-grow">
                <p class="font-medium text-xl text-green">Suas receitas foram atualizadas.</p>
            </div>
        </div>
    </div>
</div>


@endif
