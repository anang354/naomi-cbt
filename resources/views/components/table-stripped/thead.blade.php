@php
    $classes = "text-xs text-white uppercase bg-primary-1";
@endphp
<thead {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</thead>
