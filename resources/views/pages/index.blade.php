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
          <div>{{$producto->ProductoNombre}}</div>
          <img class="imagenproducto" src="{{$producto->ProductoImagen}}">
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
