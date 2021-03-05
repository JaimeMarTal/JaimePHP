<div class="container">

<h1>Lista de lenguajes</h1>

<a href="<?=base_url()?>lenguaje/c"><button class="btn btn-primary">Nueva</button></a>
<a href="<?=base_url()?>lenguaje/d"><button class="btn btn-primary">Modificar</button></a>
<a href="<?=base_url()?>lenguaje/u"><button class="btn btn-primary">Eliminar</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Volver</button></a>

<table class="table table-striped table-hover">
	<tr>
		<th>Nombre</th>
		<th>Empleados</th>
	</tr>
	
	<?php foreach ($lenguajes as $lenguaje): ?>
		<tr>
			<td><?= $lenguaje->nombre?></td>
			<td>
				(<?=sizeof($lenguaje->ownEmpleadoList)?>)
				</td>
		</tr>
	<?php endforeach;?>
	
</table>
</div>
