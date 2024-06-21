@php
    $classes = "px-6 py-3 text-center";
@endphp
<td {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</td>
