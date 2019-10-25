<!DOCTYPE html>
<html>
<head>
  @include("layouts.head")
  <script type="text/javascript" src="/js/validar-producto-nuevo.js"></script>
</head>
<body>
  <header>
    @include("layouts.header")
  </header>
  <form class="productonuevo" action="{{route('stock.crear',$idTienda ?? ''->idTienda)}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" id="idTienda" name="idTienda" value="{{$idTienda ?? ''->idTienda}}" hidden>
    <label class="trn" data-trn-key="crearNuevoProducto">Crear nuevo producto:</label><br><br><br>
    <label class="trn" data-trn-key="nombre">Nombre: </label>
    <input type="text" maxlength="45" name="nombre" id="nombre"><br><br><br>
    <label class="trn" data-trn-key="descripcion">Descripcion: </label><br>
    <textarea rows="8" cols="80" name="desc" id="descripcion"></textarea><br><br><br>
    <label class="trn" data-trn-key="imagen">Imagen: </label>
    <input type="file" name="img" id="img"/><br><br><br>
    <label class="trn" data-trn-key="stock">Stock: </label>
    <input type="number" name="stock" id="stock"/><br><br><br>
    <label class="trn" data-trn-key="enlace">Enlace</label>
    <input type="text" name="enlace" value="http://" id="enlace"/><br><br><br>
    <input type="submit" onclick="validarProducto()" value="Crear producto">
  </form>
</body>
</html>
