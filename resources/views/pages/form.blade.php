<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Inicio de sesion</title>
    </head>
    <body>
        <form action="" method="get">
            <fieldset>
                <label>Selecciona una tienda: </label><br>
                <select size="1" name="tienda" id="lista" required>
                    @foreach($tiendas as $tienda)
                    <option value="{{$tienda->TiendaNombre}}">{{$tienda->TiendaNombre}}</option>
                    @endforeach
                </select><br>
                <a href="{{route('formProductos',$tienda->TiendaNombre)}}" class="btnedit btnedit-outline-info btnedit-size">Prueba</a>
            </fieldset>
        </form>
    </body>
</html>