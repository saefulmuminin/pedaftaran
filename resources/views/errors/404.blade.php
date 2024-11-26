@extends('layouts.app', ['title' => 'Page Not Found'])

@section('content')
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="text-center">
        <!-- Tambahkan ilustrasi -->
        <img
    src="{{ asset('img/Oops! 404 Error with a broken robot-cuate.svg') }}"
    alt="Error Illustration"
    class="img-fluid mb-4"
    style="max-width: 100%; height: auto; width: 50%; max-height: 300px;"
>

        <!-- Judul besar -->
        <h1 class="display-1 text-danger">404</h1>

        <!-- Pesan kesalahan -->
        <p class="lead mb-4">Oops! The page you are looking for does not exist.</p>

        <!-- Tombol kembali ke beranda -->
        <a href="{{ url('/') }}" class="btn btn-success">Back to Home</a>
    </div>
</body>
@endsection
