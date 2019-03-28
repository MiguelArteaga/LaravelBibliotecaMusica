
<form method="post" action="/artistas"> 
	{{ csrf_field() }}
	<div>
		<label>Nombre</label>
		<input type="text" name="nombre">
	</div>
	<div>
		<label>Apellidos</label>
		<input type="text" name="apellidos">
	</div>
	<div>
		<label>Genero</label>
		<input type="text" name="genero">
	</div>

	<input type="submit" name="Insertar" value="Insertar">

</form>