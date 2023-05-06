@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 py-1 text-sm font-medium leading-5 text-gray-900 border-0 outline-none focus:outline-none  transition duration-150 ease-in-out hover:cursor-pointer'
            : 'inline-flex items-center px-1 py-1 text-sm font-medium leading-5 text-gray-500 border-0 outline-none hover:text-gray-700 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out hover:cursor-pointer';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
