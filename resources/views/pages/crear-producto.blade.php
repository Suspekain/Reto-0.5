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
  <form class="productonuevo" id="myform" action="{{route('stock.crear',$idTienda ?? ''->idTienda)}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" id="idTienda" name="idTienda" value="{{$idTienda ?? ''->idTienda}}" hidden>
    <label class="trn" data-trn-key="crearNuevoProducto">Crear nuevo producto:</label><br><br><br>
    <label class="trn" data-trn-key="nombre">Nombre: </label>
    <input type="text" maxlength="45" name="nombre" id="nombre" required><div id="nombreMal">Introduce el nombre.</div><br><br><br>
    <label class="trn" data-trn-key="descripcion">Descripcion: </label><br>
    <input type="textarea" name="desc" id="descripcion" required>
    <div id="descMal">Itroduce una descripcion.</div><br><br><br>
    <label class="trn" data-trn-key="imagen">Imagen: </label>
    <input type="file" name="img" id="img"required/>
    <div id="imgMal">Introduce una imagen.</div><br><br><br>
    <label class="trn" data-trn-key="stock">Stock: </label>
    <input type="number" name="stock" id="stock" required/>
    <div id="stockMal">Introduce el stock.</div><br><br><br>
    <label class="trn" data-trn-key="enlace">Enlace</label>
    <input type="text" name="enlace" value="http://" id="enlace" required/>
    <div id="enlaceMal">Introduce el enlace.</div><br><br><br>
    <input type="submit" id="submit" disabled value="Crear producto">
  </form>
</body>
</html>
