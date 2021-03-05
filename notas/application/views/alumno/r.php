<div class="container">

<h1>List of users</h1>

<a href="<?=base_url()?>alumno/c"><button class="btn btn-primary" >Nuevo</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Volver</button></a>
<table class="table table-striped">
	<tr>
	    
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Notas</th>
	</tr>
	
	<?php foreach ($alumnos as $alumno): ?>
		<tr>
		<td><?= $alumno->nombre?></td>
		<td><?= $alumno->apellido?></td>
		<td> <form action="<?=base_url()?>alumno/rc" method="post" >
				<input type="hidden" name="idAlumno" value="<?=$alumno->id?>" >
				<button type="submit" class="btn btn-primary">
				(<?=$alumno->ownNotaList!=[]?max($alumno->ownNotaList)->nota:0?>...<?= $alumno->ownNotaList!=[]?min($alumno->ownNotaList)->nota:0?>)
				</button>
				</form>
				</td>
	
		
	</tr>
	<?php endforeach;?>
</table>

</div>

