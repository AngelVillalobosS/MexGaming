<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MexGaming | Inicio</title>
</head>

<body>
    <header>
        @include('components.navbar')
    </header>
    <main>
        @yield('content')
    </main>
        @include('components.footer')
</body>

</html>