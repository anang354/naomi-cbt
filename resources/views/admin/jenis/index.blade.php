@extends('layouts.app')

@section('content')
<div class="my-2">
    <div class="flex items-center justify-between">
        <x-title class="mb-0">{{ $title }}</x-title>
        <div class="flex gap-2">
            <x-button-primary class="px-3 py-2 text-sm">
                <i class="bi bi-plus-lg me-1"></i>
                Tambah Jenis Ujian
            </x-button-primary>
        </div>
    </div>
    {{-- flex flex-col gap-2 md:grid vw-100 md:grid-flow-row-dense md:grid-cols-3 md:gap-4 --}}
    <div class="">
        {{-- col-span-2 my-4 --}}
        <div class="">
            {{-- <h3 class="pb-3 my-3 text-xs font-medium text-gray-600 border-b border-gray-200 xl:text-base">Tahun Ajaran</h3> --}}
            <div class="relative overflow-x-auto no-scrollbar">
                <x-table>
                  <x-table.thead>
                    <tr>
                      <x-table.th>
                        NO
                      </x-table.th>
                      <x-table.th class="text-center">
                        JENIS UJIAN
                      </x-table.th>
                      <x-table.th class="text-center">
                        KODE UJIAN
                      </x-table.th>
                      <x-table.th class="text-center">
                        ACTIONS
                      </x-table.th>
                    </tr>
                  </x-table.thead>
                  <tbody>
                    <x-table.tr class="intro-x">

                      <x-table.td>
                       1
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        Ujian Tengah Semester
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        UTS
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
                        2
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        Ujian Akhir Semester
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        UAS
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
                         3
                        </x-table.td>
                        <x-table.td class="text-center text-slate-600">
                          Ujian Sekolah
                        </x-table.td>
                        <x-table.td class="text-center text-slate-600">
                        US
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
</div>
@endsection
