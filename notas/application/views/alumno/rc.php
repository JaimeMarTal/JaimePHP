<div class="container">

<h1>Listado de notas de alumno <?=$alumno?></h1>

<a href="<?=base_url()?>nota/c"><button class="btn btn-primary">Nueva</button></a>
<a href="<?=base_url()?>alumno/r"><button class="btn btn-primary">Volver</button></a>

<table class="table table-striped table-hover">
	<tr>
		<th>Asignatura</th>
		<th>Nota</th>
	</tr>
	
	<?php foreach ($notas as $nota): ?>
		<tr>
			<td><?= $nota->asignatura->nombre?></td>
			<td><?= $nota->nota?></td>
		</tr>
	<?php endforeach;?>
	
</table>
</div>
