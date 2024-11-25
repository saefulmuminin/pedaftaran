@extends('layouts.app', ['title' => 'Edit Pedaftaran'])

@section('content')
<div class="container mt-4">
    <h3>Edit Pendaftaran</h3>
    <div class="card mt-3">
        <div class="card-body">
            <form action="{{ route('admin.registrations.update', $registration->id) }}" method="POST">
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
                    <label for="phone" class="form-label">Nomor Telepon/WA</label>
                    <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $registration->phone) }}" required>
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="education_level" class="form-label">Jenjang Pendidikan</label>
                    <select name="education_level" id="education_level" class="form-select @error('education_level') is-invalid @enderror" required>
                        <option value="">Pilih Jenjang Pendidikan</option>
                        <option value="MTs" {{ old('education_level', $registration->education_level) === 'MTs' ? 'selected' : '' }}>MTs</option>
                        <option value="SMP" {{ old('education_level', $registration->education_level) === 'SMP' ? 'selected' : '' }}>SMP</option>
                        <option value="SMK" {{ old('education_level', $registration->education_level) === 'SMK' ? 'selected' : '' }}>SMK</option>
                        <option value="SMA" {{ old('education_level', $registration->education_level) === 'SMA' ? 'selected' : '' }}>SMA</option>
                        <option value="Madrasah Aliyah" {{ old('education_level', $registration->education_level) === 'Madrasah Aliyah' ? 'selected' : '' }}>Madrasah Aliyah</option>
                    </select>
                    @error('education_level')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.registrations.index') }}" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
