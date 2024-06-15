
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 h-screen transition-transform -translate-x-full bg-blue-800 ps-4 sm:bg-transparent w-72 lg:w-64 sm:w-24 sm:translate-x-0" aria-label="Sidebar">

    <div class="h-full py-4 pl-1 overflow-y-auto sm:pl-3 no-scrollbar">
        <a href="#" class="flex pt-5 pb-5 ms-2 me-4 border-b border-gray-50/10 items-center ps-2.5">
            <img src="{{ asset('images/logo-brand.svg') }}" class="h-5 me-3 sm:h-6" alt="Flowbite Logo" />
            <span class="self-center block text-lg font-thin whitespace-nowrap dark:text-white md:hidden sm:hidden lg:block">Rubick</span>
        </a>
        <ul class="mt-8 space-y-2 text-sm font-thin">
            <li>
                <div data-tooltip-target="Dashboard" data-tooltip-placement="right">
                    <a href="{{ route('dashboard') }}" class="flex text-base items-center p-3 rounded-l-full group {{ request()->routeIs('dashboard') ? 'active-nav' : 'text-white' }}">
                        <i class="text-xl ms-2 bi bi-speedometer2"></i>
                        <span class="block ms-3 md:hidden sm:hidden lg:block">Dashboard</span>
                    </a>
                </div>
                <x-tooltip title="Dashboard"/>
            </li>

            <li>
                <button type="button" class="flex items-center w-full p-3 text-base transition duration-75 rounded-l-full dropdown-button group {{ App\Role\SidebarRole::isMasterData() ? 'active-nav' : 'text-white hover:bg-gray-50/10' }}" aria-controls="dropdown-example" data-tooltip-target="Master Data" data-tooltip-placement="right">
                        <i class="text-xl ms-2 bi bi-hdd-stack"></i>
                        <span class="flex-1 block text-left ms-3 rtl:text-right whitespace-nowrap md:hidden sm:hidden lg:block">Master Data</span>
                        <i class="block bi bi-chevron-down md:hidden sm:hidden lg:block"></i>
                </button>
                <x-tooltip title="Master Data"/>
                <ul id="dropdown-data-ujian" class="hidden py-2 mx-2 space-y-2 transition-[height] duration-500 ease-in-out bg-blue-900 rounded-lg dropdown-bar">
                    <x-dropdown-link :href="route('datatahun.index')" :active="request()->routeIs('datatahun.*')" title="Tahun Ajar" />
                    <x-dropdown-link :href="route('datamapel.index')" :active="request()->routeIs('datamapel.*')" title="Mata Pelajaran" />
                    <x-dropdown-link :href="route('datasiswa.index')" :active="request()->routeIs('datasiswa.*')" title="Siswa"/>
                    <x-dropdown-link :href="route('datakelas.index')" :active="request()->routeIs('datakelas.*')" title="Kelas Rombel"/>
                    <x-dropdown-link :href="route('dataguru.index')" :active="request()->routeIs('dataguru.*')" title="Guru"/>
                </ul>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-3 text-base transition duration-75 rounded-l-full dropdown-button group {{ App\Role\SidebarRole::isDataUjian() ? 'active-nav' : 'text-white hover:bg-gray-50/10' }}" aria-controls="dropdown-example" data-tooltip-target="Data Ujian" data-tooltip-placement="right">
                        <i class="text-xl ms-2 bi bi-ui-checks"></i>
                        <span class="flex-1 block text-left ms-3 rtl:text-right whitespace-nowrap md:hidden sm:hidden lg:block">Data Ujian</span>
                        <i class="block bi bi-chevron-down md:hidden sm:hidden lg:block"></i>
                </button>
                <x-tooltip title="Data Ujian"/>
                <ul id="dropdown-data-ujian" class="hidden py-2 mx-2 space-y-2 transition-[height] duration-500 ease-in-out bg-blue-900 rounded-lg dropdown-bar">
                    <x-dropdown-link :href="route('ujianjenis.index')" :active="request()->routeIs('ujianjenis.*')" title="Jenis"/>
                    <x-dropdown-link href="#" title="Sesi"/>
                    <x-dropdown-link href="#" title="Ruang"/>
                    <x-dropdown-link href="#" title="Atur Ruang & Sesi"/>
                    <x-dropdown-link href="#" title="Atur Nomor Peserta"/>
                    <x-dropdown-link href="#" title="Bank Soal"/>
                    <x-dropdown-link href="#" title="Jadwal"/>
                    <x-dropdown-link href="#" title="Alokasi Waktu"/>
                    <x-dropdown-link href="#" title="Pengawas"/>
                    <x-dropdown-link href="#" title="Token"/>
                </ul>
            </li>

            <li>
                <button type="button" class="flex items-center w-full p-3 text-base text-white transition duration-75 rounded-l-full dropdown-button group hover:bg-gray-50/10" aria-controls="dropdown-example" data-tooltip-target="User Data" data-tooltip-placement="right">
                        <i class="text-xl ms-2 bi bi-person-gear"></i>
                        <span class="flex-1 block text-left ms-3 rtl:text-right whitespace-nowrap md:hidden sm:hidden lg:block">User</span>
                        <i class="block bi bi-chevron-down md:hidden sm:hidden lg:block"></i>
                </button>
                <x-tooltip title="User Data"/>
                <ul id="dropdown-data-ujian" class="hidden py-2 mx-2 space-y-2 transition-[height] duration-500 ease-in-out bg-blue-900 rounded-lg dropdown-bar">
                    <x-dropdown-link href="#" title="Admin"/>
                    <x-dropdown-link href="#" title="Guru"/>
                    <x-dropdown-link href="#" title="Siswa"/>
                </ul>
            </li>

        </ul>
    </div>
    </aside>
