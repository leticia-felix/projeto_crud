@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-big text-lg ']) }}>
    {{ $value ?? $slot }}
</label>
