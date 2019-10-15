@extends("layouts.head")
<body>
	@section("header")

  	@endsection
	<section>
		@foreach($productos as $p)
			<p>{{$p->ProductoNombre}}</p>
		@endforeach
	</section>
	@section("footer")


	@endsection
</body>
</html>