<div class="container">

<h1>Listado de empleado del proyecto <?=$proyecto?></h1>

<a href="<?=base_url()?>proyecto/rc"><button class="btn btn-primary">Nuevo</button></a>
<a href="<?=base_url()?>proyecto/r"><button class="btn btn-primary">Volver</button></a>

<table class="table table-striped table-hover">
	<tr>
		<th>Nombre y apellido</th>
		<th>Departamento</th>
	</tr>
	
	<?php foreach ($empleados as $empleado): ?>
		<tr>
			<td><?= $empleado->nombre?>_<?= $empleado->apellido?></td>
			<td><?= $empleado->departamento->nombre?></td>
		</tr>
	<?php endforeach;?>
	
</table>
</div>
