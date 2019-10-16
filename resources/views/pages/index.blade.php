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
        <div>{{$tienda->TiendaNombre}}</div>
      </div>
      <div class="productos">
        <div class="producto">
          @foreach($productos as $producto)
            @if($producto->ProductoTienda === $tienda->idTienda)
              <div>{{$producto->ProductoNombre}}</div>
              <img class="imagenproducto" src="/img/productos/{{$producto->ProductoImagen}}">
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
