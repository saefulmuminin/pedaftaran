@extends('layouts.app', ['title' => 'List Pedaftran'])

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Pendaftaran</h3>
        <a href="{{ route('admin.registrations.create') }}" class="btn btn-primary">Tambah Pendaftaran</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Nomor Telepon/WA</th>
                <th>Jenjang Pendidikan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrations as $registration)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $registration->name }}</td>
                <td>{{ $registration->phone }}</td>
                <td>{{ $registration->education_level }}</td>
                <td>
                    <form action="{{ route('admin.registrations.destroy', $registration) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
