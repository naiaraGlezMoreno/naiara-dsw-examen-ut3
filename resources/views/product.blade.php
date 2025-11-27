<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<!--Naiara Gonzalez Moreno -->
    <h1>Dar de alta</h1>
    <form action="{{ route('product.store') }}" method="POST">
    @csrf       
        <div>
            <label for="nombre-producto">Nombre del Producto:</label>
            <input type="text" id="nombre-producto" name="nombre-producto"/>
    <!-- AÑADí ERRORES DESPUES DE CADA INPUT -->
            @error('cliente')
                <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="descripcion-producto">Descripcion del Producto:</label>
            <textarea name="descripcion-producto" id="descripcion-producto"></textarea>
    <!-- AÑADí ERRORES DESPUES DE CADA INPUT -->
            @error('descripcion-producto')
                <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="precio-producto">Precio</label>
            <input type="numeric" name="precio-producto" id="precio-producto">
        <!-- AÑADí ERRORES DESPUES DE CADA INPUT -->
            @error('precio-producto')
                <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="unidades">Unidades</label>
            <input type="numeric" name="unidades" id="unidades">
        <!-- AÑADí ERRORES DESPUES DE CADA INPUT -->
            @error('unidades')
                <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="categoria-producto">Categoria de Producto:</label>
            <select name="categoria-producto" id="categoria-producto">
                <option value="electronica">Electronica</option>
                <option value="deporte">Deporte</option>
            </select>
        <!-- AÑADí ERRORES DESPUES DE CADA INPUT -->
            @error('categoria-producto')
                <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <input type="submit" value="ENVIAR MENSAJE"/>
        </div>
        <br>
        <!-- AÑADí EL STATUS QUE MUESTRA EL MENSAJE DEL CONTROLADOR -->
        @if (session('status'))
            <div style="color:green; font-weight: bold">
                {{ session('status') }}
            </div>
        @endif
    </form>
</body>
</html>