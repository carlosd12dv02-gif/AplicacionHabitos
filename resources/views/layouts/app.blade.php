<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Habitos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<nav>
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('habitos.index') }}">Hábitos</a>
    <a href="{{ route('rutinas.index') }}">Rutinas</a>
</nav>

<hr>

<main>
    @yield('content')
</main>

</body>
</html>
