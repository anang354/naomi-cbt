@extends('layouts.app')

@section('content')
<div class="my-2">
    <div class="mb-8 intro-y">
        <x-title class="mb-0">{{ $title }}</x-title>
        <div class="flex items-center justify-between">
            <x-button-primary onclick="location.href='{{ route('dataguru.create') }}';" class="px-3 py-2 text-sm">
                Tambah Guru
            </x-button-primary>
            <p class="text-sm text-gray-500">Showing 1 to 10 of 150 entries</p>
            <form>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="search" class="block w-full px-8 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search..." required />
                </div>
            </form>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4 mt-4">
        @for ($i = 0; $i < 9; $i++)
        <div class="col-span-12 box md:col-span-6 xl:col-span-4 intro-y">
            <div class="flex items-center gap-2 p-4 border-b border-gray-200/60">
                <img src="{{ asset('images/user-1.jpg') }}" width="65px" class="border-[3px] rounded-full shadow-lg border-slate-200" alt="">
                <div>
                    <h4 class="text-base font-medium text-gray-700">Jonathan Doe, S.Pd</h4>
                    <p class="text-sm text-gray-500">Guru</p>
                </div>
            </div>
            <div class="p-4">
                <ul>
                    <li class="flex items-center justify-between gap-2 mb-4 text-sm text-gray-500">
                        <div>
                            <i class="bi bi-activity"></i>
                            Pendidikan Agama
                        </div>
                        <div class="flex gap-1">
                            <span class="py-0.5 px-1 text-[11px] font-medium text-gray-700 bg-gray-200 rounded-lg">P3</span>
                            <span class="py-0.5 px-1 text-[11px] font-medium text-gray-700 bg-gray-200 rounded-lg">P4</span>
                            <span class="py-0.5 px-1 text-[11px] font-medium text-gray-700 bg-gray-200 rounded-lg">P5B</span>
                            <span class="py-0.5 px-1 text-[11px] font-medium text-gray-700 bg-gray-200 rounded-lg">P5A</span>
                        </div>
                    </li>
                    <li class="flex gap-2 mb-4 text-sm text-gray-500">
                        <i class="bi bi-activity"></i>
                        Ilmu Pengetahuan Alam
                    </li>
                </ul>
            </div>
            <div class="p-4 border-t border-gray-200/60">
                <div class="flex items-center justify-between py-2">
                    <div>
                        <x-button-primary onclick="location.href='{{ route('dataguru.editJabatan') }}';"  class="py-1.5 px-2 text-xs xl:text-sm"><i class="bi bi-pencil-square me-1"></i>Jabatan</x-button-primary>
                        <x-button-secondary onclick="location.href='{{ route('dataguru.edit') }}';" class="py-1.5 px-2 text-xs xl:text-sm"><i class="bi bi-pencil-square me-1"></i>Profile</x-button-secondary>
                    </div>
                    <div>
                        <button class="pb-0.5 transition-color duration-300 px-1.5 rounded-lg text-red-400 border border-red-400 shadow-lg hover:bg-red-500 hover:text-white">
                            <i class="text-xs bi bi-trash3-fill xl:text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endfor

    </div>

</div>
@endsection
