<!DOCTYPE html>
<html>
<head>
  @include("layouts.head")
</head>
<body>
  <header>
    @include("layouts.header")
  </header>
  <form action="" method="get">
    <fieldset>
      <label class="trn" data-trn-key="seleccionaTienda">Selecciona una tienda: </label><br>
      @foreach($tiendas as $tienda)
      <div id="{{$tienda->idTienda}}">{{$tienda->TiendaNombre}}</div>
      <a href="{{route('stock.tienda',$tienda->idTienda)}}"> <span class="trn" data-trn-key="mostrar">Mostrar </span>{{$tienda->TiendaNombre}}</a>
      @endforeach
    </select><br>
  </fieldset>
</form>


</body>
</html>
