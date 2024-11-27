@extends('layouts.app', ['title' => 'Edit Pedaftaran'])

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Edit Pendaftaran</h2>
    <form action="{{ route('admin.registrations.update', $registration) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $registration->name) }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon (WhatsApp)</label>
            <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $registration->phone) }}" required>
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="education_level" class="form-label">Jenjang Pendidikan</label>
            <select name="education_level" id="education_level" class="form-select @error('education_level') is-invalid @enderror" required>
                <option value="">Pilih Jenjang Pendidikan</option>
                <option value="Farmasi Klinis dan Komunitas" {{ old('education_level', $registration->education_level) === 'Farmasi Klinis dan Komunitas' ? 'selected' : '' }}>Farmasi Klinis dan Komunitas</option>
                <option value="Desain Komunikasi Visual (DKV)" {{ old('education_level', $registration->education_level) === 'Desain Komunikasi Visual (DKV)' ? 'selected' : '' }}>Desain Komunikasi Visual (DKV)</option>
            </select>
            @error('education_level')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
