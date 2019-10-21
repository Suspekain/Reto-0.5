<!DOCTYPE html>
<html>
	<head>
        @include("layouts.head")
    </head>

<body id="bodyregistro">
	  		<header>
            @include("layouts.header")
        </header>


	<h2 id="rh">Crear nuevo producto</h2>
	<form id="formregistro">
		<dir id="datregistro">		
		<label class="trn" data-trn-key="nombre">Nombre: </label><input type="text" name="nombre"><br><br>
		<label class="trn" data-trn-key="imagen">imagen: </label><input type="file" name="imagendelproducto" alt="seleccione una imagen"><br><br>
		<label class="trn" data-trn-key="stock actual">Stock actual: </label><input type="number" name="stockactual"><br><br><br><br>
		</dir>

		<input type="submit" value="registrar producto" name="">

	</form><br><br><br><br><br><br><br><br>
	@include("layouts.footer")
</body>
