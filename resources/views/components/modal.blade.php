@props(['title'])
@php
    $classes = "hidden absolute inset-0 z-40 bg-black bg-opacity-70 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0"
@endphp

<!-- overlay -->
<div id="modal_overlay" {{ $attributes->merge(['class' => $classes]) }}>

    <!-- modal -->
    <div id="modal" class="relative z-50 w-10/12 transition-opacity transition-transform duration-300 transform scale-150 -translate-y-full bg-white rounded shadow-lg pacity-0 md:w-1/2 h-1/2 md:h-3/4">
        <!-- button close -->
        {{-- <button
        onclick="openModal(false)"
        class="absolute w-10 h-10 text-2xl text-white bg-red-500 rounded-full -top-3 -right-3 hover:bg-red-600 focus:outline-none">
        &cross;
        </button> --}}

        <!-- header -->
        <div class="px-4 py-3 border-b border-gray-200">
        <h2 class="py-2 text-base font-medium text-gray-600">{{ $title }}</h2>
        </div>

        <!-- body -->
        <div class="w-full p-3">
            {{ $slot }}
        </div>

        <!-- footer -->
        <div class="absolute bottom-0 left-0 flex items-center justify-end w-full gap-3 px-4 py-3 border-t border-gray-200">
        <x-button-secondary
            onclick="openModal(false)"
            class="px-2.5 py-1.5"
        >Close</x-button-secondary>
        {{-- <x-button-primary type="submit" class="px-3 py-2">Send</x-button-primary> --}}

        </div>
    </div>
</div>
