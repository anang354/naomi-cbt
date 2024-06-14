@props(['href', 'title', 'active'])
@php
    $classes = ($active ??false)
                ? 'text-yellow-400'
                : 'text-white'
@endphp
<li class="intro-x">
    <div data-tooltip-target="{{ $title }}" data-tooltip-placement="right">
        <a href="{{ $href }}" class="flex items-center w-full p-2 pl-6 text-sm {{ $classes }} duration-700 transition-translate xl:text-base group hover:bg-gray-50/10">
            <i class="bi bi-activity"></i>
            <span class="block ms-4 md:hidden sm:hidden lg:block">{{ $title }}</span>
        </a>
    </div>
    <div id="{{ $title }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip lg:hidden xs:hidden">
        {{ $title }}
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
</li>
