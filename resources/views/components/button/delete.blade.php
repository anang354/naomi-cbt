@php
     $classes = "flex gap-1 items-center text-sm text-white border border-red-600 transition ease-in-out rounded-lg shadow hover:opacity-90 bg-red-500";
@endphp
<button {{$attributes->merge(['class' => $classes])}}>
    <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
    class="lucide lucide-trash2-icon stroke-1.5 w-4 h-4 mr-1 w-4 h-4 mr-1"
  >
    <path d="M3 6h18"></path>
    <path
      d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"
    ></path>
    <path
      d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"
    ></path>
    <line x1="10" x2="10" y1="11" y2="17"></line>
    <line x1="14" x2="14" y1="11" y2="17"></line>
  </svg>
{{ $slot }}
</button>