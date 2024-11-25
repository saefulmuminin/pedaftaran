<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} - {{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('img/LOGO SOSMED PUTIH.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles') <!-- Allows adding extra styles from specific views -->
</head>
<body>
    <div class="container">
        <!-- Optional Header Section -->
        @hasSection('header')
            <header class="my-4">
                @yield('header')
            </header>
        @endif

        <!-- Main Content Section -->
        <main>
            @yield('content')
        </main>

        <!-- Optional Footer Section -->
        @hasSection('footer')
            <footer class="mt-5 text-center">
                @yield('footer')
            </footer>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts') <!-- Allows adding extra scripts from specific views -->
</body>
</html>
