<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Inicio de sesion</title>
    </head>
    <body>
        <form action="formControl" method="post">
            <fieldset>
                <label>Selecciona una tienda: </label><br>
                <select size="1" name="tienda" id="lista" required>
                    @foreach($tiendas as $tienda)
                    <option value="{{$tienda->TiendaNombre}}">{{$tienda->TiendaNombre}}</option>
                    @endforeach
                </select><br>
                <input type="submit" name="seleccionar" value="Seleccionar">
            </fieldset>
        </form>
    </body>
</html>