<!DOCTYPE html>
<html>
<head>
  @include("layouts.head")
</head>
<body>
  <header>
    @include("layouts.header")
  </header>
  <section>
    @foreach($tiendas as $tienda)
    <div class="tienda">
      <div class="logotienda">
        <img src="/img/tiendas/{{$tienda->TiendaLogo}}">
      </div>
      <div class="productos">

        @foreach($productos as $producto)
        @if($producto->ProductoTienda === $tienda->idTienda)
        <div class="producto">
          <div>{{$producto->ProductoNombre}}</div>
          <img class="imagenproducto" src="/img/productos/{{$producto->ProductoImagen}}">
          <a href="{{route('producto.mostrar', $producto->idProducto)}}">Ver</a>
        </div>
        @endif
        @endforeach

      </div>
    </div>
    <hr>
    @endforeach
  </section>
  <footer>
    @include("layouts.footer")
  </footer>
</body>
</html>
