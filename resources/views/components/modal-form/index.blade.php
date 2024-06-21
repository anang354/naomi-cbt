@props(['title', 'size'])
@php
    $classes = "hidden fixed inset-0 z-40 bg-black bg-opacity-70 h-screen w-full flex justify-center items-start md:items-center pt-4 md:pt-0 overflow-y-scroll no-scrollbar pb-4";
    if($size === 'medium') {
        $sizing = 'md:w-1/3';
    } elseif($size === 'small') {
        $sizing = 'md:w-1/4';
    } elseif($size === 'full') {
        $sizing = 'md:w-full';
    } else {
        $sizing = 'md:w-1/2';
    }
@endphp

<!-- overlay -->
<div id="modal_overlay" {{ $attributes->merge(['class' => $classes]) }}>
    <!-- modal -->
    <div id="modal" class="relative z-50 w-10/12 transition-opacity transition-transform duration-300 transform scale-150 -translate-y-full bg-white rounded shadow-lg min-h-32 opacity-0 {{ $sizing }}">
         <!-- header -->
        <div class="px-4 py-3 border-b border-gray-200">
            <h2 class="py-2 text-base font-medium text-gray-600">{{ $title }}</h2>
        </div>
        {{ $slot }}
    </div>
</div>
