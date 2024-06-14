
@php
    $classes = "text-sm bg-white lg:text-md";
@endphp
<tr {{ $attributes->merge(['class' => $classes]) }}>
{{ $slot }}
</tr>
