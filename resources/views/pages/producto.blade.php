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
  <div>
    <table class="tablaproductos">
      <tr class="productos-indice">
        <th>ID</th>
        <th class="trn" data-trn-key="nombre">Nombre</th>
        <th class="trn" data-trn-key="descripcion">Descripcion</th>
        <th class="trn" data-trn-key="imagen">Imagen</th>
        <th class="trn" data-trn-key="stock">Stock</th>
      </tr>
      <tr class="productos-productos">
        <td>{{$producto->idProducto}}</td>
        <td>{{$producto->ProductoNombre}}</td>
        <td>{{$producto->ProductoDescripcion}}</td>
        <td><img style="height: 150px" src="/img/productos/{{$producto->ProductoImagen}}"></td>
        <td>{{$producto->ProductoStock}}</td>
      </tr><br>
  </div>
</body>
</html>