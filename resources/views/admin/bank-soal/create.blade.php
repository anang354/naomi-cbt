@extends('layouts.app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@vite(['resources/css/select2.css'])
@endsection
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
                    <x-forms.label for="kode">Kode Bank Soal</x-forms.label>
                    <x-forms.input name="kode" id="kode" type="text" />
                </div>
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="mapel">Mata Pelajaran</x-forms.label>
                    <x-forms.select class="multiple-target-class w-full" id="mapel">
                        <option value="mtk">Matematika</option>
                        <option value="pkn">Pendidikan Kewarganegaraan</option>
                        <option value="ips">Ilmu Pengetahuan Sosial</option>
                    </x-forms.select>
                </div>
                <div class="col-span-12 mb-3 md:col-span-5 intro-x">
                    <x-forms.label for="guru">Guru Pengampu</x-forms.label>
                    <x-forms.select class="multiple-target-class w-full" id="mapel">
                        <option value="mtk">Anang Egga Ursula huda</option>
                        <option value="pkn">Intan Priska Kurnia Selly</option>
                        <option value="ips">Naomi Ursula Delisha</option>
                    </x-forms.select>
                </div>
                <div class="col-span-4 mb-3 md:col-span-2 intro-x">
                    <x-forms.label for="kelas">Kelas</x-forms.label>
                    <x-forms.select id="kelas" name="kelas">
                        @for ($i = 1; $i < 13; $i++)
                            <option value="{{$i}}">{{ $i }}</option>
                        @endfor
                    </x-forms.select>
                </div>
                <div class="col-span-8 mb-3 md:col-span-5 intro-x">
                    <x-forms.label for="rombel">Rombel Kelas</x-forms.label>
                    <x-forms.select name="rombel[]" multiple="multiple" class="input-select2 multiple-target-class">
                        <option value="">P1</option>
                        <option value="">P2</option>
                        <option value="">P3</option>
                    </x-forms.select>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center gap-2 p-3 my-3 box bg-primary-1">
        <p class="text-xs text-white xl:text-sm"><b>Catatan!</b> pastikan total bobot jangan sampai 0 agar tidak mempengaruhi nilai hasil</p>
    </div>
    <div class="grid grid-cols-12 gap-2 mt-4">
        <x-box class="col-span-12 p-4 md:col-span-6 bg-sky-200/50 intro-y">
            <div class="border-b border-sky-300/50">
                <h4 class="pt-2 pb-4 text-sm font-bold text-gray-600">
                    <i class="text-xs bi bi-chevron-down me-1"></i>
                    Soal Pilihan Ganda
                </h4>
            </div>

            <div class="w-full mt-2 grid grid-cols-12 gap-2 pb-4">
                <div class="col-span-4">
                    <x-forms.label for="kode">Jumlah Soal</x-forms.label>
                    <x-forms.input name="kode" id="kode" type="text" value="0"/>
                </div>
                <div class="col-span-4">
                    <x-forms.label for="kode">Bobot %</x-forms.label>
                    <x-forms.input name="kode" id="kode" type="text" value="0"/>
                </div>
                <div class="col-span-4">
                    <x-forms.label for="kode">Opsi Jawaban</x-forms.label>
                    <x-forms.select>
                        <option value="">A, B, C</option>
                        <option value="">A, B, C, D</option>
                        <option value="">A, B, C, D, E</option>
                    </x-forms.select>
                </div>
            </div>

        </x-box>
        <x-box class="col-span-12 p-4 md:col-span-6 bg-yellow-100 intro-y">
            <div class="border-b border-yellow-300/50">
                <h4 class="pt-2 pb-4 text-sm font-bold text-gray-600">
                    <i class="text-xs bi bi-chevron-down me-1"></i>
                    Soal Ganda Kompleks
                </h4>
            </div>

            <div class="w-full mt-2 grid grid-cols-12 gap-2 pb-4">
                <div class="col-span-6">
                    <x-forms.label for="kode">Jumlah Soal</x-forms.label>
                    <x-forms.input name="kode" id="kode" type="text" />
                </div>
                <div class="col-span-6">
                    <x-forms.label for="kode">Bobot %</x-forms.label>
                    <x-forms.input name="kode" id="kode" type="text" />
                </div>
            </div>

        </x-box>
        <x-box class="col-span-12 p-4 md:col-span-4 bg-pink-200/50 intro-y">
            <div class="border-b border-pink-300/50">
                <h4 class="pt-2 pb-4 text-sm font-bold text-gray-600">
                    <i class="text-xs bi bi-chevron-down me-1"></i>
                    Soal Menjodohkan
                </h4>
            </div>

            <div class="w-full mt-2 grid grid-cols-12 gap-2 pb-4">
                <div class="col-span-6">
                    <x-forms.label for="kode">Jumlah Soal</x-forms.label>
                    <x-forms.input name="kode" id="kode" type="text" value="0"/>
                </div>
                <div class="col-span-6">
                    <x-forms.label for="kode">Bobot %</x-forms.label>
                    <x-forms.input name="kode" id="kode" type="text" value="0"/>
                </div>
            </div>

        </x-box>
        <x-box class="col-span-12 p-4 md:col-span-4 bg-green-200/50 intro-y">
            <div class="border-b border-green-300/50">
                <h4 class="pt-2 pb-4 text-sm font-bold text-gray-600">
                    <i class="text-xs bi bi-chevron-down me-1"></i>
                    Soal Isian Singkat
                </h4>
            </div>

            <div class="w-full mt-2 grid grid-cols-12 gap-2 pb-4">
                <div class="col-span-6">
                    <x-forms.label for="kode">Jumlah Soal</x-forms.label>
                    <x-forms.input name="kode" id="kode" type="text" value="0"/>
                </div>
                <div class="col-span-6">
                    <x-forms.label for="kode">Bobot %</x-forms.label>
                    <x-forms.input name="kode" id="kode" type="text" value="0" />
                </div>
            </div>
        </x-box>
        <x-box class="col-span-12 p-4 md:col-span-4 bg-slate-200/50 intro-y">
            <div class="border-b border-slate-300/50">
                <h4 class="pt-2 pb-4 text-sm font-bold text-gray-600">
                    <i class="text-xs bi bi-chevron-down me-1"></i>
                    Soal Uraian / Essay
                </h4>
            </div>

            <div class="w-full mt-2 grid grid-cols-12 gap-2 pb-4">
                <div class="col-span-6">
                    <x-forms.label for="kode">Jumlah Soal</x-forms.label>
                    <x-forms.input name="kode" id="kode" type="text" value="0"/>
                </div>
                <div class="col-span-6">
                    <x-forms.label for="kode">Bobot %</x-forms.label>
                    <x-forms.input name="kode" id="kode" type="text" value="0" />
                </div>
            </div>
        </x-box>
        <x-box class="col-span-12 p-4 md:col-span-6 !bg-primary-1 !text-white intro-y">
            <div class="flex w-full pt-4 pb-4 gap-8 justify-around items-center">
                <div class="text-center font-bold">
                    <h2 class="text-xl mb-4">
                        Total Soal
                    </h2>
                    <p class="text-xl">0</p>
                </div>
                <div class="text-center font-bold">
                    <h2 class="text-xl mb-4">
                        Total Bobot
                    </h2>
                    <p class="text-xl">0</p>
                </div>
            </div>
        </x-box>
        <div class="col-span-12 px-4 md:col-span-6 intro-y">
            <div class="mb-4">
                <x-forms.label>Mapel Agama</x-forms.label>
                <x-forms.select>
                    <option value="0">Bukan Mapel Agama</option>
                    <option value="1">Mapel Agama</option>
                </x-forms.select>
            </div>
            <div class="mb-4">
                <x-forms.label>Status Bank Soal</x-forms.label>
                <x-forms.select>
                    <option value="1">Aktif</option>
                    <option value="0">Nonaktif</option>
                </x-forms.select>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.multiple-target-class').select2();
        
    });
</script>
@endsection