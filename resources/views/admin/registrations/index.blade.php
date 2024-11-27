@extends('layouts.app', ['title' => 'List Pedaftran'])

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Daftar Registrasi</h2>
    <a href="{{ route('admin.registrations.create') }}" class="btn btn-primary mb-3">Tambah Pendaftaran</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nomor Telepon</th>
                <th>Jenjang Pendidikan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($registrations as $registration)
                <tr>
                    <td>{{ $registration->name }}</td>
                    <td>{{ $registration->phone }}</td>
                    <td>{{ $registration->education_level }}</td>
                    <td>
                        <a href="{{ route('admin.registrations.edit', $registration) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.registrations.destroy', $registration) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus pendaftaran?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada data pendaftaran.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
