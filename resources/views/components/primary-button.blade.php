<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center  px-6 py-3 bg-green  rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-softgreen  focus:bg-gray-700  focus:outline-none ftransition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
