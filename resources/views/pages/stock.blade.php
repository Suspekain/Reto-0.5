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
		<h2>{{$idTienda->TiendaNombre}}</h2>
		<a href="{{route('crear', $idTienda->idTienda)}}">@lang('stock.newPro')</a>
		<table class="tablaproductos">
			<tr class="productos-indice">
				<th class="trn" data-trn-key="id">ID</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Imagen</th>
				<th>Stock</th>
				<th>Eliminar</th>
			</tr>
			@foreach($productos as $p)
			<tr class="productos-productos">
				<td>{{$p->idProducto}}</td>
				<td>{{$p->ProductoNombre}}</td>
				<td>{{$p->ProductoDescripcion}}</td>
				<td><img style="height: 150px" src="/img/productos/{{$p->ProductoImagen}}"></td>
				<td>{{$p->ProductoStock}} <a href="{{route('stock.editar',$p->idProducto)}}"><img style="width: 30px" src="/img/edit.png"></a></td>
				<td style="text-align: center"><a href="{{route('stock.eliminar',$p->idProducto)}}"><img style="width: 30px" src="/img/x.png"></a></td>
			</tr><br>
			@endforeach
		</table>
	</section>
</body>
</html>
