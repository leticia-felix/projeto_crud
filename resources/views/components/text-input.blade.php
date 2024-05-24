@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => '  rounded-md border-none focus-ring-none text-green focus:outline-none']) !!} >



