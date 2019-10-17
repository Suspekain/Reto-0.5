<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<header>
	@yield("header")
      <img class="ametzondologo" src="{{url('/img/ametzondologo.png')}}" alt="Ametzondo logoa"/>
      <img class="candado" src="{{url('/img/candado.png')}}" alt="candado"/>
  </header>











    <footer>
    @yield("footer")
    <div id="mapa">
      <iframe src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=Centro%20comercial%20en%20Saint-Pierre-d&apos;Irube%2C%20Francia+(Ametzondo)&ie=UTF8&t=&z=15&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
      </iframe>
    </div>
  </footer>

</body>
</html>