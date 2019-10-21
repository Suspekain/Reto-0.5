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
      <label>Crear nuevo producto:</label><br><br><br>
      <label>Nombre: </label>
      <input type="text" maxlength="45" id="nombre"><br><br><br>
      <label>Descripcion: </label><br>
      <textarea rows="8" cols="80" id="descripcion"></textarea><br><br><br>
      <label>Imagen: </label>
      <input type="file" id="img"/><br><br><br>
      <label>Stock: </label>
      <input type="number" id="stock"/><br><br><br>
      <label>Enlace</label>
      <input type="text" value="http://" id="enlace"/><br><br><br>
      <input type="button" onclick="validarProducto()" value="Crear producto">
    </form>
  </body>
</html>
