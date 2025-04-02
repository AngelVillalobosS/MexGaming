<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/images/logo/MexGamingLogo.jpg')}}" type="image/x-icon">
    <title>MexGaming | Inicio</title>
</head>

<body>
    <header>
        @include('components.navbar')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('components.footer')
    </footer>
</body>

</html>