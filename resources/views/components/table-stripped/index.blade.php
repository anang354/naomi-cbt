@php
    $classes = "w-full text-sm text-left text-gray-500 border";
@endphp
<table {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</table>
