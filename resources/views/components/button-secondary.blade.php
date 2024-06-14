@php
    $classes = "text-sm text-gray-600 border border-gray-200 transition ease-in-out rounded-lg shadow hover:bg-gray-50 bg-white";
@endphp
<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
