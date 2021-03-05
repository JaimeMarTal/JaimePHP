<div class="container">

<h1>Elige empleado que quieres eliminar</h1>

<form action="<?=base_url()?>empleado/dPost" method="post">
<select class="form-control" name="idEmpleado" >
		<?php foreach ($empleados as $empleado):?>
		<option value="<?=$empleado->id?>">
			<?= $empleado->nombre?>_<?= $empleado->apellido?>
		</option>
<?php endforeach;?>
</select>
<br/>
	<input type="submit" value="Eliminar" class="btn btn-primary"/>
	<a href="<?=base_url()?>"><button class="btn btn-primary">Volver</button></a>
</form>
 
 </div>

