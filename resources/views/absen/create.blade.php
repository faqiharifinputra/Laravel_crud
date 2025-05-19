@extends('layout.layout')

{{-- Mengisi bagian content dari layout --}}
@section('content')
<div class="container mt-5">

    {{-- Judul halaman --}}
    <h1>Tambah Absen</h1>

    {{-- Form untuk menyimpan data absen --}}
    <form action="{{ route('absen.store') }}" method="POST">
        @csrf {{-- Token keamanan dari Laravel --}}

        {{-- Input untuk No Absen --}}
        <div class="mb-3">
            <label for="no_absen" class="form-label">No Absen</label>
            <input type="text" name="no_absen" class="form-control" id="no_absen" required>
        </div>

        {{-- Input untuk Nama --}}
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>

        {{-- Input untuk Kelas --}}
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" id="kelas" required>
        </div>

        {{-- Tombol Simpan dan Batal --}}
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('absen.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
