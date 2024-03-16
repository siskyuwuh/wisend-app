@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-wisend-red focus:ring-wisend-red rounded-md shadow-sm peer']) !!}>
