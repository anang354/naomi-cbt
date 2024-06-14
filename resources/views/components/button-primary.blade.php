@php
    $classes = "text-sm text-white transition ease-in-out rounded-lg shadow hover:opacity-90 bg-primary-1";
@endphp
<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
