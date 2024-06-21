@extends('layouts.app')

@section('content')
    <div class="my-2">
        <x-title>{{ $title }}</x-title>
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-1">
            <x-button-primary onclick="openModal(true)" class="px-3 py-2 text-sm">
                {{-- <i class="bi bi-plus-lg me-1"></i> --}}
                Tambah Siswa
            </x-button-primary>
            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2.5 rounded-md font-medium focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed cursor-pointer px-2.5 !box" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-icon stroke-1.5 w-4 h-4 w-4 h-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
            </button>
            <button class="px-3 py-1.5 bg-red-400 cursor-not-allowed text-white rounded-lg" disabled>
                <i class="text-sm bi bi-trash-fill"></i>
            </button>

                <!-- Dropdown menu -->
                <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                            <i class="text-base bi bi-cloud-arrow-up me-2"></i>
                            Import
                        </a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                            <i class="text-base bi bi-database-up me-2"></i>
                            Update Data
                        </a>
                      </li>

                    </ul>
                </div>
            </div>
            <form>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="search"
                        class="block w-full px-8 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search..." required />
                </div>
            </form>
        </div>
        {{-- <div class="relative overflow-x-auto">
        <x-table>
          <x-table.thead>
            <tr class="">
              <x-table.th>
                NO
              </x-table.th>
              <x-table.th>
                IMAGE
              </x-table.th>
              <x-table.th class="text-center">
                MATA PELAJARAN
              </x-table.th>
              <x-table.th class="text-center">
                KODE MAPEL
              </x-table.th>
              <x-table.th class="text-center">
                JENJANG
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
                    <x-table.td>
                        <div class="w-10 h-10 -ml-5 transition-all image-fit hover:scale-110">
                            <img class="cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)]" alt="Midone Tailwind HTML Admin Template" src="{{ asset('images/user-1.jpg') }}">
                        </div>
                    </x-table.td>
                    <x-table.td class="text-slate-600">
                        Matematika
                    </x-table.td>
                    <x-table.td class="text-center text-slate-600">
                        MTK
                    </x-table.td>
                    <x-table.td class="text-center text-slate-600">
                        <span class="py-0.5 px-1.5 bg-pink-600 rounded text-white text-xs">SD</span>
                        <span class="py-0.5 px-1.5 bg-blue-600 rounded text-white text-xs">SMP</span>
                        <span class="py-0.5 px-1.5 bg-gray-600 rounded text-white text-xs">SMA</span>
                    </x-table.td>
                    <x-table.td>
                        <div class="flex items-center justify-center text-lime-500">
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
                        class="flex items-center justify-center"
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
                @for ($i = 2; $i < 6; $i++)

                <x-table.tr class="intro-x">
                    <x-table.td>
                    {{ $i }}
                    </x-table.td>
                    <x-table.td class="text-slate-600">
                        Ilmu Pengetahuan Alam
                    </x-table.td>
                    <x-table.td class="text-center text-slate-600">
                        IPA
                    </x-table.td>
                    <x-table.td class="text-center text-slate-600">
                        <span class="py-0.5 px-1.5 bg-blue-600 rounded text-white text-xs">SMP</span>
                        <span class="py-0.5 px-1.5 bg-gray-600 rounded text-white text-xs">SMA</span>
                    </x-table.td>
                    <x-table.td>
                        <div class="flex items-center justify-center text-lime-500">
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
                        class="flex items-center justify-center"
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
                @endfor
            </tbody>
        </x-table>
    </div> --}}
        <div class="grid grid-cols-12 gap-4 mt-6">
            @for ($i = 1; $i <= 10; $i++)
            <div class="col-span-12 intro-y md:col-span-6">
                <div class="box">
                    <input type="checkbox" id="name-{{ $i }}" value="" class="hidden peer" required="">
                    {{-- inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600  peer-checked:text-gray-600 hover:bg-gray-50 --}}
                    <label for="name-{{ $i }}" class="relative flex flex-col items-center col-span-6 gap-6 p-5 mx-auto overflow-hidden transition-colors cursor-pointer peer-checked:bg-blue-400 lg:flex-row rounded-xl">
                        <img class="relative w-24 h-24 mx-auto rounded-full shadow-lg lg:absolute lg:-left-6" src="{{ asset('images/user-1.jpg') }}">
                        <div class="flex flex-col text-center lg:mr-auto lg:text-left lg:pl-16">
                            <strong class="text-sm font-medium text-slate-800">Ahmad Yusuf Al Hamdani</strong>
                            <span class="text-xs font-medium text-slate-400">P1, Laki-Laki, Active</span>
                        </div>
                        <div class="flex lg:mt-0 lg:me-3">
                            <x-button-primary class="px-2 py-1 me-1">
                                Edit </x-button-primary>
                                <x-button-secondary class="px-2 py-1 shadow-none">
                                Profile </x-button-secondary>
                        </div>
                        </label>
                </div>
            </div>
            @endfor

            {{-- <div class="col-span-12 intro-y md:col-span-6">
                <div class="box">
                    <div class="flex flex-col items-center p-5 lg:flex-row">
                        <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1"><img
                                class="rounded-full"
                                src="{{ asset('images/user-1.jpg') }}"></div>
                        <div class="mt-3 text-center lg:ml-2 lg:mr-auto lg:text-left lg:mt-0"><a href=""
                                class="font-medium">Angelina Jolie</a>
                            <div class="text-slate-500 text-xs mt-0.5">Frontend Engineer</div>
                        </div>
                        <div class="flex mt-4 lg:mt-0">
                            <x-button-primary class="px-2 py-1 me-1">
                                Message </x-button-primary>
                                <x-button-secondary class="px-2 py-1 shadow-none">
                                Profile </x-button-secondary>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <x-modal-form title="Tambah Siswa" size="medium">
        <form action="">
            <x-modal-form.body>
                <div class="mb-5">
                    <x-forms.label for="name">
                        Nama Siswa
                    </x-forms.label>
                    <x-forms.input name="name" type="text" placeholder="Nama Siswa" required />
                </div>
                <div class="mb-5">
                    <x-forms.label for="nis">
                        NIS
                    </x-forms.label>
                    <x-forms.input name="nis" type="number" placeholder="Nomor Induk Siswa" required />
                </div>
                <div class="mb-5">
                    <x-forms.label>
                        Jenis Kelamain
                    </x-forms.label>
                    <x-forms.select name="gender">
                        <option value="active">Laki-laki</option>
                        <option value="nonactive">Perempuan</option>
                    </x-forms.select>
                </div>
                <div class="mb-5">
                    <x-forms.label for="kelas_awal">
                        Kelas Awal
                    </x-forms.label>
                    <x-forms.select name="kelas">
                        @for ($i = 1; $i < 13; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </x-forms.select>
                </div>
                <div class="mb-5">
                    <x-forms.label for="date_in">
                        Tanggal Masuk
                    </x-forms.label>
                    <x-forms.input name="date_in" type="date" required />
                </div>
                <div class="mb-5">
                    <x-forms.label for="username">
                        Username
                    </x-forms.label>
                    <div class="relative">
                        <div class="absolute inset-y-0 flex items-center text-gray-500 pointer-events-none start-0 ps-3">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <input type="text" id="username" class="block w-full p-2.5 shadow-sm text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Username" required />
                    </div>
                </div>
                <div class="mb-5">
                    <x-forms.label for="password">
                        Password
                    </x-forms.label>
                    <div class="relative">
                        <div class="absolute inset-y-0 flex items-center text-gray-500 pointer-events-none start-0 ps-3">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <input type="password" id="password" class="block w-full p-2.5 shadow-sm text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Password" required />
                    </div>
                </div>
            </x-modal-form.body>
        </form>
    </x-modal-form>
@endsection
@section('scripts')
    <script>
        const modal_overlay = document.querySelector('#modal_overlay');
        const modal = document.querySelector('#modal');

        function openModal(value) {
            const modalCl = modal.classList
            const overlayCl = modal_overlay

            if (value) {
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
