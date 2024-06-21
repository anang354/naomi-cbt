@php
    $classes = "px-6 py-4 text-center";
@endphp
<th scope="col" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</th>
