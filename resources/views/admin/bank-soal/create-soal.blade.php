@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('plugins/fields-linker/fieldsLinker.css') }}">
@endsection
@section('content')
<div class="my-2">
    <div class="flex items-center justify-between intro-y">
        <x-title class="mb-0">{{ $title }}</x-title>
    </div>
    
    <div class="mt-4 box intro-y">
        <div class="bg-primary-1 text-white rounded-t  p-6 border-b border-gray-200/60">
            <h3 class="text-base">
                <span class="font-bold">Bank Soal : </span>
                STSIPA06
            </h3>
        </div>
        <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
            <ul id="tab" class="flex flex-wrap -mb-px ms-4">
                <li class="me-2" data-target="PG" >
                    <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600 active-tab">Pilihan Ganda</a>
                </li>
                <li class="me-2" data-target="PGK">
                    <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600" aria-current="page">Ganda Kompleks</a>
                </li>
                <li class="me-2" data-target="JD">
                    <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600" aria-current="page">Menjodohkan</a>
                </li>
                <li class="me-2" data-target="IS">
                    <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600" aria-current="page">Isian Singkat</a>
                </li>
                <li class="me-2" data-target="ES">
                    <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600" aria-current="page">Essai/Uraian</a>
                </li>
            </ul>
        </div>
        <div class="w-full p-4">
            <div id="tabPane">
                <div class="tab-content" data-content="PG">
                    <div class="flex items-center gap-2 p-3 box bg-primary-1">
                        <p class="text-xs text-white xl:text-sm"><b>Pilihan Ganda:</b> Jumlah soal seharusnya <b>10</b></p>
                    </div>
                    <div class="mt-4">
                        <p class="font-bold text-base">SOAL NOMOR</p>
                    </div>
                    <div class="mt-3 flex gap-2 w-full items-center">
                        <ul class="flex gap-2 items-center">
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-primary-1 font-bold border border-primary-1">1</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-primary-1 font-bold border border-primary-1">2</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-white bg-primary-1 font-bold border border-primary-1">3</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-white border-red-600 font-bold border bg-red-500">4</a>
                            </li>
                        </ul>
                        <button class="h-8 px-2 flex gap-1 items-center text-sm font-semibold text-white bg-green-500 border border-green-600 rounded">
                            <i class="bi bi-plus-lg"></i>
                            <span class="hidden md:block">Add Number</span>
                        </button>
                    </div>
                </div>
                <div class="hidden tab-content" data-content="PGK">
                    <div class="flex items-center gap-2 p-3 box bg-primary-1">
                        <p class="text-xs text-white xl:text-sm"><b>Pilihan Ganda Kompleks:</b> Jumlah soal seharusnya <b>10</b></p>
                    </div>
                    <div class="mt-4">
                        <p class="font-bold text-base">SOAL NOMOR</p>
                    </div>
                    <div class="mt-3 flex gap-2 w-full items-center">
                        <ul class="flex gap-2 items-center">
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-primary-1 font-bold border border-primary-1">1</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-primary-1 font-bold border border-primary-1">2</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-white bg-primary-1 font-bold border border-primary-1">3</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-white border-red-600 font-bold border bg-red-500">4</a>
                            </li>
                        </ul>
                        <button class="h-8 px-2 flex gap-1 items-center text-sm font-semibold text-white bg-green-500 border border-green-600 rounded">
                            <i class="bi bi-plus-lg"></i>
                            <span class="hidden md:block">Add Number</span>
                        </button>
                    </div>
                </div>
                <div class="hidden tab-content" data-content="JD">
                    <div class="flex items-center gap-2 p-3 box bg-primary-1">
                        <p class="text-xs text-white xl:text-sm"><b>Menjodohkan:</b> Jumlah soal seharusnya <b>10</b></p>
                    </div>
                    <div class="mt-4">
                        <p class="font-bold text-base">SOAL NOMOR</p>
                    </div>
                    <div class="mt-3 flex gap-2 w-full items-center">
                        <ul class="flex gap-2 items-center">
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-primary-1 font-bold border border-primary-1">1</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-primary-1 font-bold border border-primary-1">2</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-white bg-primary-1 font-bold border border-primary-1">3</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-white border-red-600 font-bold border bg-red-500">4</a>
                            </li>
                        </ul>
                        <button class="h-8 px-2 flex gap-1 items-center text-sm font-semibold text-white bg-green-500 border border-green-600 rounded">
                            <i class="bi bi-plus-lg"></i>
                            <span class="hidden md:block">Add Number</span>
                        </button>
                    </div>
                </div>
                <div class="hidden tab-content" data-content="IS">
                    <div class="flex items-center gap-2 p-3 box bg-primary-1">
                        <p class="text-xs text-white xl:text-sm"><b>Isian Singkat:</b> Jumlah soal seharusnya <b>10</b></p>
                    </div>
                    <div class="mt-4">
                        <p class="font-bold text-base">SOAL NOMOR</p>
                    </div>
                    <div class="mt-3 flex gap-2 w-full items-center">
                        <ul class="flex gap-2 items-center">
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-primary-1 font-bold border border-primary-1">1</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-primary-1 font-bold border border-primary-1">2</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-white bg-primary-1 font-bold border border-primary-1">3</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-white border-red-600 font-bold border bg-red-500">4</a>
                            </li>
                        </ul>
                        <button class="h-8 px-2 flex gap-1 items-center text-sm font-semibold text-white bg-green-500 border border-green-600 rounded">
                            <i class="bi bi-plus-lg"></i>
                            <span class="hidden md:block">Add Number</span>
                        </button>
                    </div>
                </div>
                <div class="hidden tab-content" data-content="ES">
                    <div class="flex items-center gap-2 p-3 box bg-primary-1">
                        <p class="text-xs text-white xl:text-sm"><b>Essay/Uraian:</b> Jumlah soal seharusnya <b>10</b></p>
                    </div>
                    <div class="mt-4">
                        <p class="font-bold text-base">SOAL NOMOR</p>
                    </div>
                    <div class="mt-3 flex gap-2 w-full items-center">
                        <ul class="flex gap-2 items-center">
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-primary-1 font-bold border border-primary-1">1</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-primary-1 font-bold border border-primary-1">2</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-white bg-primary-1 font-bold border border-primary-1">3</a>
                            </li>
                            <li class="">
                                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-lg text-white border-red-600 font-bold border bg-red-500">4</a>
                            </li>
                        </ul>
                        <button class="h-8 px-2 flex gap-1 items-center text-sm font-semibold text-white bg-green-500 border border-green-600 rounded">
                            <i class="bi bi-plus-lg"></i>
                            <span class="hidden md:block">Add Number</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- TAB CONTENT PILIHAN GANDA --}}
    <div class="mt-4 box tab-content" data-content="PG">
        <div class="flex justify-between p-4 items-center border-b border-gray-600/20">
            <p class="font-semibold">Pilihan Ganda nomor: 3</p>
            <x-button-primary class="py-1.5 px-2.5 !text-base">
                <i class="bi bi-floppy2 me-1 hidden md:inline-block"></i>
                Simpan</x-button-primary>
        </div>
        <div class="p-4 w-full grid grid-cols-12 gap-8">
            <div class="col-span-12 md:col-span-7">
                <p class="text-base font-semibold mb-4">Kolom Soal</p>
                <textarea class="tinyMce" id="editorSoal" cols="30" rows="10"></textarea>
            </div>
            <div class="col-span-12 md:col-span-5">
                <p class="text-base font-semibold mb-4">Jawaban Benar</p>
                <x-forms.select class="mt-2">
                    <option value="" disabled selected>Pilih Jawaban Benar</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </x-forms.select>
                <div class="mt-4">
                    <p class="text-base font-bold my-2">Jawaban A</p>
                    <textarea name="" class="tinyMce editor-jawaban" cols="10" rows="1"></textarea>
                    <p class="text-base font-bold my-2">Jawaban B</p>
                    <textarea name="" class="tinyMce editor-jawaban" cols="10" rows="1"></textarea>
                    <p class="text-base font-bold my-2">Jawaban C</p>
                    <textarea name="" class="tinyMce editor-jawaban" cols="10" rows="1"></textarea>
                    <p class="text-base font-bold my-2">Jawaban D</p>
                    <textarea name="" class="tinyMce editor-jawaban" cols="10" rows="1"></textarea>
                </div>
            </div>
        </div>
    </div>
    {{-- END OF TAB CONTENT PILIHAN GANDA --}}
    {{-- TAB CONTENT MENJODOHKAN --}}
    <div class="hidden mt-4 box tab-content" data-content="JD">
        <div class="flex justify-between p-4 items-center border-b border-gray-600/20">
            <p class="font-semibold">Menjodohkan nomor: 3</p>
            <x-button-primary class="py-1.5 px-2.5 !text-base">
                <i class="bi bi-floppy2 me-1 hidden md:inline-block"></i>
                Simpan</x-button-primary>
        </div>
        <div class="p-4 w-full grid grid-cols-12 gap-8">
            <div class="col-span-12">
                <p class="text-base font-semibold mb-4">Kolom Soal</p>
                <textarea class="tinyMce" id="editorSoal" cols="20" rows="5"></textarea>
            </div>
            <div class="col-span-12">
                <div class="block my-4">
                    
                </div>
                <div class="mt-2">
                    <p class="text-base font-bold my-2">Jawaban</p>
                    <div class="flex gap-6 items-center mb-4">
                        <div>
                            <div class="font-semibold my-2 text-sm">Tampilan:</div>
                            <div class="my-1 flex gap-2">
                                <div class="flex items-center px-2 border border-gray-200 rounded list-peer">
                                    <input id="bordered-radio-1" type="radio" value="table" name="tampilanMode" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                    <label for="bordered-radio-1" class="w-full cursor-pointer py-3 ms-2 text-sm font-medium text-gray-900">Tabel</label>
                                </div>
                                <div class="flex items-center px-2 border border-gray-200 rounded list-peer">
                                    <input checked id="bordered-radio-2" type="radio" value="list" name="tampilanMode" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                    <label for="bordered-radio-2" class="w-full cursor-pointer py-3 ms-2 text-sm font-medium text-gray-900">List</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="font-semibold my-2 text-sm">Type:</div>
                            <div class="my-1 flex gap-2">
                                <div class="flex items-center px-2 border border-gray-200 rounded list-peer">
                                    <input id="bordered-radio-1" type="radio" value="oneToOne" name="associationMode" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                    <label for="bordered-radio-1" class="w-full cursor-pointer py-3 ms-2 text-sm font-medium text-gray-900">1 baris 1 jawaban</label>
                                </div>
                                <div class="flex items-center px-2 border border-gray-200 rounded list-peer">
                                    <input checked id="bordered-radio-2" type="radio" value="manyToMany" name="associationMode" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                    <label for="bordered-radio-2" class="w-full cursor-pointer py-3 ms-2 text-sm font-medium text-gray-900">1 baris banyak jawaban</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="jd-table">

                        <div class="bonds" id="original" style="display:block;">
                      
                        </div>

                        <div class="tables-jd" id="table-ori" style="display: none;"></div>
                  
                        {{-- <hr/>
                        <button type="button" class="btn fieldLinkerSave btn-sm btn-primary">Save links</button>
                        &nbsp;<span id="output"></span>
                        <br /><br />
                        <div id="input"></div> --}}
                  
                  </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END OF TAB CONTENT MENJODOHKAN--}}
    {{-- TAB CONTENT GANDA KOMPLEKS --}}
    <div class="hidden mt-4 box tab-content" data-content="PGK">
        <div class="flex justify-between p-4 items-center border-b border-gray-600/20">
            <p class="font-semibold">Pilihan Ganda Kompleks nomor: 3</p>
            <x-button-primary class="py-1.5 px-2.5 !text-base">
                <i class="bi bi-floppy2 me-1 hidden md:inline-block"></i>
                Simpan</x-button-primary>
        </div>
        <div class="p-4 w-full grid grid-cols-12 gap-8">
            <div class="col-span-12 md:col-span-7">
                <p class="text-base font-semibold mb-4">Kolom Soal</p>
                <textarea class="tinyMce" id="editorSoal" cols="30" rows="10"></textarea>
            </div>
            <div class="col-span-12 md:col-span-5">
                <div id="pgk-jawaban">
                    <div>
                        <div class="my-2 flex justify-between items-center">
                            <div class="flex gap-4 items-center">
                                <x-button-secondary class="px-1.5 py-1 !bg-gray-100 deleteAnswer">
                                    <i class="bi bi-trash-fill"></i>
                                </x-button-secondary>
                                <p class="text-base font-bold">Jawaban A</p>
                            </div>
                            <div class="flex gap-2 items-center">
                                <p class="text-base font-bold">Jawaban Benar</p>
                                <x-forms.checkbox name="checktrue"></x-forms.checkbox>
                            </div>

                        </div>
                        <textarea name="" class="tinyMce editor-jawaban" cols="10" rows="1"></textarea>
                    </div>
                    {{-- <div class="mt-4">
                        <div class="my-2 flex justify-between items-center">
                            <div class="flex gap-4 items-center">
                                <x-button-secondary class="px-1.5 py-1 !bg-gray-100">
                                    <i class="bi bi-trash-fill"></i>
                                </x-button-secondary>
                                <p class="text-base font-bold">Jawaban B</p>
                            </div>
                            <div class="flex gap-2 items-center">
                                <p class="text-base font-bold">Jawaban Benar</p>
                                <x-forms.checkbox></x-forms.checkbox>
                            </div>
    
                        </div>
                        <textarea name="" class="tinyMce editor-jawaban" cols="10" rows="1"></textarea>
                    </div> --}}
                </div>
                <x-button.base class="mt-8 px-2.5 py-2 !text-white bg-green-500 border-green-600" id="addAnswerPgk">Tambah Kolom Jawaban</x-button-secondary>
            </div>
        </div>
    </div>
    {{-- END OF TAB CONTENT GANDA KOMPLEKS --}}
    {{-- TAB CONTENT ISIAN SINGKAT --}}
    <div class="hidden mt-4 box tab-content" data-content="IS">
        <div class="flex justify-between p-4 items-center border-b border-gray-600/20">
            <p class="font-semibold">Isian Singkat nomor: 3</p>
            <x-button-primary class="py-1.5 px-2.5 !text-base">
                <i class="bi bi-floppy2 me-1 hidden md:inline-block"></i>
                Simpan</x-button-primary>
        </div>
        <div class="p-4 w-full grid grid-cols-12 gap-8">
            <div class="col-span-12 md:col-span-7">
                <p class="text-base font-semibold mb-4">Kolom Soal</p>
                <textarea class="tinyMce" id="editorSoal" cols="30" rows="10"></textarea>
            </div>
            <div class="col-span-12 md:col-span-5">
                <div class="mt-2">
                    <p class="text-base font-bold my-2">Jawaban Benar</p>
                    <x-forms.input name="is-answer"/>
                </div>
            </div>
        </div>
    </div>
    {{-- END OF TAB CONTENT ISIAN SINGKAT--}}
    {{-- TAB CONTENT ESSAY --}}
    <div class="hidden mt-4 box tab-content" data-content="ES">
        <div class="flex justify-between p-4 items-center border-b border-gray-600/20">
            <p class="font-semibold">Essay/Uraian nomor: 3</p>
            <x-button-primary class="py-1.5 px-2.5 !text-base">
                <i class="bi bi-floppy2 me-1 hidden md:inline-block"></i>
                Simpan</x-button-primary>
        </div>
        <div class="p-4 w-full grid grid-cols-12 gap-8">
            <div class="col-span-12 lg:col-span-7">
                <p class="text-base font-semibold mb-4">Kolom Soal</p>
                <textarea class="tinyMce" id="editorSoal" cols="30" rows="10"></textarea>
            </div>
            <div class="col-span-12 lg:col-span-5">
                <div class="mt-2">
                    <p class="text-base font-bold my-2">Jawaban Benar</p>
                    <textarea name="" class="tinyMce editor-jawaban" cols="10" rows="1"></textarea>
                </div>
            </div>
        </div>
    </div>
    {{-- END OF TAB CONTENT ESSAY--}}
