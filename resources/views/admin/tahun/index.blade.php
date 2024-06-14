@extends('layouts.app')

@section('content')
<div class="my-2">
    <div class="flex items-center justify-between">
        <x-title class="mb-0">{{ $title }}</x-title>
        <div class="flex gap-2">
            <x-button-primary class="px-3 py-2 text-sm">
                <i class="bi bi-plus-lg me-1"></i>
                Tambah Tahun
            </x-button-primary>
        </div>
    </div>
    {{-- flex flex-col gap-2 md:grid vw-100 md:grid-flow-row-dense md:grid-cols-3 md:gap-4 --}}
    <div class="">
        {{-- col-span-2 my-4 --}}
        <div class="">
            {{-- <h3 class="pb-3 my-3 text-xs font-medium text-gray-600 border-b border-gray-200 xl:text-base">Tahun Ajaran</h3> --}}
            <div class="relative overflow-x-auto">
                <x-table>
                  <x-table.thead>
                    <tr>
                      <x-table.th>
                        NO
                      </x-table.th>
                      <x-table.th class="text-center">
                        TAHUN AJAR
                      </x-table.th>
                      <x-table.th class="text-center">
                        STATUS
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
                        2021/2022
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        <div
                          class="flex items-center justify-center text-red-500"
                        >
                          <x-button-primary class="px-2 py-1.5">Aktifkan</x-button-primary>
                        </div>
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
                        2022/2023
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        <div
                          class="flex items-center justify-center text-lime-500"
                        >
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
                            class="lucide lucide-check-square-icon stroke-1.5 w-4 h-4 mr-2 w-4 h-4 mr-2"
                          >
                            <path d="m9 11 3 3L22 4"></path>
                            <path
                              d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"
                            ></path>
                          </svg>
                          Active
                        </div>
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
                          2023/2024
                        </x-table.td>
                        <x-table.td class="text-center text-slate-600">
                          <div
                            class="flex items-center justify-center text-red-500"
                          >
                            <x-button-primary class="px-2 py-1.5">Aktifkan</x-button-primary>
                          </div>
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
        {{-- <div class="col-span-2 my-4 md:col-span-1">
            <h3 class="pb-3 my-3 text-sm font-medium text-gray-600 border-b border-gray-200 xl:text-base">Semester</h3>
            <div>

                <ul class="flex flex-col gap-2 mb-2">
                    <li>
                        <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required />
                        <label for="hosting-small" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:bg-primary-1 peer-checked:text-white hover:text-gray-600 hover:bg-gray-100">
                            <div class="block">
                                <div class="w-full text-base font-semibold lg:text-lg">Semester 1</div>
                                <div class="w-full text-sm lg:text-base">Juli - Desember</div>
                            </div>
                            <p class="text-sm ms-3 lg:text-base">Active</p>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
                        <label for="hosting-big" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:bg-primary-1 peer-checked:text-white hover:text-gray-600 hover:bg-gray-100">
                            <div class="block">
                                <div class="w-full text-base font-semibold lg:text-lg">Semester 2</div>
                                <div class="w-full text-sm lg:text-base">Januari - Juni</div>
                            </div>
                            <p class="text-sm ms-3 lg:text-base">Non-active</p>
                        </label>
                    </li>
                </ul>
                <div class="my-3">
                    <form>
                        <label for="search" class="mb-3 text-sm font-medium text-gray-800">Jumlah Hari Efektif</label>
                        <div class="relative mt-2">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3 me-2">
                                <i class="text-lg font-medium text-gray-500 bi bi-calendar2-date"></i>
                            </div>
                            <input type="search" id="search" class="block w-full p-4 text-base text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" value="200" required />
                            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-primary-1 hover:opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div> --}}
    </div>
</div>
@endsection
