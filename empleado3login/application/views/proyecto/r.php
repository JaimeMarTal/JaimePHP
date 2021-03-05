<div class="container">

<h1>Lista de proyectos</h1>

<a href="<?=base_url()?>proyecto/c"><button class="btn btn-primary" >Nuevo</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Volver</button></a>
<table class="table table-striped">
	<tr>
	    
		<th>Nombre</th>
		<th>Fecha inicio</th>
		<th>Fecha fin</th>
		<th>Empleados</th>
	</tr>
	
	<?php foreach ($proyectos as $proyecto): ?>
		<tr>
		<td><?= $proyecto->nombre?></td>
		<td><?= $proyecto->fecha_ini?></td>
		<td><?= $proyecto->fecha_fin?></td>
		
		<td> <form action="<?=base_url()?>proyecto/rc" method="post" >
				<input type="hidden" name="idProyecto" value="<?=$proyecto->id?>" >
				<button type="submit" class="btn btn-primary">
				(<?=sizeof($proyecto->ownEmpleadoproyectoList)?>)
				</button>
				</form>
				</td>
	
		
	</tr>
	<?php endforeach;?>
</table>

</div>

