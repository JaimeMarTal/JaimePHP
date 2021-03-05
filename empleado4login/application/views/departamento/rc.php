<div class="container">

<h1>Listado de empleados en <?=$departamento?></h1>

<a href="<?=base_url()?>departamento/c"><button class="btn btn-primary">Nuevo</button></a>
<a href="<?=base_url()?>departamento/r"><button class="btn btn-primary">Volver</button></a>

<table class="table table-striped table-hover">
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Numero de proyectos</th>
	</tr>
	
	<?php foreach ($empleados as $empleado): ?>
		<tr>
			<td><?= $empleado->nombre?></td>
			<td><?= $empleado->apellido?></td>
			<td>(<?=sizeof($empleado->ownEmpleadoproyectoList)?>)</td>
		</tr>
	<?php endforeach;?>
	
</table>
</div>
