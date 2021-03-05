<div class="container">

<h1>Lista de departamentos</h1>

<a href="<?=base_url()?>departamento/c"><button class="btn btn-primary">Nuevo</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Volver</button></a>

<table class="table table-striped table-hover">
	<tr>
		<th>Nombre</th>
		<th>Empleados</th>
	</tr>
	
	<?php foreach ($departamentos as $departamento): ?>
		<tr>
			<td><?= $departamento->nombre?></td>
			<td> <form action="<?=base_url()?>departamento/rc" method="post" >
				<input type="hidden" name="idDepartamento" value="<?=$departamento->id?>" >
				<button type="submit" class="btn btn-primary">
				(<?=sizeof($departamento->ownEmpleadoList)?>)
				</button>
				</form>
				</td>
		</tr>
	<?php endforeach;?>
	
</table>
</div>
