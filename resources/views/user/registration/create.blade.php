@extends('layouts.app', ['title' => 'Pendaftaran Siswa'])

@section('content')
<div class="d-flex align-items-center justify-content-center" style="min-height: 100vh; background-image: url('{{ asset('img/DSC_0021.JPG') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg rounded-lg bg-opacity-75 bg-success">
                    <div class="card-body p-5">
                        <h3 class="text-center text-white mb-4">Form Pendaftaran Siswa</h3>
                        <p class="text-center text-white mb-5">Silakan isi data berikut untuk mendaftar.</p>

                        <form action="{{ route('registration.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label text-white">Nama Lengkap</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="phone" class="form-label text-white">Nomor Telepon/WA</label>
                                <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="education_level" class="form-label text-white">Jenjang Pendidikan</label>
                                <select name="education_level" id="education_level" class="form-select @error('education_level') is-invalid @enderror" required>
                                    <option value="">Pilih Jenjang Pendidikan</option>
                                    <option value="MTs" {{ old('education_level') === 'MTs' ? 'selected' : '' }}>MTs</option>
                                    <option value="SMP" {{ old('education_level') === 'SMP' ? 'selected' : '' }}>SMP</option>
                                    <option value="SMK" {{ old('education_level') === 'SMK' ? 'selected' : '' }}>SMK</option>
                                    <option value="SMA" {{ old('education_level') === 'SMA' ? 'selected' : '' }}>SMA</option>
                                    <option value="Madrasah Aliyah" {{ old('education_level') === 'Madrasah Aliyah' ? 'selected' : '' }}>Madrasah Aliyah</option>
                                </select>
                                @error('education_level')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn btn-dark px-5 py-2 rounded-lg shadow-lg">Daftar Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
