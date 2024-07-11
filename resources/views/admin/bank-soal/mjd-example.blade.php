@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('plugins/fields-linker/fieldsLinker.css') }}">
@endsection

@section('content')

<div class="my-3">
	<p class="text-base font-bold my-2">Jawaban</p>
	<div class="flex gap-6 items-center mb-4">
		<div>
			<div class="font-semibold my-2 text-sm">Tampilan:</div>
			<div class="my-1 flex gap-2">
				<div class="flex items-center px-2 border border-gray-200 rounded list-peer">
					<input checked id="table-link" type="radio" value="table" name="tampilanMode" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
					<label for="table-link" class="w-full cursor-pointer py-3 ms-2 text-sm font-medium text-gray-900">Tabel</label>
				</div>
				<div class="flex items-center px-2 border border-gray-200 rounded list-peer">
					<input id="list-link" type="radio" value="list" name="tampilanMode" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
					<label for="list-link" class="w-full cursor-pointer py-3 ms-2 text-sm font-medium text-gray-900">List</label>
				</div>
			</div>
		</div>
		<div>
			<div class="font-semibold my-2 text-sm">Type:</div>
			<div class="my-1 flex gap-2">
				<div class="flex items-center px-2 border border-gray-200 rounded list-peer">
					<input id="onetoone" type="radio" value="oneToOne" name="associationMode" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
					<label for="onetoone" class="w-full cursor-pointer py-3 ms-2 text-sm font-medium text-gray-900">1 baris 1 jawaban</label>
				</div>
				<div class="flex items-center px-2 border border-gray-200 rounded list-peer">
					<input checked id="onetomany" type="radio" value="manyToMany" name="associationMode" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
					<label for="onetomany" class="w-full cursor-pointer py-3 ms-2 text-sm font-medium text-gray-900">1 baris banyak jawaban</label>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="jd-table">

	  <div class="bonds" id="original">
	
	  </div>
	  <div class="tables-jd" id="table-ori">
			<x-button-primary class="px-2.5 py-2 mb-3 float-right" onclick="addColumn()">Tambah Kolom</x-button-primary>
			<table class="w-full">
				<tbody id="editable-jd" class="border border-gray-700">
					
				</tbody>
			</table>
			<x-button-primary class="px-2.5 py-2 mt-3" onclick="addRow()">Tambah Baris</x-button-primary>
	  </div>
</div>
 @endsection
 @section('scripts') 
	<script src="{{ asset('plugins/fields-linker/fieldsLinker.js') }}"></script>
	<script src="{{ asset('assets/js/banksoal.js') }}"></script>

@endsection