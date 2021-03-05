<div class="container">

<h1>Nuevo alumno</h1>

<form action="<?=base_url()?>alumno/cPost" method="post">
<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre"/>
	<br/>
	<label for="apellido">Apellido</label>
	<input id="apellido" type="text" name="apellido"/>
	<br/>
	
	<input type="submit" value="Crear" class="btn btn-primary"/>
	<input type="reset" value="Cancelar" class="btn btn-primary"/>
</form>

</div>