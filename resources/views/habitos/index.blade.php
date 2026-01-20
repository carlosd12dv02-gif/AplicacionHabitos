<!DOCTYPE html>
<html>
<head>
    <title>Hábitos</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<div class="container">
    <h1>App Hábitos</h1>

    <a href="{{ route('habitos.create') }}" class="btn btn-add">Agregar Hábito</a>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Hábito</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>

        @foreach($habitos as $habito)
        <tr>
            <td>{{ $habito->nombre }}</td>
            <td>{{ $habito->habito }}</td>
            <td>{{ $habito->fecha }}</td>
            <td>{{ $habito->hora }}</td>
            <td>{{ $habito->estado ? 'Lo hizo' : 'No lo hizo' }}</td>
            <td>
                <a href="{{ route('habitos.edit', $habito->id) }}" class="btn btn-edit">Editar</a>
                <a href="{{ route('habitos.destroy', $habito->id) }}" class="btn btn-delete">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
