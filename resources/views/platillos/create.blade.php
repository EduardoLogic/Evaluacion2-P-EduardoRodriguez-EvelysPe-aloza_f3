<!DOCTYPE html>
<html>
<head><title>Nuevo Platillo</title></head>
<body>
    <h1>Crear Platillo</h1>
    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('platillos.store') }}" method="POST">
        @csrf
        <label>Nombre:</label><br><input type="text" name="nombre" value="{{ old('nombre') }}"><br>
        <label>Calorías:</label><br><input type="number" name="calorias" value="{{ old('calorias') }}"><br>
        <label>Menú:</label><br>
        <select name="menu_id">
            @foreach($menus as $menu) <option value="{{ $menu->id }}">{{ $menu->nombre }}</option> @endforeach
        </select><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
