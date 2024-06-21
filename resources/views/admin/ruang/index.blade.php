@extends('layouts.app')

@section('content')
<div class="my-2">
    <div class="flex items-center justify-between intro-y">
        <x-title class="mb-0">{{ $title }}</x-title>

    </div>
    <div class="flex justify-between">
        <button class="py-1.5 px-2.5 rounded-lg bg-red-500/60 ms-2 text-white">
            <i class="bi bi-trash-fill"></i>
        </button>
        <div class="flex gap-2">
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

            <x-button-primary onclick="openModal(true)" class="px-3 py-2 text-sm">
                <i class="bi bi-plus-lg me-1"></i>
                Tambah Ruang Ujian
            </x-button-primary>
        </div>
    </div>
        <div class="">
            <div class="relative overflow-x-auto no-scrollbar">
                <x-table>
                  <x-table.thead class="intro-y">
                    <tr>
                      <x-table.th>
                        <input type="checkbox" name="checkAll" />
                      </x-table.th>
                      <x-table.th>
                        NO
                      </x-table.th>
                      <x-table.th class="text-center">
                        NAMA RUANG
                      </x-table.th>
                      <x-table.th class="text-center">
                        KODE
                      </x-table.th>
                      <x-table.th class="text-center">
                        JUM. SESI
                      </x-table.th>
                      <x-table.th class="text-center">
                        ACTIONS
                      </x-table.th>
                    </tr>
                  </x-table.thead>
                  <tbody>
                    <x-table.tr class="intro-x">
                      <x-table.td>
                        <input type="checkbox" name="check[1]" />
                      </x-table.td>
                      <x-table.td>
                       1
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        Ruang 1
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        R1
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        2 SESI
                      </x-table.td>
                      <x-table.td :divider="true">
                        <div
                          class="flex items-center justify-center py-1 border-slate-200"
                        >
                          <a
                            class="flex items-center mr-3 text-gray-600"
                            href=""
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-check-square-icon stroke-1.5 w-4 h-4 mr-1 w-4 h-4 mr-1"
                            >
                              <path d="m9 11 3 3L22 4"></path>
                              <path
                                d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"
                              ></path>
                            </svg>
                            Edit </a
                          ><a class="flex items-center text-red-500" href=""
                            ><svg
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
                            Delete
                          </a>
                        </div>
                      </x-table.td>
                    </x-table.tr>
                    <x-table.tr class="intro-x">
                      <x-table.td>
                        <input type="checkbox" name="check[1]" />
                      </x-table.td>
                      <x-table.td>
                        2
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        Ruang 2
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        R2
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        2 SESI
                      </x-table.td>
                      <x-table.td :divider="true">
                        <div
                          class="flex items-center justify-center py-1 border-slate-200"
                        >
                          <a
                            class="flex items-center mr-3 text-gray-600"
                            href=""
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-check-square-icon stroke-1.5 w-4 h-4 mr-1 w-4 h-4 mr-1"
                            >
                              <path d="m9 11 3 3L22 4"></path>
                              <path
                                d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"
                              ></path>
                            </svg>
                            Edit </a
                          ><a class="flex items-center text-red-500" href=""
                            ><svg
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
                            Delete
                          </a>
                        </div>
                      </x-table.td>
                    </x-table.tr>
                    </tbody>
                </x-table>
            </div>
        </div>
</div>

{{-- MODAL FORM --}}
<x-modal-form title="Tambah Ruang Ujian" size="medium">
    <form action="">
        <x-modal-form.body>
            <div class="mb-5">
                <x-forms.label>
                    Nama Ruang
                </x-forms.label>
                <x-forms.input name="name" type="text" placeholder="Jenis Ujian" required/>
            </div>
            <div class="mb-5">
                <x-forms.label>
                    Kode
                </x-forms.label>
                <x-forms.input name="kode" type="text" placeholder="Kode Jenis" required/>
            </div>
        </x-modal-form.body>
    </form>
</x-modal-form>
{{-- END MODAL FORM --}}
@endsection
@section('scripts')
<script>
    const modal_overlay = document.querySelector('#modal_overlay');
    const modal = document.querySelector('#modal');

    function openModal (value){
        const modalCl = modal.classList
        const overlayCl = modal_overlay

        if(value){
        overlayCl.classList.remove('hidden')
        setTimeout(() => {
            modalCl.remove('opacity-0')
            modalCl.remove('-translate-y-full')
            modalCl.remove('scale-150')
        }, 100);
        } else {
        modalCl.add('-translate-y-full')
        setTimeout(() => {
            modalCl.add('opacity-0')
            modalCl.add('scale-150')
        }, 100);
        setTimeout(() => overlayCl.classList.add('hidden'), 300);
        }
    }
    openModal(false)
    modal_overlay.addEventListener('click', (event) => {
    if (event.target === modal_overlay) {
        openModal(false);
    }
    });
</script>
@endsection
