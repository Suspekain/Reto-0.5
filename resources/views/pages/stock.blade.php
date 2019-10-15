<!DOCTYPE html>
<html>
	<head>
        @include("layouts.head")
    </head>
	<body>
  		<header>
            @include("layouts.header")
        </header>
        <h2>{{$idTienda->TiendaNombre}}</h2>
  		<section>
  			@foreach($productos as $p)
			    <tr>
				  <td>{{$p->idProducto}}</td>
			      <td>{{$p->ProductoNombre}}</td>
			      <td>{{$p->ProductoDescripcion}}</td>
			      <td><a href="" class="btnedit btnedit-outline-info btnedit-size">Info</a></td>
			    </tr><br>
  			@endforeach
  		</section>
	</body>
</html>
