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
    <form class="productonuevo" action="" method="get">
      <input type="hidden" name="idTienda" value="{{$tienda->idTienda}}">
      <label>Crear nuevo producto:</label><br><br><br>
      <label>Nombre: </label>
      <input type="text" name="nombre" maxlength="45"/><br><br><br>
      <label>Descripcion: </label><br>
      <textarea rows="8" name="desc" cols="80"></textarea><br><br><br>
      <label>Imagen: </label>
      <input type="file" name="img" /><br><br><br>
      <label>Stock: </label>
      <input type="text" name="stock" /><br><br><br>
      <label>Enlace</label>
      <input type="text" name="enlace" value="http://"/><br><br><br>
      <button type="button" name="button"><a href="{{route('stock.crear')}}">Crear Producto</a></button>
    </form>
  </body>
</html>
