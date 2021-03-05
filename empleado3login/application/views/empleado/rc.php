<div class="container">

<h1>Listado de proyectos de <?=$empleado?></h1>

<a href="<?=base_url()?>proyecto/rc"><button class="btn btn-primary">Nuevo</button></a>
<a href="<?=base_url()?>empleado/r"><button class="btn btn-primary">Volver</button></a>

<table class="table table-striped table-hover">
	<tr>
		<th>Nombre</th>
		<th>Fecha inicio</th>
		<th>Fecha fin</th>
	</tr>
	
	<?php foreach ($proyectos as $proyecto): ?>
		<tr>
			<td><?= $proyecto->nombre?></td>
			<td><?= $proyecto->fecha_ini?></td>
			<td><?= $proyecto->fecha_fin?></td>
		</tr>
	<?php endforeach;?>
	
</table>
</div>
