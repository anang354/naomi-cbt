@php
    $classes =  "block mb-2 text-sm font-medium text-gray-700";
@endphp

<label {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</label>
