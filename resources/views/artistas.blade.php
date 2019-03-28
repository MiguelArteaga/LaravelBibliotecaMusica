<h1>Artistas</h1>

@foreach($artistas as $artista)
	<!--{{$artista->Nombre}}-->
	<p>{{$artista->Nombre}}</p>  
@endforeach

<a href="insertarArtista">Insertar</a>

