@php
$classes = ($active ?? false)
? 'inline-flex items-center py-4 px-4 w-full text-sm font-semibold text-gray-200 bg-gray-800'
: 'inline-flex items-center py-4 px-4 w-full text-sm font-semibold text-gray-800 hover:text-gray-200 hover:bg-gray-800
transition-colors duration-150
dark:hover:text-gray-200
dark:text-gray-100';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>