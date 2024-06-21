@extends('layouts.app')

@section('content')
<div class="my-2">
    <div class="flex items-center justify-between intro-y">
        <x-title class="mb-0">{{ $title }}</x-title>

    </div>
    <div class="flex flex-col justify-between sm:flex-row">
       <div class="w-full sm:w-64 intro-y">
            <x-forms.label for="kelas">Kelas</x-forms.label>
            <x-forms.select name="kelas" id="kelas">
                    <option value="" selected>Pilih Kelas</option>
                    <option value="P1">P1</option>
                    <option value="P2">P2</option>
                    <option value="P3">P3</option>
            </x-forms.select>
       </div>
        <div class="w-full mt-4 sm:mt-0 sm:w-80 intro-y">
            <x-forms.label>Gabungkan siswa ke ruang dan kelas</x-forms.label>
            <div class="flex w-full gap-4">
                <x-forms.select name="ruang" id="ruang">
                    <option value="" selected>Pilih Ruang</option>
                    <option value="R1">Ruang 1</option>
                    <option value="R2">Ruang 2</option>
                    <option value="R3">Ruang 3</option>
            </x-forms.select>
            <x-forms.select name="sesi" id="sesi">
                <option value="" selected>Pilih Sesi</option>
                <option value="S1">Sesi 1</option>
                <option value="S2">Sesi 2</option>
                <option value="S3">Sesi 3</option>
            </x-forms.select>
            </div>
        </div>
    </div>
        <div class="">
            <div class="relative overflow-x-auto no-scrollbar">
                <x-table>
                  <x-table.thead class="intro-y">
                    <tr>
                      <x-table.th>
                        NO
                      </x-table.th>
                      <x-table.th class="text-center">
                        NAMA SISWA
                      </x-table.th>
                      <x-table.th class="text-center">
                        KELAS
                      </x-table.th>
                      <x-table.th class="text-center">
                        RUANG
                      </x-table.th>
                      <x-table.th class="text-center">
                        SESI
                      </x-table.th>
                    </tr>
                  </x-table.thead>
                  <tbody>
                    <x-table.tr class="intro-x">
                      <x-table.td>
                       1
                      </x-table.td>
                      <x-table.td class="text-left text-slate-600">
                        Anang Egga Ursula Huda
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        P1
                      </x-table.td>
                      <x-table.td :divider="true">
                        <x-forms.select name="ruang" id="ruang">
                                <option value="" selected>Pilih Ruang</option>
                                <option value="R1">Ruang 1</option>
                                <option value="R2">Ruang 2</option>
                                <option value="R3">Ruang 3</option>
                        </x-forms.select>
                      </x-table.td>
                      <x-table.td>
                        <x-forms.select name="sesi" id="sesi">
                            <option value="" selected>Pilih Sesi</option>
                            <option value="S1">Sesi 1</option>
                            <option value="S2">Sesi 2</option>
                            <option value="S3">Sesi 3</option>
                        </x-forms.select>
                      </x-table.td>
                    </x-table.tr>
                    <x-table.tr class="intro-x">
                      <x-table.td>
                        2
                      </x-table.td>
                      <x-table.td class="text-left text-slate-600">
                        Naomi Ursula Delisha
                      </x-table.td>
                      <x-table.td class="text-center text-slate-600">
                        P1
                      </x-table.td>
                      <x-table.td :divider="true">
                        <x-forms.select name="ruang" id="ruang">
                                <option value="" selected>Pilih Ruang</option>
                                <option value="R1">Ruang 1</option>
                                <option value="R2">Ruang 2</option>
                                <option value="R3">Ruang 3</option>
                        </x-forms.select>
                      </x-table.td>
                      <x-table.td>
                        <x-forms.select name="sesi" id="sesi">
                            <option value="" selected>Pilih Sesi</option>
                            <option value="S1">Sesi 1</option>
                            <option value="S2">Sesi 2</option>
                            <option value="S3">Sesi 3</option>
                        </x-forms.select>
                      </x-table.td>
                    </x-table.tr>
                    </tbody>
                </x-table>
            </div>
            <div class="flex justify-end w-full mt-2">
                <x-button-primary class="px-3 py-2 text-lg"> <i class="bi bi-floppy-fill me-1"></i> SIMPAN</x-button-primary>
            </div>
        </div>
</div>

{{-- END MODAL FORM --}}
@endsection
