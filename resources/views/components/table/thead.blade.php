
@php
    $classes = "text-sm text-gray-600 lg:text-md";
@endphp

<thead {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</thead>
