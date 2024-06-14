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

    <div class="mt-4 box intro-y">
        <div class="grid grid-cols-12 gap-2 p-6 border-b border-gray-200/60">
            <div class="col-span-12 pb-4 border-b border-r-0 lg:border-b-0 lg:border-r lg:pb-0 lg:col-span-5 border-gray-200/60">
                <div class="flex items-center justify-center gap-4 lg:justify-start">
                    <div class="relative flex-none w-20 h-20 sm:w-24 sm:h-24 lg:w-32 lg:h-32 image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('images/profile-1.jpeg') }}">
                        <button class="absolute bottom-0 right-0 flex items-center justify-center p-2 mb-1 mr-1 rounded-full bg-primary-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-camera-icon stroke-1.5 w-4 h-4 text-white "><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"></path><circle cx="12" cy="13" r="3"></circle></svg>
                        </button>
                    </div>
                    <div class="ps-3">
                        <h4 class="text-lg font-medium text-gray-600">Jennie Dhoe, S.Anim</h4>
                        <p class="text-sm text-gray-400">Guru</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 px-3 pb-4 border-b border-r-0 lg:border-b-0 lg:border-r lg:pb-0 lg:col-span-3 border-gray-200/60">
                <p class="mt-2 text-sm font-medium text-center text-gray-600 lg:text-left">User Detail</p>
                <ul class="mt-3 text-sm font-light text-center text-gray-500 lg:text-left">
                    <li class="mb-2"><i class="bi bi-person-fill me-1"></i> jenniedoe</li>
                    <li class="mb-2"><i class="bi bi-key-fill me-1"></i> 123456</li>
                </ul>
                <div class="flex justify-center w-full my-4 lg:justify-start">
                    <x-button-primary class="px-2 py-1 text-xs rounded-md"><i class="bi bi-pencil-square me-1"></i>Edit Username / Password</x-button-primary>
                </div>
            </div>
            <div class="col-span-12 px-3 pb-4 lg:col-span-4">
                <div class="flex items-center justify-center h-full gap-2 lg:justify-start">
                    <div class="flex flex-col items-center gap-2 mt-4">
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
            </div>
        </div>
        <div>


<div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
    <ul id="tab" class="flex flex-wrap -mb-px ms-4">
        <li class="me-2" data-target="profile" >
            <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600 active-tab">Profile</a>
        </li>
        <li class="me-2" data-target="bio">
            <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600" aria-current="page">Biodata</a>
        </li>
    </ul>
</div>

        </div>
    </div>

    <div class="mt-4" id="tabPane">
        <div data-content="profile" class="p-4 box intro-y tab-content">
            <h4 class="pt-2 pb-4 text-sm text-gray-600 border-b border-gray-200">
                <i class="text-xs bi bi-chevron-down me-1"></i>
                Profile
            </h4>
            <div class="grid grid-cols-12 gap-2 mt-4">
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="name">Nama Guru</x-forms.label>
                    <x-forms.input name="name" value="Jennie Doe, S.Anim" id="name" type="text" />
                </div>
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="nip">NIP/NUPTK</x-forms.label>
                    <x-forms.input name="nip" value="21738921321" id="nip" type="text" />
                </div>
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="select">Jenis Kelamin</x-forms.label>
                    <x-forms.select-v2 id="select" title="Select Gender">
                        <x-forms.option-v2 id="laki-laki" value="laki-laki" name="gender">Laki-Laki</x-forms.option-v2>
                        <x-forms.option-v2 id="perempuan" value="perempuan" name="gender">Perempuan</x-forms.option-v2>
                    </x-forms.select-v2>
                </div>
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="telephone">No Telephone</x-forms.label>
                      <x-forms.input name="telephone" value="081234983913" id="telephone" type="number"/>
                </div>
            </div>
        </div>
        <div data-content="bio" class="hidden p-4 box intro-y tab-content">
            <h4 class="pt-2 pb-4 text-sm text-gray-600 border-b border-gray-200">
                <i class="text-xs bi bi-chevron-down me-1"></i>
                Biodata
            </h4>
            <div class="grid grid-cols-12 gap-2 mt-4">
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="name">Nama Guru</x-forms.label>
                    <x-forms.input name="name" value="Jennie Doe, S.Anim" id="name" type="text" />
                </div>
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="nip">NIP/NUPTK</x-forms.label>
                    <x-forms.input name="nip" value="21738921321" id="nip" type="text" />
                </div>
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="select">Jenis Kelamin</x-forms.label>
                    <x-forms.select-v2 id="select" title="Select Gender">
                        <x-forms.option-v2 id="laki-laki" value="laki-laki" name="gender">Laki-Laki</x-forms.option-v2>
                        <x-forms.option-v2 id="perempuan" value="perempuan" name="gender">Perempuan</x-forms.option-v2>
                    </x-forms.select-v2>
                </div>
                <div class="col-span-12 mb-3 md:col-span-6 intro-x">
                    <x-forms.label for="telephone">No Telephone</x-forms.label>
                      <x-forms.input name="telephone" value="081234983913" id="telephone" type="number"/>
                </div>
            </div>
        </div>
    </div>

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



        $('#select').on('click', function() {
            $('#option').toggle();
        });

        $('#option li').on('click', function() {
            //console.log($(this).find('input[type="radio"]'));
            $('#select').text($(this).text());
            $(this).find('input[type="radio"]').prop('checked', true);
            $('#option').hide();
        });
    $('#check').on('click', function() {
        var selectedCountry = $('input[name="country"]:checked').val();
        console.log('Selected country:', selectedCountry);
    });


    });

      </script>

@endsection


