<div class="container">

<h1>Lista de asignaturas</h1>

<a href="<?=base_url()?>city/c"><button class="btn btn-primary">Nueva</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Volver</button></a>

<table class="table table-striped table-hover">
	<tr>
		<th>Nombre</th>
		<th>Notas</th>
	</tr>
	
	<?php foreach ($asignaturas as $asignatura): ?>
		<tr>
			<td><?= $asignatura->nombre?></td>
			<td> <form action="<?=base_url()?>asignatura/rc" method="post" >
				<input type="hidden" name="idAs" value="<?=$asignatura->id?>" >
				<button type="submit" class="btn btn-primary">
				(<?=$asignatura->ownNotaList!=[]?max($asignatura->ownNotaList)->nota:0?>...<?= $asignatura->ownNotaList!=[]?min($asignatura->ownNotaList)->nota:0?>)
				</button>
				</form>
				</td>
		</tr>
	<?php endforeach;?>
	
</table>
</div>
