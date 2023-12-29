<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Page') | Admin Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    @if(isset($useButterUp)) <link rel="stylesheet" href="{{ asset('butterup/butterup.min.css') }}"> @endif
    @vite(['resources/js/admin/app.js'])    
</head>
<body>
    @yield('body')
    @if(isset($useButterUp)) <script src="{{ asset('butterup/butterup.min.js') }}"></script> @endif
    @yield('js')
</body>
</html>