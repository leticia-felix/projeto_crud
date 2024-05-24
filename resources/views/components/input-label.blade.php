@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-big text-sm ']) }}>
    {{ $value ?? $slot }}
</label>
