@extends('layouts.app', ['title' => 'Pendaftaran Berhasil'])

@section('content')
<div class="container-fluid" style="background-image: url('{{ asset('img/rm222-mind-26.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh;">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row w-100">
            <!-- Teks dan Konten -->
            <div class="col-md-6 text-center text-md-left">
                <div class="card shadow-lg rounded-lg p-5 bg-light opacity-80">
                    <h3 class="mb-3 text-success">Pendaftaran Berhasil</h3>
                    <p class="lead mb-4">Terima kasih telah mendaftar! Silakan klik tombol di bawah untuk konfirmasi lebih lanjut.</p>
                    <!-- Tombol WhatsApp -->
                    <a href="https://wa.me/+6281385260050" target="_blank" class="btn btn-success btn-lg mt-3">Konfirmasi</a>
                </div>
            </div>

            <!-- Ilustrasi -->
            <div class="col-md-6 text-center d-none d-md-block">
                <img src="{{ asset('img/IMG_3112.JPG') }}" alt="Ilustrasi Pendaftaran" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
