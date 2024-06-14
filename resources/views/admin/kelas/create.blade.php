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
                Set Kelas
            </h4>
            <div class="grid grid-cols-12 gap-2 mt-4">
                <div class="col-span-6 mb-3 intro-x">
                    <x-forms.label for="name">Level</x-forms.label>
                    <x-forms.select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </x-forms.select>
                </div>
                <div class="col-span-6 mb-3 intro-x">
                    <x-forms.label for="kode">Kode Kelas</x-forms.label>
                    <x-forms.input name="kode" type="text" />
                </div>
                <div class="col-span-12 mb-3 intro-x">
                    <x-forms.label for="name">Nama Kelas</x-forms.label>
                    <x-forms.input name="name" type="text" />
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="p-4 box intro-y">
            <h4 class="pt-2 pb-4 text-sm text-gray-600 border-b border-gray-200">
                <i class="text-xs bi bi-chevron-down me-1"></i>
                Set Siswa
            </h4>

            <x-forms.input id="search" placeholder="Cari Siswa" class="mt-3.5 mb-2 intro-x"/>
            <div class="grid grid-cols-11 gap-2 mt-4">
                <div class="col-span-11 md:col-span-5 intro-y">
                    <div class="p-3 box">
                        <p class="mb-2 text-sm text-gray-600">Semua Siswa</p>
                        <ul id="fromSiswa" class="h-64 px-2 py-3 overflow-y-auto box">
                            <li class="p-2 mb-2 text-sm font-medium text-gray-700 duration-300 cursor-pointer box hover:bg-primary-1 hover:text-white transition-color bg-slate-200">Anang Egga Ursula Hude</li>
                            <li class="p-2 mb-2 text-sm font-medium text-gray-700 duration-300 cursor-pointer box hover:bg-primary-1 hover:text-white transition-color bg-slate-200">Intan Priska Kurnia Selly</li>
                            <li class="p-2 mb-2 text-sm font-medium text-gray-700 duration-300 cursor-pointer box hover:bg-primary-1 hover:text-white transition-color bg-slate-200">Naomi Ursula Delisha</li>

                    </div>
                </div>
                <div class="flex items-center justify-center h-full col-span-11 text-base text-gray-800 md:col-span-1 intro-y">
                    <i class="rotate-90 md:rotate-0 bi bi-arrow-left-right"></i>
                </div>
                <div class="col-span-11 md:col-span-5 intro-y">
                    <div class="p-3 box">
                        <p class="mb-2 text-sm text-gray-600">Jumlah Siswa <span id="totalItems" class="font-bold"></span></p>
                        <ul id="toClass" class="h-64 px-2 py-3 overflow-y-auto box">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


@section('scripts')

<script>
    $('#search').on('keyup', function() {
    var searchText = $(this).val().toLowerCase(); // Ambil teks pencarian dan ubah ke huruf kecil

        // Saring item pada #from
        $('#fromSiswa li').each(function() {
            var text = $(this).text().toLowerCase(); // Ambil teks dari setiap item dan ubah ke huruf kecil
            var match = text.includes(searchText); // Periksa apakah teks pencarian cocok dengan teks item
            $(this).toggle(match); // Tampilkan atau sembunyikan item berdasarkan kecocokan
        });
        $('#toClass li').each(function() {
            var text = $(this).text().toLowerCase(); // Ambil teks dari setiap item dan ubah ke huruf kecil
            var match = text.includes(searchText); // Periksa apakah teks pencarian cocok dengan teks item
            $(this).toggle(match); // Tampilkan atau sembunyikan item berdasarkan kecocokan
        });
    });
  // Event handler untuk saat <li> di dalam #from diklik
  $('#fromSiswa').on('click', 'li', function() {
    // Pindahkan item ke #to
    console.log(this);
    $(this).appendTo('#toClass');
    updateTotalItems();
  });

  // Event handler untuk saat <li> di dalam #to diklik
  $('#toClass').on('click', 'li', function() {
    // Pindahkan item ke #from
    $(this).appendTo('#fromSiswa');
    updateTotalItems();
  });
  function updateTotalItems() {
    var totalItems = $('#toClass li').length;
    $('#totalItems').text(totalItems);
  }
  updateTotalItems();
</script>

@endsection
