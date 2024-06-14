@extends('layouts.app')

@section('content')
<div class="my-2">
    <div class="flex items-center justify-between intro-y">
        <x-title class="mb-0">{{ $title }}</x-title>
        <div class="flex gap-2">
            <x-button-primary class="px-3 py-2 text-sm">
                <i class="bi bi-floppy-fill me-1"></i>
                Simpan
            </x-button-primary>
        </div>
    </div>

    <div class="mt-4">
        <div class="p-4 box intro-y">
            <h4 class="pt-2 pb-4 text-sm text-gray-600 border-b border-gray-200">
                <i class="text-xs bi bi-chevron-down me-1"></i>
                Manual
            </h4>
            <div class="grid grid-cols-12 gap-2 mt-4">
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="name">Nama Guru</x-forms.label>
                    <x-forms.input name="name" id="name" type="text" />
                </div>
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="nip">NIP/NUPTK</x-forms.label>
                    <x-forms.input name="nip" id="nip" type="text" />
                </div>
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="username">Username</x-forms.label>
                    <div class="absolute top-9 start-0 flex items-center ps-3.5 pointer-events-none">
                        <i class="text-gray-400 bi bi-person-fill"></i>
                    </div>
                      <input type="text" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 " placeholder="username">
                </div>
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="password">Password</x-forms.label>
                    <div class="absolute top-9 start-0 flex items-center ps-3.5 pointer-events-none">
                        <i class="text-gray-400 bi bi-key-fill"></i>
                    </div>
                      <input type="text" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 " placeholder="password">
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center gap-2 p-3 my-3 box bg-primary-1">
        <p class="text-xs text-white xl:text-sm"><b>Catatan!</b> untuk import data dari file excel, silahkan download templatenya terlebih dahulu.</p>
        <button class="px-2 py-1 text-xs text-white rounded-lg bg-gray-100/20 hover:bg-gray-100/40 xl:text-sm"> <i class="bi bi-cloud-arrow-down-fill me-1"></i> Download Template</button>
    </div>
    <div class="grid grid-cols-12 gap-4 mt-4">
        <div class="col-span-12 p-4 md:col-span-4 box intro-y">
            <div class="flex items-center justify-between border-b border-gray-200">
                <h4 class="pt-2 pb-4 text-sm text-gray-600">
                    <i class="text-xs bi bi-chevron-down me-1"></i>
                    Excel
                </h4>
                <x-button-primary class="px-2 py-1"> <i class="bi bi-cloud-arrow-down-fill me-1"></i> Template</x-button-primary>
            </div>

            <div class="flex items-center justify-center w-full mt-2">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 hover:bg-gray-100 ">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <i class="text-5xl text-gray-500 bi bi-filetype-xlsx"></i>
                        <p class="mb-2 text-xs text-gray-500 lg:text-sm "><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 ">File excel only</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>

        </div>
        <div class="col-span-12 p-4 md:col-span-8 box intro-y">
            <div class="flex items-center justify-between border-b border-gray-200">
                <h4 class="pt-2 pb-4 text-sm text-gray-600">
                    <i class="text-xs bi bi-chevron-down me-1"></i>
                    Preview
                </h4>
                <x-button-primary class="px-3 py-2"> <i class="bi bi-upload me-1"></i> Upload</x-button-primary>
            </div>


            <div class="relative mt-2 overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                NO
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                NIP/NUPTK
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Username
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Password
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                1
                            </th>
                            <td class="px-6 py-4">
                                Anang Egga Ursula Huda
                            </td>
                            <td class="px-6 py-4">
                                31231231221
                            </td>
                            <td class="px-6 py-4">
                                anangegga
                            </td>
                            <td class="px-6 py-4">
                                123456
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                2
                            </th>
                            <td class="px-6 py-4">
                                Intanpriska Kurnia Selly, S.Pd
                            </td>
                            <td class="px-6 py-4">
                                214142134213
                            </td>
                            <td class="px-6 py-4">
                                intanpriska
                            </td>
                            <td class="px-6 py-4">
                                123456
                            </td>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
@endsection



