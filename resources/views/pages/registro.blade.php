<!DOCTYPE html>
<html>
	<head>
        @include("layouts.head")
    </head>

<body id="bodyregistro">

<<<<<<< HEAD
	  		<header>
            @include("layouts.header")
        </header>
=======
	@endsection
>>>>>>> f79cd655d8819048a0c7ef1a9df278734228b788


	<h2 id="rh">Crear nuevo producto</h2>
	<form id="formregistro">
<<<<<<< HEAD
		<dir id="datregistro">		
		<label class="trn" data-trn-key="nombre">Nombre: </label><input type="text" name="nombre"><br><br>
		<label class="trn" data-trn-key="imagen">imagen: </label><input type="file" name="imagendelproducto" alt="seleccione una imagen"><br><br>
		<label class="trn" data-trn-key="stock">Stock actual: </label><input type="number" name="stockactual"><br><br><br><br>
=======
		<dir id="datregistro">
			<label>Nombre: </label><input type="text" name="nombre"><br><br>
			<label>imagen: </label><input type="file" name="imagendelproducto" alt="seleccione una imagen"><br><br>
			<label>Stock actual: </label><input type="number" name="stockactual"><br><br><br><br>
>>>>>>> f79cd655d8819048a0c7ef1a9df278734228b788
		</dir>

		<input type="submit" value="registrar producto" name="">

	</form><br><br><br><br><br><br><br><br>
	@include("layouts.footer")
</body>
