@props(['divider'])
@php
    $classes = ($divider ??false)
                ? 'px-5 py-3 border-b box rounded-l-none rounded-r-none border-x-0  first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200'
                : 'px-5 py-3 border-b box rounded-l-none rounded-r-none border-x-0  first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r'
@endphp
<td {{ $attributes->merge(['class' => $classes]) }}>
{{ $slot }}
</td>
