@extends('layouts.app')

@section('content')
<div class="my-2">
    <div class="flex items-center justify-between intro-y">
        <x-title class="mb-0">{{ $title }}</x-title>
        <div class="flex gap-2">
            <a href="{{route('ujianbanksoal.create-soal')}}" class="bg-primary-1 transition ease-in-out rounded-lg shadow text-white px-3 py-2 text-sm hover:opacity-90">
                <i class="bi bi-plus-lg me-1"></i>
                Tambah/Edit Soal
            </a>
            <x-button-secondary class="px-3 !bg-green-500 !border-green-600 !text-white py-2 text-sm" id="dropdownDefaultButton" data-dropdown-toggle="download">
                <i class="bi bi-cloud-download me-1"></i>
                Download Soal
            </x-button-secondary>
            <!-- Dropdown menu -->
            <div id="download" class="z-10 hidden relative">
                <ul class="py-2 text-sm text-gray-700 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 intro-y" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="flex px-4 py-2 hover:bg-gray-100">
                        <i class="bi bi-printer-fill me-2"></i>
                            Print Template</a>
                    </li>
                    <li>
                        <a href="#" class="flex px-4 py-2 hover:bg-gray-100">
                        <i class="bi bi-box-arrow-up-right me-2"></i>
                            Import Template</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <x-box class="mt-4 intro-y">
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-9 p-4">
                <div class="grid grid-cols-12 gap-2">
                    <div class="col-span-6 md:col-span-3">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Kode Bank Soal</p>
                        <p class="text-xs lg:text-sm text-gray-700 mb-5 font-bold">STSIPAS01</p>
                    </div>
                    <div class="col-span-6 md:col-span-3">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Mata Pelajaran</p>
                        <p class="text-xs lg:text-sm text-gray-700 mb-5 font-bold">Ilmu Pengetahuan Alam</p>
                    </div>
                    <div class="col-span-8 md:col-span-4">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Guru</p>
                        <p class="text-xs lg:text-sm text-gray-700 mb-5 font-bold">Anang Egga Ursula Huda, S.Kom</p>
                    </div>
                    <div class="col-span-4 md:col-span-2">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Kelas</p>
                        <p class="text-xs lg:text-sm text-gray-700 mb-5 font-bold">P1</p>
                    </div>
                    <div class="col-span-12 border-b border-gray-200 mb-4"></div>
                    <div class="col-span-6 md:col-span-3">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Total Seharusnya</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">35</p>
                    </div>
                    <div class="col-span-6 md:col-span-3">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Total Dibuat</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">35</p>
                    </div>
                    <div class="col-span-6 md:col-span-4">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Total Ditampilkan</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">35</p>
                    </div>
                    <div class="col-span-6 md:col-span-2">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Status</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">Selesai</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-3">
                <div class="bg-green-500 w-full h-full p-4 md:p-0 rounded-lg flex flex-col justify-center items-center text-white text-center">
                    <p class="text-base font-semibold">Pembuatan Soal</p>
                    <h3 class="text-2xl font-bold">SELESAI</h3>
                    <p class="text-sm">soal sudah siap digunakan</p>
                </div>
            </div>
        </div>
    </x-box>
    <div class="flex items-center gap-2 p-3 box bg-primary-1 intro-y">
        <p class="text-xs text-white xl:text-sm"><b>Catatan!</b> pastikan total bobot jangan sampai 0 agar tidak mempengaruhi nilai hasil</p>
    </div>

    
    <div class="mt-4 box intro-y">
        <div class="grid grid-cols-12 gap-2 p-6 border-b border-gray-200/60">
            <div data-content="PG" class="col-span-12 tab-content">
                <p class="mb-4 font-semibold">Pilihan Ganda</p>
                <div class="flex gap-8">
                    <div class="mb-2">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Total Seharusnya</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">15</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Total Dibuat</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">25</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Total Ditampilkan</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">15</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Bobot Nilai</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">40</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Point Per-nomor</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">2</p>
                    </div>
                </div>
            </div>
            <div data-content="PGK" class="hidden col-span-12 tab-content">
                <p class="mb-4 font-semibold">Pilihan Ganda Kompleks</p>
                <div class="flex gap-8">
                    <div class="mb-2">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Total Seharusnya</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">35</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Total Dibuat</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">35</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Total Ditampilkan</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">35</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Bobot Nilai</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">40</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-xs lg:text-sm text-gray-500 mb-2">Point Per-nomor</p>
                        <p class="text-xs lg:text-sm text-gray-700 font-bold">2</p>
                    </div>
                </div>
            </div>
            <div data-content="JD" class="hidden col-span-12 tab-content">
                <p class="mb-4 font-semibold">Menjodohkan</p>
            </div>
        </div>
        <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
            <ul id="tab" class="flex flex-wrap -mb-px ms-4">
                <li class="me-2" data-target="PG" >
                    <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600 active-tab">Pilihan Ganda <i class="bi bi-check-circle-fill ms-2"></i></a>
                </li>
                <li class="me-2" data-target="PGK">
                    <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600" aria-current="page">Ganda Kompleks <i class="bi text-red-500 bi-exclamation-circle-fill ms-2"></i></a>
                </li>
                <li class="me-2" data-target="JD">
                    <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600" aria-current="page">Menjodohkan <i class="bi text-red-500 bi-exclamation-circle-fill ms-2"></i></a>
                </li>
                <li class="me-2" data-target="IS">
                    <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600" aria-current="page">Isian Singkat <i class="bi text-red-500 bi-exclamation-circle-fill ms-2"></i></a>
                </li>
                <li class="me-2" data-target="ES">
                    <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600" aria-current="page">Essai/Uraian <i class="bi text-green-500 bi-check-circle-fill ms-2"></i></a>
                </li>
            </ul>
        </div>
    </div>
    {{-- TAB PANE SOAL --}}
    <div class="mt-4" id="tabPane">
        <div data-content="PG" class="p-4 box intro-y tab-content">
            <div class="flex justify-between items-center pt-2 pb-4 text-sm text-gray-600 border-b border-gray-200">
                <div class="flex gap-3 item-center">
                    <div class="w-7 h-7 relative checkSoalAll" data-content="check-pg">
                        <input type="checkbox" class="hidden peer">
                        <label class="w-7 h-7 absolute border cursor-pointer border-gray-300 rounded peer-checked:bg-purple-500 "></label>
                        <i class="absolute left-1 text-white text-xl cursor-pointer bi bi-check-all hidden peer-checked:block"></i>
                    </div>
                    <p class="text-base font-semibold">Pilih Semua</p>
                </div>
                <div class="flex gap-4 items-center">
                    <p class="font-bold">Pilihan Ganda Terpilih: 10</p>
                    <x-button-primary class="px-2.5 py-2 flex gap-1">
                        <i class="bi bi-floppy2 md:me-2 me-0"></i>
                        <span class="hidden md:block">Simpan Soal Terpilih</span></x-button-primary>
                </div>
            </div>
            @for ($i = 1; $i < 6; $i++)
            <div class="my-2 border-b-8 border-primary-1 pt-2 pb-4 grid grid-cols-12 gap-2">
                <div class="col-span-12 md:col-span-1 flex flex-col md:flex-row items-start justify-between">
                    <div class="flex flex-row md:flex-col gap-4 justify-between w-full">
                        <label class="checkboxes">
                            <input type="checkbox" class="x-check-pg">
                            <span class="checkmark"></span>
                        </label>
                        <div>
                            <x-button-secondary class="py-1 px-2 !bg-orange-400 !border-orange-500 !text-white hover:opacity-90 mb-2 mr-2 md:mr-0"><i class="bi bi-pencil"></i></x-button-secondary>
                            <x-button-secondary class="py-1 px-2 !bg-gray-100 !border-gray-200 !text-red-600 hover:opacity-90"><i class="bi bi-trash-fill"></i></x-button-secondary>    
                        </div>
                    </div>
                    <p class="font-semibold">{{$i}}.</p>
                </div>
                <div class="col-span-12 md:col-span-11">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aut similique necessitatibus omnis ad temporibus soluta fugiat obcaecati cum quas?</p>
                    <ul class="mt-2">
                        <li>A. Ayah</li>
                        <li>B. Ibu</li>
                        <li>C. Adik</li>
                        <li>D. Kakak</li>
                    </ul>
                    <p class="mt-2">Jawaban : <span class="font-bold">B</span></p>
                </div>
            </div>
            @endfor
        </div>
        <div data-content="PGK" class="hidden p-4 box intro-y tab-content">
            <div class="flex justify-between items-center pt-2 pb-4 text-sm text-gray-600 border-b border-gray-200">
                <div class="flex gap-3 item-center">
                    <div class="w-7 h-7 relative checkSoalAll" data-content="check-pgk">
                        <input type="checkbox" class="hidden peer">
                        <label class="w-7 h-7 absolute border cursor-pointer border-gray-300 rounded peer-checked:bg-purple-500 "></label>
                        <i class="absolute left-1 text-white text-xl cursor-pointer bi bi-check-all hidden peer-checked:block"></i>
                    </div>
                    <p class="text-base font-semibold">Pilih Semua</p>
                </div>
                <div class="flex gap-4 items-center">
                    <p class="font-bold">Ganda Kompleks Terpilih: 5</p>
                    <x-button-primary class="px-2.5 py-2 flex gap-1">
                        <i class="bi bi-floppy2 md:me-2 me-0"></i>
                        <span class="hidden md:block">Simpan Soal Terpilih</span></x-button-primary>
                </div>
            </div>
            @for ($i = 1; $i < 6; $i++)
            <div class="my-2 border-b-8 border-primary-1 pt-2 pb-4 grid grid-cols-12 gap-2">
                <div class="col-span-12 md:col-span-1 flex flex-col md:flex-row items-start justify-between">
                    <div class="flex flex-row md:flex-col gap-4 justify-between w-full">
                        <label class="checkboxes">
                            <input type="checkbox" class="x-check-pgk">
                            <span class="checkmark"></span>
                        </label>
                        <div>
                            <x-button-secondary class="py-1 px-2 !bg-orange-400 !border-orange-500 !text-white hover:opacity-90 mb-2 mr-2 md:mr-0"><i class="bi bi-pencil"></i></x-button-secondary>
                            <x-button-secondary class="py-1 px-2 !bg-gray-100 !border-gray-200 !text-red-600 hover:opacity-90"><i class="bi bi-trash-fill"></i></x-button-secondary>    
                        </div>
                    </div>
                    <p class="font-semibold">{{$i}}.</p>
                </div>
                <div class="col-span-12 md:col-span-11">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aut similique necessitatibus omnis ad temporibus soluta fugiat obcaecati cum quas?</p>
                    <ul class="mt-2">
                        <li>A. Ayah</li>
                        <li>B. Ibu</li>
                        <li>C. Adik</li>
                        <li>D. Kakak</li>
                    </ul>
                    <p class="mt-2">Jawaban : <span class="font-bold">B</span></p>
                </div>
            </div>
            @endfor
        </div>
    </div>
    {{-- END OF TAB PANE SOAL --}}
</div>


@endsection
@section('scripts')
<script>
        $(document).ready(function() {
        $('#tab li').on('click', function(e) {
            e.preventDefault();
            if(!$(this).find('a').hasClass('active-tab')) {
                $('#tab li a').removeClass('active-tab');
                $(this).find('a').addClass('active-tab');
            }
            let linkTab = $(this).attr('data-target');
            $('.tab-content').hide();
            $(`[data-content=${linkTab}]`).toggle();
        });
        $('.checkSoalAll').click(function() {
            let content = $(this).attr('data-content');
            $(this).find('input:checkbox').prop('checked', !$(this).find('input:checkbox').prop('checked'));
            if(!$(this).find('input:checkbox').prop('checked')) {
                $(`.x-${content}`).prop('checked', false);
            }else{
                $(`.x-${content}`).prop('checked', true);
            }
        });
    });
</script>
@endsection
