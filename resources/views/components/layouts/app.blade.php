<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "Default"}}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <header>
        <x-navbar/>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <x-footer/>
    </footer>
</body>
</html>