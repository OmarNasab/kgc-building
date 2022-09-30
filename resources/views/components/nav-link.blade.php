@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-center text-primary font-bold text-4xl bg-secondary rounded-r-lg py-2'
            : 'text-center text-secondary font-bold text-4xl py-2 hover:bg-secondary hover:rounded-r-lg hover:text-primary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
