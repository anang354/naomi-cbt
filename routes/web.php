<?php

use Illuminate\Support\Facades\Route;

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
