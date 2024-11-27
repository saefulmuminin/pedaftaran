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

                            <!-- Input Nama Lengkap -->
                            <div class="mb-4">
                                <label for="name" class="form-label text-white">Nama Lengkap</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}"
                                    placeholder="Masukkan nama lengkap"
                                    aria-describedby="nameHelp"
                                    required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Input Nomor Telepon/WA -->
                            <div class="mb-4">
                                <label for="phone" class="form-label text-white">Nomor Telepon/WA</label>
                                <input
                                    type="text"
                                    name="phone"
                                    id="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}"
                                    placeholder="Contoh: 08123456789"
                                    aria-describedby="phoneHelp"
                                    required>
                                <small id="phoneHelp" class="form-text text-white">
                                    Masukkan nomor telepon yang valid dan terhubung dengan WhatsApp.
                                </small>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Pilih Jenjang Pendidikan -->
                            <div class="mb-4">
                                <label for="education_level" class="form-label text-white">Jenjang Pendidikan</label>
                                <select
                                    name="education_level"
                                    id="education_level"
                                    class="form-select @error('education_level') is-invalid @enderror"
                                    aria-describedby="educationLevelHelp"
                                    required>
                                    <option value="">Pilih Jenjang Pendidikan</option>
                                    <option value="Farmasi Klinis dan Komunitas" {{ old('education_level') === 'Farmasi Klinis dan Komunitas' ? 'selected' : '' }}>Farmasi Klinis dan Komunitas</option>
                                    <option value="Desain Komunikasi Visual (DKV)" {{ old('education_level') === 'Desain Komunikasi Visual (DKV)' ? 'selected' : '' }}>Desain Komunikasi Visual (DKV)</option>
                                </select>
                                @error('education_level')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tombol Submit -->
                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn btn-light px-5 py-2 rounded-lg shadow-lg">Daftar Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
