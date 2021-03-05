<div class="container">

<h1>Nuevo proyecto</h1>
<form action="<?=base_url()?>proyecto/cPost" method="post">
<div class="form-group">
<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre"/>
	<br/>
<label for="fecha_ini">Fecha inicio</label>
	<input id="fecha_ini" type="date" name="fecha_ini"/>
	<br/>
<label for="fecha_fin">Fecha fin</label>
	<input id="fecha_fin" type="date" name="fecha_fin"/>
	<br/>
<a href="<?=base_url()?>proyecto/c"><button class="btn btn-primary" >Guardar</button></a>
<a href="<?=base_url()?>"><button type="reset" class="btn btn-primary">Limpiar</button></a>
</form>
</div>

