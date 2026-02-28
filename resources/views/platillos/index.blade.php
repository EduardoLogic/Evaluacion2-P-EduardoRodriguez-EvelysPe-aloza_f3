<!DOCTYPE html>
<html>
<head><title>Platillos</title></head>
<body>
    <h1>Lista de Platillos</h1>
    @if(session('success')) <p style="color: green">{{ session('success') }}</p> @endif
    <a href="{{ route('platillos.create') }}">Nuevo</a>
    <table border="1">
        <thead><tr><th>Nombre</th><th>Calorías</th><th>Menú</th></tr></thead>
        <tbody>
            @foreach($platillos as $platillo)
                <tr>
                    <td>{{ $platillo->nombre }}</td>
                    <td>{{ $platillo->calorias }}</td>
                    <td>{{ $platillo->menu->nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>