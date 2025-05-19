@extends('layout.layout')

@section('content')
<div class="container mt-4">
    <h3>Edit Data Absen</h3>

    <form action="{{ route('absen.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Penting agar route PUT dikenali -->

        <div class="mb-3">
            <label>No Absen</label>
            <input type="text" name="no_absen" class="form-control" value="{{ $data->no_absen }}" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $data->kelas }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('absen.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
