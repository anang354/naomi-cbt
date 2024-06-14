@php
    $classes = "mb-4 text-lg font-medium text-gray-600 lg:text-xl"
@endphp
<h1
{{ $attributes->merge(['class' => $classes]) }}
>
{{ $slot }}
</h1>
