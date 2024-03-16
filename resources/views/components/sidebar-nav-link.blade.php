@props(['active'])

@php
    $a = $active ?? false ? 'group flex items-center rounded-lg px-4 py-6 text-red-700 dark:text-white dark:hover:bg-gray-700' : 'group flex items-center rounded-lg px-4 py-6 text-gray-900 hover:text-red-700 dark:text-white dark:hover:bg-gray-700';
    $b = $active ?? false ? 'mx-4 h-5 w-5 text-gray-500 transition duration-75 text-red-700 dark:text-gray-400 dark:group-hover:text-white' : 'mx-4 h-5 w-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-red-700 dark:group-hover:text-white';
    // $c = $active ?? false ? a
@endphp


<a {{ $attributes->merge(['class' => $a]) }}>
    <svg class="{{ $b }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
        {{ $icon }}
    </svg>
    {{ $slot }}
</a>
