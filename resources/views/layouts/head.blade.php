<meta charset="utf-8">
<title>Ametzondo</title>
<link rel="stylesheet" type="text/css" href="/css/estilo.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/js/jquery.translate.js"></script>
<script src="/js/translatejs.jquery.json"></script>
<script src="/js/traduccion.js"></script>

<script type="text/javascript">

function cambiaridioma(idioma) {
  if (idioma == "eus") {
    let translator = $('body').translate({lang: "eus", t: dict});
    translator.lang("eus");
  } else if (idioma == "es"){
    let translator = $('body').translate({lang: "es", t: dict});
    translator.lang("es");
  } else if (idioma == "en") {
    let translator = $('body').translate({lang: "en", t: dict});
    translator.lang("en");
  }
}
</script>