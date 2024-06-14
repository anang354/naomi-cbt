@extends('layouts.app')


@section('content')

<div>
    <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
        <x-welcome-card-gd/>
        <div class="grid items-center justify-center grid-cols-3 gap-3">
            <div class="p-5 transition bg-white border-b-4 shadow-lg intro-y border-sky-400 rounded-xl hover:shadow-xl hover:scale-105">
                <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-sky-400/30">
                    <i class="text-lg bi bi-people-fill text-sky-400"></i>
                </div>
                <p class="mt-4 text-base text-gray-500">Siswa</p>
                <h1 class="mt-2 text-4xl text-gray-700 font-base">125</h1>
            </div>
            <div class="p-5 transition bg-white border-b-4 border-pink-400 shadow-lg intro-y rounded-xl hover:shadow-xl hover:scale-105">
                <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-pink-400/30">
                    <i class="text-lg text-pink-400 bi bi-person-heart"></i>
                </div>
                <p class="mt-4 text-base text-gray-500">Guru</p>
                <h1 class="mt-2 text-4xl text-gray-700 font-base">19</h1>
            </div>
            <div class="p-5 transition bg-white border-b-4 border-indigo-400 shadow-lg intro-y rounded-xl hover:shadow-xl hover:scale-105">
                <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-indigo-400/30">
                    <i class="text-lg text-indigo-400 bi bi-layers-fill"></i>
                </div>
                <p class="mt-4 text-base text-gray-500">Rombel</p>
                <h1 class="mt-2 text-4xl text-gray-700 font-base">9</h1>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-2 md:grid vw-100 md:grid-flow-row-dense md:grid-cols-3 md:gap-4">
            <div class="col-span-2 my-4">
            {{-- PENILAIAN --}}
                <div class="intro-y">
                    <x-title>
                        Penilaian
                    </x-title>
                    <div class="w-full px-4 py-2 mb-4 bg-white border border-gray-200 rounded-lg shadow">
                            <div class="grid w-full grid-cols-2 gap-2 py-2 sm:grid-cols-3 md:gap-4">
                                <a href="#" class="px-4 py-3 rounded-lg shadow-lg sm:px-8 bg-primary-1">
                                <p class="text-sm text-white">Ruang Ujian</p>
                                <h3 class="text-lg font-semibold text-white">9</h3>
                            </a>
                                <a href="#" class="px-4 py-3 rounded-lg shadow-lg sm:px-8 bg-primary-1">
                                <p class="text-sm text-white">Sesi</p>
                                <h3 class="text-lg font-semibold text-white">2</h3>
                            </a>
                                <a href="#" class="px-4 py-3 rounded-lg shadow-lg sm:px-8 bg-primary-1">
                                <p class="text-sm text-white">Bank Soal</p>
                                <h3 class="text-lg font-semibold text-white">129</h3>
                            </a>
                                <a href="#" class="px-4 py-3 rounded-lg shadow-lg sm:px-8 bg-primary-1">
                                <p class="text-sm text-white">Jadwal</p>
                                <h3 class="text-lg font-semibold text-white">10</h3>
                            </a>
                                <a href="#" class="px-4 py-3 rounded-lg shadow-lg sm:px-8 bg-primary-1">
                                <p class="text-sm text-white">Token</p>
                                <h3 class="text-xl font-semibold text-white">DZXHT</h3>
                            </a>
                            </div>
                    </div>
                </div>
            {{-- END OF PENILAIAN --}}
            {{-- RECENT ACTIVITY --}}
              <div class="intro-y">
                <div class="flex items-center justify-between my-8">
                    <x-title>
                        Recent Activity
                    </x-title>
                    <button class="flex items-center gap-2 text-sm transition ease-in-out text-primary-1">
                        <i class="bi bi-trash"></i>
                        <span>Delete All</span>
                    </button>
                  </div>
                  <div class="relative w-full overflow-y-scroll max-h-72">
                        <ol class="relative border-gray-200 ms-4 border-s">
                            <li class="mb-6 ms-6">
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3">
                                    <img class="rounded-full shadow-lg" src="{{ asset('images/user-1.jpg') }}" alt="Bonnie image"/>
                                </span>
                                <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex">
                                    <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">just now</time>
                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-300">Bonnie moved <a href="#" class="font-semibold text-blue-600 dark:text-blue-500 hover:underline">Jese Leos</a> to <span class="bg-gray-100 text-gray-800 text-xs font-normal me-2 px-2.5 py-0.5 rounded">Funny Group</span></div>
                                </div>
                            </li>
                            <li class="mb-6 ms-6">
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3">
                                    <img class="rounded-full shadow-lg" src="{{ asset('images/user-1.jpg') }}" alt="Thomas Lean image"/>
                                </span>
                                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                                    <div class="items-center justify-between mb-3 sm:flex">
                                        <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">2 hours ago</time>
                                        <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300">Thomas Lean commented on  <a href="#" class="font-semibold text-gray-900 hover:underline">Flowbite Pro</a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="ms-6">
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3">
                                    <img class="rounded-full shadow-lg" src="{{ asset('images/user-1.jpg') }}" alt="Jese Leos image"/>
                                </span>
                                <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex">
                                    <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">1 day ago</time>
                                    <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300">Jese Leos has changed <a href="#" class="font-semibold text-blue-600 hover:underline">Pricing page</a> task status to  <span class="font-semibold text-gray-900 ">Finished</span></div>
                                </div>
                            </li>
                        </ol>
                  </div>
              </div>
              {{-- END OF RECENT ACTIVITY --}}
            </div>

            <div class="col-span-2 my-4 md:col-span-1 intro-y">
                <x-title>
                    Your Profile
                </x-title>

              <div
                class="flex flex-col items-center justify-center w-full p-4 mb-2 transition bg-white border border-gray-200 rounded-lg shadow"
              >

                    <img class="p-1 my-4 rounded-lg w-28 h-28 ring-2 ring-gray-300 dark:ring-gray-500" src="{{ asset('images/user-1.jpg') }}" alt="Bordered avatar">
                    <h2 class="mt-4 text-xl text-gray-600">Anang Egga Ursula Huda</h2>
                    <div class="px-3 py-1 mt-2 text-xs text-white rounded bg-primary-1">ADMIN</div>
                    <div class="flex items-center justify-center gap-2 mt-10">
                        <div class="flex flex-col items-center gap-2">
                            <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-blue-400/30">
                                <i class="text-lg text-blue-700 bi bi-folder2-open"></i>
                            </div>
                            <div class="flex items-center justify-center w-10 h-10 rounded-lg bg-blue-400/30">
                                <i class="text-lg text-blue-700 bi bi-journal-text"></i>
                            </div>
                        </div>
                        <div class="flex flex-col ms-2">
                            <div>
                                <h3 class="mt-1 text-xl font-semibold leading-none text-gray-600">12</h3>
                                <p class="text-xs text-gray-500">Bank Soal</p>
                            </div>
                            <div>
                                <h3 class="mt-3 text-xl font-semibold leading-none text-gray-600">4</h3>
                                <p class="text-xs text-gray-500">Mata Pelajaran</p>
                            </div>
                        </div>
                    </div>
                    <h1 class="w-full pb-2 mt-8 text-lg text-gray-500 border-b border-gray-200">Details</h1>
                    <div class="relative w-full mt-4 overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 ">
                          <tbody>
                              <tr class="text-left bg-white">
                                  <td class="px-3 py-2">
                                      Username:
                                  </td>
                                  <td class="px-3 py-2">
                                      anangegga
                                  </td>
                              </tr>
                              <tr class="bg-white">

                                  <td class="px-3 py-2">
                                      Password:
                                  </td>
                                  <td class="px-3 py-2">
                                     <div class="flex items-center">
                                       <span>*******</span>
                                        <button class="ms-4"><i class="text-blue-700 bi bi-eye"></i></button>
                                     </div>
                                  </td>
                              </tr>
                              <tr class="text-left bg-white">
                                  <td class="px-3 py-2">
                                      Status:
                                  </td>
                                  <td class="px-3 py-2">
                                      <div class="inline-block px-1.5 py-0.5 text-white rounded bg-lime-500">Active</div>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                      <div class="mt-8 mb-2">
                        <x-button-primary class="w-full px-4 py-2">
                            <i class="bi bi-pencil-square me-1"></i>
                            Edit</x-button-primary>
                      </div>
                    </div>
              </div>

            </div>
          </div>


</div>

@endsection
