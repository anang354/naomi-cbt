@extends('layouts.app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@vite(['resources/css/select2.css'])
@endsection
@section('content')
<div class="my-2">
    <div class="flex items-center justify-between intro-y">
        <x-title class="mb-0">{{ $title }}</x-title>
    </div>

    <div class="mt-4 p-4 box intro-y">
        <div class="p-3">
            <div class="flex justify-between items-center">
                <h3 class="text-base font-medium text-gray-700">Edit Anang Egga Ursula Huda</h3>
                <div class="flex gap-2">
                    <x-button-primary class="px-3 py-2 text-sm">
                        <i class="bi bi-floppy-fill me-1"></i>
                        Simpan
                    </x-button-primary>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6">
                    <div class="p-4 box intro-y mt-4 ">
                        <h4 class="pt-2 pb-4 text-sm text-gray-600 border-b border-gray-200">
                            <i class="text-xs bi bi-chevron-down me-1"></i>
                            Mengajar
                        </h4>
                        <div class="my-3">
                            <x-forms.label for="select-mapel">Mata Pelajaran</x-forms.label>
                            <x-forms.select name="mapel[]" multiple="multiple" class="input-select2" id="select-mapel">
                                <option value="" selected>Bahasa Indonesia</option>
                                <option value="">Bahasa Inggris</option>
                                <option value="">Bahasa Mandarin</option>
                            </x-forms.select>
                        </div>
                    </div>
                    <div class="p-4 box intro-y mt-4 ">
                        <h4 class="pt-2 pb-4 text-sm text-gray-600 border-b border-gray-200">
                            <i class="text-xs bi bi-chevron-down me-1"></i>
                            Jabatan
                        </h4>
                        <div class="my-3">
                            <x-forms.label for="jabatan">Jabatan</x-forms.label>
                            <x-forms.select class="input-select2"  name="jabatan" id="jabatan" class="p-4">
                                <option value="" selected>Kepala Sekolah</option>
                                <option value="">Wakil Kepala Sekolah</option>
                                <option value="">Staff</option>
                                <option value="">Guru</option>
                            </x-forms.select>
                        </div>
                    </div>
                </div>
                
                <div class="p-4 box intro-y mt-4 col-span-6">
                    <h4 class="pt-2 pb-4 text-sm text-gray-600 border-b border-gray-200">
                        <i class="text-xs bi bi-chevron-down me-1"></i>
                        Tentukan Kelas Mapel
                    </h4>
                    <div id="tagetKelas">
                        <div class="my-3">
                            <x-forms.label for="jabatan">Bahasa Indonesia</x-forms.label>
                            <x-forms.select name="mapel[]" multiple="multiple" class="input-select2 multiple-target-class">
                                <option value="" selected>P1</option>
                                <option value="">P2</option>
                                <option value="">P3</option>
                            </x-forms.select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#select-mapel').select2();
        $('#jabatan').select2();
        $('.multiple-target-class').select2();
        
    });
</script>
@endsection

