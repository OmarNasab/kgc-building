@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'placeholder:text-default text-3xl font-normal bg-secondary border-5 text-center text-primary rounded-lg border-primary']) !!}>
