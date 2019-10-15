<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
  		<header>
  		</header>
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
