@extends('layouts.app')

@section('content')
<div class="my-2">
    <div class="flex items-center justify-between intro-y">
        <x-title class="mb-0">{{ $title }}</x-title>
        <div class="flex gap-2">
            <x-button-primary onclick="location.href='{{ route('ujianbanksoal.create') }}';" class="px-3 py-2 text-sm">
                <i class="bi bi-plus-lg me-1"></i>
                Tambah Bank Soal
            </x-button-primary>
            <x-button-secondary  class="px-3 !bg-orange-500 !border-orange-600 !text-white py-2 text-sm">
                <i class="bi bi-copy me-1"></i>
                Duplikat Bank Soal
            </x-button-secondary>
        </div>
    </div>
    <div class="mt-4 flex w-full gap-3">
        <div class="flex gap-2 items-center">
            <div class="w-5 h-5 rounded bg-gray-600"></div>
            <p class="text-xs lg:text-sm text-gray-500">Tidak Digunakan (bisa dihapus)</p>
        </div>
        <div class="flex gap-2 items-center">
            <div class="w-5 h-5 rounded bg-yellow-400"></div>
            <p class="text-xs lg:text-sm text-gray-500">Digunakan Jadwal</p>
        </div>
        <div class="flex gap-2 items-center">
            <div class="w-5 h-5 rounded bg-pink-600"></div>
            <p class="text-xs lg:text-sm text-gray-500">Digunakan Siswa</p>
        </div>
    </div>
    <div class="mt-4 flex justify-between">
        <div class="flex gap-3">
            <x-forms.select name="filterBy">
                <option value="" selected>Filter Berdasarkan</option>
                <option value="semua">Semua</option>
                <option value="mapel">Mata Pelajaran</option>
                <option value="Guru">Guru</option>
                <option value="level">Level</option>
            </x-forms.select>
        </div>
        <x-button.delete class="py-2 px-3">
            <span class="hidden md:block">Hapus Bank Soal Terpilih</span>
        </x-button.delete>
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
                        KODE
                      </x-table.th>
                      <x-table.th class="text-center">
                        MATA PELAJARAN
                      </x-table.th>
                      <x-table.th class="text-center">
                        KELAS
                      </x-table.th>
                      <x-table.th class="text-center">
                        ACTIONS
                      </x-table.th>
                    </tr>
                  </x-table.thead>
                  <tbody>
                    <x-table.tr class="intro-x">
                      <x-table.td class="bg-pink-600 relative"> 
                        <label for="check1" class="w-full absolute h-full top-0 left-0 cursor-pointer"></label>
                        <input type="checkbox" id="check1" name="check[1]" />
                      </x-table.td>
                      <x-table.td>
                       1
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        US IPS P4
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        Ilmu Pengetahuan Sosial
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        P4
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
                          >
                          <a
                            class="flex items-center mr-3 text-primary-1"
                            onclick="location.href='{{ route('ujianbanksoal.detail') }}';"
                            href="#"
                            >
                            <i class="bi bi-eye-fill me-1 text-base"></i>
                            Detail </a
                          >
                          <a class="flex items-center text-red-500" href=""
                            >
                            <svg xmlns="http://www.w3.org/2000/svg"
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
                        <x-table.td class="bg-gray-600 relative"> 
                            <label for="check2" class="w-full absolute h-full top-0 left-0 cursor-pointer"></label>
                            <input type="checkbox" id="check2" name="check[1]" />
                          </x-table.td>
                      <x-table.td>
                        2
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        US PAI P5
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        Pendidikan Agama Islam
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        P5A, P5B
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
                              class="lucide lucide-check-square-icon stroke-1.5 w-4 h-4 mr-1"
                            >
                              <path d="m9 11 3 3L22 4"></path>
                              <path
                                d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"
                              ></path>
                            </svg>
                            Edit </a
                          >
                          <a
                            class="flex items-center mr-3 text-primary-1"
                            onclick="location.href='{{ route('ujianbanksoal.detail') }}';"
                            href="#"
                            >
                            <i class="bi bi-eye-fill me-1 text-base"></i>
                            Detail </a
                          >
                          <a class="flex items-center text-red-500" href=""
                            >
                            <svg xmlns="http://www.w3.org/2000/svg"
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
                        <x-table.td class="bg-gray-600 relative"> 
                            <label for="check3" class="w-full absolute h-full top-0 left-0 cursor-pointer"></label>
                            <input type="checkbox" id="check3" name="check[3]" />
                          </x-table.td>
                      <x-table.td>
                        3
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        US MTK P6
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        Matematika
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        P6
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
                          >
                          <a
                            class="flex items-center mr-3 text-primary-1"
                            href=""
                            >
                            <i class="bi bi-eye-fill me-1 text-base"></i>
                            Detail </a
                          >
                          <a class="flex items-center text-red-500" href=""
                            >
                            <svg xmlns="http://www.w3.org/2000/svg"
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

@endsection
@section('scripts')

@endsection
