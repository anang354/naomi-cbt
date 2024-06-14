@props(['title'])
@php
    $classes = "flex cursor-pointer item-center justify-start bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
@endphp
<div class="relative flex flex-col">
    <div {{ $attributes->merge(['class' => $classes]) }}>{{ $title }}</div>
    <ul id="option" class="absolute hidden w-full mt-4 border border-gray-100 rounded-lg shadow-xl dropdown-up top-8 bg-gray-50">
    {{ $slot }}
    </ul>
</div>
