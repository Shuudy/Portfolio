<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    @if(isset($includeNotify)) @notifyCss @endif
    @if(isset($includeLivewire)) @livewireStyles @endif
    @vite(['resources/js/admin/app.js'])    
</head>
<body>
    @yield('body')
    @if(isset($includeLivewire))
        @livewireScriptConfig
    @endif
    @if(isset($includeNotify)) 
        @include('notify::components.notify')
        @notifyJs
    @endif
</body>
</html>