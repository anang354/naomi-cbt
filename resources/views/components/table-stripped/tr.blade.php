@php
    $classes = "border-b odd:bg-white even:bg-gray-100";
@endphp
<tr {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</tr>
