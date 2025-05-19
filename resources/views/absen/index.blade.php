@extends('layout.layout') {{-- Memanggil layout utama --}}

@section('content') {{-- Mulai isi section content --}}

    <h2>Daftar Absensi</h2>

    {{-- Jika ada session success, tampilkan alert hijau --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tombol menuju form tambah absen --}}
    <a href="{{ route('absen.create') }}" class="btn btn-primary mb-3">Tambah Absen</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>No Absen</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- Looping data absen, jika kosong tampil pesan --}}
            @forelse ($data as $item)
                <tr>
                    {{-- Nomor urut --}}
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->no_absen }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>
                        {{-- Tombol edit --}}
                        <a href="{{ route('absen.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        {{-- Form hapus dengan method DELETE --}}
                        <form action="{{ route('absen.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                {{-- Jika data kosong --}}
                <tr>
                    <td colspan="5" class="text-center">Belum ada data absen</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection {{-- Akhir section content --}}
