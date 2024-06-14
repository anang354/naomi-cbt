@props(['id', 'value', 'name'])
@php
    $classes = "p-3 text-sm text-gray-700 border-b border-gray-200 cursor-pointer first:rounded-t-lg last:rounded-b-lg last:border-b-0 hover:bg-primary-1 hover:text-white"
@endphp
    <li {{ $attributes->merge(['class' => $classes]) }}>
        <input type="radio" id="{{ $id }}" value="{{ $value }}" name="{{ $name }}" class="hidden">
        {{ $slot }}
    </li>