</div>
@endsection

@section('scripts')
@vite(['./resources/js/tinymce/tinymce.min.js'])
{{-- <script src="https://cdn.tiny.cloud/1/4s4ak8y6x4r6q8s57das2vu6jrphkfeo4qrd3v7rewzqy5u3/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script> --}}
<script src="{{ asset('plugins/fields-linker/fieldsLinker.js') }}"></script>
@vite(['./resources/js/banksoal.js'])
<script>
    $(document).ready(function() {
        tinymceAnswer();
        tinymceSoal();
    });
    function tinymceSoal(){
        tinymce.init({
            selector: 'textarea#editorSoal', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists image media link fullscreen',
            menubar: false,
            file_picker_types: 'file image media',
            toolbar: 'fontfamily fontsize forecolor backcolor bold italic image media link | undo redo alignleft aligncenter alignright| indent outdent | bullist numlist | table code fullscreen editimage',
            toolbar_mode: 'wrap',
            branding: false
        });
    }
    function tinymceAnswer() {
            tinymce.init({
                selector: 'textarea.editor-jawaban',
                height: 170,
                plugins: 'code table lists image media link fullscreen',
                menubar: false,
                file_picker_types: 'file image media',
                toolbar: 'undo redo bold italic underline bullist numlist table code fullscreen image',
                toolbar_mode: 'wrap',
                branding: false,
            });
    }

    let answerCounter = 1;
    $('#addAnswerPgk').click(function() {
        const answerText = `${String.fromCharCode(66 + answerCounter - 1)}`;
        let element = `<div class="mt-4 boxAnswer" data-id="${answerCounter}">
                    <div class="my-2 flex justify-between items-center">
                        <div class="flex gap-4 items-center">
                            <x-button-secondary class="px-1.5 py-1 !bg-gray-100 deleteAnswer" data-id="${answerCounter}" onClick="deleteAnswer(${answerCounter})">
                                <i class="bi bi-trash-fill"></i>
                            </x-button-secondary>
                            <p class="text-base font-bold">Jawaban ${answerText}</p>
                        </div>
                        <div class="flex gap-2 items-center">
                            <p class="text-base font-bold">Jawaban Benar</p>
                            <x-forms.checkbox></x-forms.checkbox>
                        </div>

                    </div>
                    <textarea name="" class="tinyMce editor-jawaban" cols="10" rows="1"></textarea>
                </div>`;
        const targetAnswer = $('#pgk-jawaban');
        targetAnswer.append(element);
        answerCounter++;
        tinymceAnswer();
    });
    function deleteAnswer(e){
        $(`.boxAnswer[data-id="${e}"]`).remove();
        answerCounter --;
    }
</script>
@endsection