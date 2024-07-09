@php
    $classes = "w-full px-4 py-2 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
