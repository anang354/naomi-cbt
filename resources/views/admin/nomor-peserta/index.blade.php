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
            <x-button-primary onclick="openModal(true)" class="px-3 py-2 text-sm">
                <i class="bi bi-floppy-fill me-1"></i>
                SIMPAN
            </x-button-primary>
        </div>
    </div>
    <div class="flex w-full gap-4 mt-2">
        <div class="w-1/2">
            <x-forms.label for="kelas" class="font-extrabold">Pilih Kelas</x-forms.label>
            <x-forms.select name="mapel[]" multiple="multiple" class="input-select2 multiple-target-class">
                <option value="" selected>P1</option>
                <option value="">P2</option>
                <option value="">P3</option>
                <option value="">P4</option>
            </x-forms.select>
        </div>
        <div>
            <x-forms.label for="kelas" class="font-extrabold">Aksi kelas terpilih</x-forms.label>
            <div class="flex gap-3">
                <x-button-primary class="px-3 py-2">Buat Nomor Otomatis</x-button-primary>
                <x-button-secondary class="px-3 py-2 !bg-red-500 hover:!opacity-90 !text-white">Hapus Nomor Peserta</x-button-secondary>
            </div>
        </div>
    </div>

        <div class="mt-8 box">

          <div class="relative overflow-x-auto no-scrollbar sm:rounded-lg">
            <x-table-stripped>
                <x-table-stripped.thead>
                    <tr>
                        <x-table-stripped.th>
                          NO
                        </x-table-stripped.th>
                        <x-table-stripped.th class="!text-left">
                            NAMA
                        </x-table-stripped.th>
                        <x-table-stripped.th>
                            KELAS
                        </x-table-stripped.th>
                        <x-table-stripped.th>
                            NO PESERTA
                        </x-table-stripped.th>
                    </tr>
                </x-table-stripped.thead>
                <tbody>
                  <x-table-stripped.tr>
                      <x-table-stripped.td>
                        1
                      </x-table-stripped.td>
                      <x-table-stripped.th class="font-medium text-gray-700 whitespace-nowrap !text-left">
                          Anang Egga Ursula huda
                      </x-table-stripped.th>
                      <x-table-stripped.td>
                          P1
                      </x-table-stripped.td>
                      <x-table-stripped.td contenteditable="true">
                          345.354.121
                      </x-table-stripped.td>
                  </x-table-stripped.tr>
                  <x-table-stripped.tr>
                      <x-table-stripped.td>
                        2
                      </x-table-stripped.td>
                      <x-table-stripped.th class="font-medium text-gray-700 whitespace-nowrap !text-left">
                          Intan Priska Kurnia Selly
                      </x-table-stripped.th>
                      <x-table-stripped.td>
                          P1
                      </x-table-stripped.td>
                      <x-table-stripped.td contenteditable="true">
                          345.354.122
                      </x-table-stripped.td>
                  </x-table-stripped.tr>
                  <x-table-stripped.tr>
                      <x-table-stripped.td>
                        3
                      </x-table-stripped.td>
                      <x-table-stripped.th class="font-medium text-gray-700 whitespace-nowrap !text-left">
                          Naomi Ursula Delisha
                      </x-table-stripped.th>
                      <x-table-stripped.td>
                          P1
                      </x-table-stripped.td>
                      <x-table-stripped.td contenteditable="true">
                          345.354.123
                      </x-table-stripped.td>
                  </x-table-stripped.tr>
                </tbody>
            </x-table-stripped>
          </div>

        </div>
</div>

{{-- MODAL FORM --}}
<x-modal-form title="Tambah Jenis Ujian" size="medium">
    <form action="">
        <x-modal-form.body>
            <div class="mb-5">
                <x-forms.label>
                    Sesi
                </x-forms.label>
                <x-forms.input name="name" type="text" placeholder="Jenis Ujian" required/>
            </div>
            <div class="mb-5">
                <x-forms.label>
                    Kode
                </x-forms.label>
                <x-forms.input name="kode" type="text" placeholder="Kode Jenis" required/>
            </div>
            <div class="mb-5">
                <x-forms.label>Waktu Mulai</x-forms.label>
                <x-forms.input name="start" type="time" required/>
            </div>
            <div class="mb-5">
                <x-forms.label>Waktu Selesai</x-forms.label>
                <x-forms.input name="end" type="time" required/>
            </div>
        </x-modal-form.body>
    </form>
</x-modal-form>
{{-- END MODAL FORM --}}
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.multiple-target-class').select2();
    });
</script>
@endsection
