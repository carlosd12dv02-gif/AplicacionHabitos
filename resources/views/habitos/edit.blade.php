<!DOCTYPE html>
<html>
<head>
    <title>Editar Hábito</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<div class="container">
    <h1>Editar Hábito</h1>

    <form method="POST" action="{{ route('habitos.update', $habito->id) }}">
        @csrf

        <input type="text" name="nombre" value="{{ $habito->nombre }}" required>
        <input type="text" name="habito" value="{{ $habito->habito }}" required>
        <input type="date" name="fecha" value="{{ $habito->fecha }}" required>
        <input type="time" name="hora" value="{{ $habito->hora }}" required>

        <select name="estado">
            <option value="1" {{ $habito->estado ? 'selected' : '' }}>Lo hizo</option>
            <option value="0" {{ !$habito->estado ? 'selected' : '' }}>No lo hizo</option>
        </select>

        <button type="submit" class="btn btn-save">Actualizar</button>
    </form>
</div>

</body>
</html>
    