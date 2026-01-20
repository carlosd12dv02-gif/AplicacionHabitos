<!DOCTYPE html>
<html>
<head>
    <title>Crear Hábito</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<div class="container">
    <h1>Agregar Hábito</h1>

    <form method="POST" action="{{ route('habitos.store') }}">
        @csrf

        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="habito" placeholder="Hábito" required>
        <input type="date" name="fecha" required>
        <input type="time" name="hora" required>

        <select name="estado">
            <option value="1">Lo hizo</option>
            <option value="0">No lo hizo</option>
        </select>

        <button type="submit" class="btn btn-save">Guardar</button>
    </form>
</div>

</body>
</html>
