<div class="container">

<h1>Lista de empleados</h1>

<a href="<?=base_url()?>empleado/c"><button class="btn btn-primary" >Nuevo</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Volver</button></a>
<table class="table table-striped">
	<tr>
	    
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Departamento</th>
		<th>Proyectos</th>
	</tr>
	
	<?php foreach ($empleados as $empleado): ?>
		<tr>
		<td><?= $empleado->nombre?></td>
		<td><?= $empleado->apellido?></td>
		<td><?= $empleado->departamento->nombre?></td>
		<td> <form action="<?=base_url()?>empleado/rc" method="post" >
				<input type="hidden" name="idEmpleado" value="<?=$empleado->id?>" >
				<button type="submit" class="btn btn-primary">
				(<?=sizeof($empleado->ownEmpleadoproyectoList)?>)
				</button>
				</form>
				</td>
	
		
	</tr>
	<?php endforeach;?>
</table>

</div>

