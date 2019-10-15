<!DOCTYPE html>
<html>
  <head>
    @include("layouts.head")
  </head>
  <body>
    <header>
      @include("layouts.header")
    </header>
    <form class="productonuevo" action="form.crear" method="get">
      <label>Crear nuevo producto:</label><br><br><br>
      <label>Nombre: </label>
      <input type="text" maxlength="45"/><br><br><br>
      <label>Descripcion: </label><br>
      <textarea rows="8" cols="80"></textarea><br><br><br>
      <label>Imagen: </label>
      <input type="file"/><br><br><br>
      <label>Stock: </label>
      <input type="text"/><br><br><br>
      <label>Enlace</label>
      <input type="text" value="http://"/><br><br><br>
      <button type="button" name="button">Crear Producto</button>
    </form>
  </body>
</html>
