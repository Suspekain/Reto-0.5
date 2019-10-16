<!DOCTYPE html>
<html>
  <head>
    @include("layouts.head")
    <script type="text/javascript" src="js/validar-producto-nuevo.js"></script>
  </head>
  <body>
    <header>
      @include("layouts.header")
    </header>
    <form class="productonuevo" action="{{route('stock.update', $producto->idProducto)}}" method="get" enctype="multipart/form-data">
      @csrc
      <input type="text" id="idProducto" name="idProducto" value="{{$producto->idProducto}}" hidden>
      <label>Editar Stock: </label>
      <input type="number" name="stock" id="stock" value="{{$producto->ProductoStock}}"/><br><br><br>
      <input type="submit" onclick="validarProducto()" value="Editar producto">
    </form>
  </body>
</html>