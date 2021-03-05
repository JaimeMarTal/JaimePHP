<div class="container">

<h1>Esignar empleados</h1>
<div class="form-group">
<form action="<?=base_url()?>proyecto/uPost" method="post">
Elige el proyecto
	<select class="form-control" name="idProyecto" >
		<?php foreach ($proyectos as $proyecto):?>
		<option value="<?=$proyecto->id?>">
			<?= $proyecto->nombre?>
		</option>
		<?php endforeach;?>
	</select><br/>
Asignar nuevo empleado
	<select class="form-control" name="idEmpleado">
		<?php foreach ($empleados as $empleado):?>
		<option value="<?=$empleado->id?>">
			<?= $empleado->nombre?>_<?= $empleado->apellido?>
		</option>
		<?php endforeach;?>
	</select><br/>
<a href="<?=base_url()?>proyecto/u"><button class="btn btn-primary" >Guardar</button></a>
<a href="<?=base_url()?>"><button type="reset" class="btn btn-primary">Limpiar</button></a>
</form>
</div>
</div>

