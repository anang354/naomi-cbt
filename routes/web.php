<?php

use Illuminate\Support\Facades\Route;

//MASTER DATA

Route::get('/', function () {
    return view('dashboard', [
        'title' => 'Dashboard',
        'breadcrumb' => [
            ['text' => 'Dashboard', 'url' => '#']
        ]
    ]);
})->name('dashboard');
Route::get('/datatahun', function() {
    return view('admin.tahun.index', [
        'title' => 'Tahun Ajar',
        'breadcrumb' => [
            ['text' => 'Master Data', 'url' => '#'],
            ['text' => 'Tahun Ajaran', 'url' => '#'],
        ]
    ]);
})->name('datatahun.index');
Route::get('/datamapel', function() {
    return view('admin.mapel.index', [
        'title' => 'Mata Pelajaran',
        'breadcrumb' => [
            ['text' => 'Master Data', 'url' => '#'],
            ['text' => 'Mata Pelajaran', 'url' => '#'],
        ]
    ]);
})->name('datamapel.index');
Route::get('/datasiswa', function() {
    return view('admin.siswa.index', [
        'title' => 'Daftar Siswa',
        'breadcrumb' => [
            ['text' => 'Master Data', 'url' => '#'],
            ['text' => 'Siswa', 'url' => '#'],
        ]
    ]);
})->name('datasiswa.index');
Route::get('/datakelas', function() {
    return view('admin.kelas.index', [
        'title' => 'Kelas',
        'breadcrumb' => [
            ['text' => 'Master Data', 'url' => '#'],
            ['text' => 'Kelas', 'url' => '#'],
        ]
    ]);
})->name('datakelas.index');
Route::get('/datakelas/create', function() {
    return view('admin.kelas.create', [
        'title' => 'Tambah Kelas',
        'breadcrumb' => [
            ['text' => 'Master Data', 'url' => '#'],
            ['text' => 'Kelas', 'url' => route('datakelas.index')],
            ['text' => 'Tambah Kelas', 'url' => '#'],
        ]
    ]);
})->name('datakelas.create');
Route::get('/dataguru', function() {
    return view('admin.guru.index', [
        'title' => 'Daftar Guru',
        'breadcrumb' => [
            ['text' => 'Master Data', 'url' => '#'],
            ['text' => 'Guru', 'url' => '#'],
        ]
    ]);
})->name('dataguru.index');
Route::get('/dataguru/create', function() {
    return view('admin.guru.create', [
        'title' => 'Tambah Guru',
        'breadcrumb' => [
            ['text' => 'Master Data', 'url' => '#'],
            ['text' => 'Guru', 'url' => route('dataguru.index')],
            ['text' => 'Create', 'url' => '#'],
        ]
    ]);
})->name('dataguru.create');
Route::get('/dataguru/edit', function() {
    return view('admin.guru.edit', [
        'title' => 'Edit Guru',
        'breadcrumb' => [
            ['text' => 'Master Data', 'url' => '#'],
            ['text' => 'Guru', 'url' => route('dataguru.index')],
            ['text' => 'Edit', 'url' => '#'],
        ]
    ]);
})->name('dataguru.edit');
Route::get('/dataguru/editjabatan', function() {
    return view('admin.guru.edit_jabatan', [
        'title' => 'Edit Jabatan Guru',
        'breadcrumb' => [
            ['text' => 'Master Data', 'url' => '#'],
            ['text' => 'Guru', 'url' => route('dataguru.index')],
            ['text' => 'Edit Jabatan', 'url' => '#'],
        ]
    ]);
})->name('dataguru.editJabatan');

// DATA UJIAN

Route::get('/ujianjenis', function() {
    return view('admin.jenis.index', [
        'title' => 'Jenis Ujian',
        'breadcrumb' => [
            ['text' => 'Data Ujian', 'url' => '#'],
            ['text' => 'Jenis', 'url' => '#'],
        ]
    ]);
})->name('ujianjenis.index');
Route::get('/ujiansesi', function() {
    return view('admin.sesi.index', [
        'title' => 'Sesi Ujian',
        'breadcrumb' => [
            ['text' => 'Data Ujian', 'url' => '#'],
            ['text' => 'Sesi', 'url' => '#'],
        ]
    ]);
})->name('ujiansesi.index');
Route::get('/ujianruang', function() {
    return view('admin.ruang.index', [
        'title' => 'Ruang Ujian',
        'breadcrumb' => [
            ['text' => 'Data Ujian', 'url' => '#'],
            ['text' => 'Ruang', 'url' => '#'],
        ]
    ]);
})->name('ujianruang.index');
Route::get('/ujiansesisiswa', function() {
    return view('admin.ruang-sesi.index', [
        'title' => 'Atur Ruang & Sesi',
        'breadcrumb' => [
            ['text' => 'Data Ujian', 'url' => '#'],
            ['text' => 'Ruang & Sesi', 'url' => '#'],
        ]
    ]);
})->name('ujiansesisiswa.index');
Route::get('/ujiannomorpeserta', function() {
    return view('admin.nomor-peserta.index', [
        'title' => 'Atur Nomor Peserta',
        'breadcrumb' => [
            ['text' => 'Data Ujian', 'url' => '#'],
            ['text' => 'Nomor Peserta', 'url' => '#'],
        ]
    ]);
})->name('ujiannomorpeserta.index');
Route::get('/ujianbanksoal', function() {
    return view('admin.bank-soal.index', [
        'title' => 'Bank Soal',
        'breadcrumb' => [
            ['text' => 'Data Ujian', 'url' => '#'],
            ['text' => 'Bank Soal', 'url' => '#'],
        ]
    ]);
})->name('ujianbanksoal.index');
Route::get('/ujianbanksoal/create', function() {
    return view('admin.bank-soal.create', [
        'title' => 'Create Bank Soal',
        'breadcrumb' => [
            ['text' => 'Data Ujian', 'url' => '#'],
            ['text' => 'Bank Soal', 'url' => route('ujianbanksoal.index')],
            ['text' => 'Create', 'url' => '#'],
        ]
    ]);
})->name('ujianbanksoal.create');
Route::get('/ujianbanksoal/detail', function() {
    return view('admin.bank-soal.detail', [
        'title' => 'Detail Bank Soal',
        'breadcrumb' => [
            ['text' => 'Data Ujian', 'url' => '#'],
            ['text' => 'Bank Soal', 'url' => route('ujianbanksoal.index')],
            ['text' => 'Detail', 'url' => '#'],
        ]
    ]);
})->name('ujianbanksoal.detail');
Route::get('/ujianbanksoal/create-soal', function() {
    return view('admin.bank-soal.create-soal', [
        'title' => 'Create Soal',
        'breadcrumb' => [
            ['text' => 'Data Ujian', 'url' => '#'],
            ['text' => 'Bank Soal', 'url' => route('ujianbanksoal.index')],
            ['text' => 'STSIPAS01', 'url' => route('ujianbanksoal.detail')],
            ['text' => 'Create', 'url' => ''],
        ]
    ]);
})->name('ujianbanksoal.create-soal');
Route::get('/ujianbanksoal/example', function() {
    return view('admin.bank-soal.mjd-example', [
        'title' => 'Create Soal',
        'breadcrumb' => [
            ['text' => 'Data Ujian', 'url' => '#'],
            ['text' => 'Bank Soal', 'url' => route('ujianbanksoal.index')],
            ['text' => 'STSIPAS01', 'url' => route('ujianbanksoal.detail')],
            ['text' => 'Create', 'url' => ''],
        ]
    ]);
})->name('ujianbanksoal.example');