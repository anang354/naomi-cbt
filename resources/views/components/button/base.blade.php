@php
    $classes = "text-sm text-gray-600 border transition ease-in-out rounded-lg shadow hover:opacity-90";
@endphp
<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
