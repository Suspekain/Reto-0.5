<!DOCTYPE html>
<html>
<head>
  @include("layouts.head")
  <script type="text/javascript" src="/js/validarStock.js"></script>
</head>
<body>
  <header>
    @include("layouts.header")
  </header>
  <form class="productonuevo" action="{{route('stock.update', $producto->idProducto)}}" method="get" enctype="multipart/form-data">
    @csrf
    <input type="text" id="idProducto" name="idProducto" value="{{$producto->idProducto}}" hidden>
    <label class="trn" data-trn-key="editarStock">Editar Stock: </label>
    <input type="number" name="stock" id="stock" value="{{$producto->ProductoStock}}" required/>
    <div id="stockMal">Introduce el stock.</div><br><br><br>
    <input type="submit" id="submit" disabled value="Editar producto">
  </form>
</body>
</html>
