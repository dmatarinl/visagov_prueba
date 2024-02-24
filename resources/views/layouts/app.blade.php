<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
     
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/visagov_logo.ico') }}">
</head>
<body>

    <header>
        @include('components.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>

</body>
</html>
