
@php
    $classes = "px-5 py-3 font-medium border-b-0 whitespace-nowrap";
@endphp
<th {{ $attributes->merge(['class' => $classes]) }}>
{{ $slot }}
</th>
