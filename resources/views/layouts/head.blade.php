<meta charset="utf-8">
<title>Ametzondo</title>
<link rel="stylesheet" type="text/css" href="/css/estilo.css">
<script href="js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.translate.js"></script>
<script type="text/javascript">

	
function cambiareus(){
	var translator = $("body").translate({lang: "eus", t :dict});	
}
function cambiares(){
	var translator = $("body").translate({lang: "es", t :dict});	
}
function cambiaren(){
	var translator = $("body").translate({lang: "en", t :dict});	
}
function cambiarfr(){
	var translator = $("body").translate({lang: "fr", t :dict});	
}

	var dict = {
		"eliminar":{
		es:"eliminar",
		en:"delete",
		eus:"ezabaty",
		fr:"effacer"
		},
		"nombre":{
		es:"nombre",
		en:"name",
		eus:"izena",
		fr:"nom"
		},
		"imagen":{
		es:"imagen",
		en:"image",
		eus:"irudi",
		fr:"image"
		},
		"stock":{
		es:"stock actual",
		en:"current stock",
		eus:"gaur egungo stocka",
		fr:"stock actuel"
		}
	}
</script>