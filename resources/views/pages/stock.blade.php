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
		<h2>{{$idTienda->TiendaNombre}}{{$idTienda->idTienda}}</h2>
		<a href="{{route('crear', $idTienda->idTienda)}}">Crear nuevo producto</a>
		<table border="1px">
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Descripcion</th>
			</tr>
			@foreach($productos as $p)
			<tr>
				<td>{{$p->idProducto}}</td>
				<td>{{$p->ProductoNombre}}</td>
				<td>{{$p->ProductoDescripcion}}</td>
				<td><a href="{{route('stock.eliminar',$p->idProducto)}}">Eliminar</a></td>
			</tr><br>
			@endforeach
		</table>
	</section>
</body>
</html>
