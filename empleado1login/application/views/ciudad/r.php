<div class="container">

<h1>Lista de ciudades</h1>

<a href="<?=base_url()?>ciudad/c"><button class="btn btn-primary">Nueva</button></a>
<a href="<?=base_url()?>ciudad/d"><button class="btn btn-primary">Modificar</button></a>
<a href="<?=base_url()?>ciudad/u"><button class="btn btn-primary">Eliminar</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Volver</button></a>

<table class="table table-striped table-hover">
	<tr>
		<th>Nombre</th>
		<th>Empleados</th>
	</tr>
	
	<?php foreach ($ciudades as $ciudad): ?>
		<tr>
			<td><?= $ciudad->nombre?></td>
			<td>
				(<?=sizeof($ciudad->ownEmpleadoList)?>)
				</td>
		</tr>
	<?php endforeach;?>
	
</table>
</div>
