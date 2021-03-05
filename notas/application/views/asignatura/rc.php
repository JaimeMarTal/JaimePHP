<div class="container">

<h1>Listado de notas en <?=$asignatura?></h1>

<a href="<?=base_url()?>nota/c"><button class="btn btn-primary">Nueva</button></a>
<a href="<?=base_url()?>asignatura/r"><button class="btn btn-primary">Volver</button></a>

<table class="table table-striped table-hover">
	<tr>
		<th>Alumno</th>
		<th>Nota</th>
	</tr>
	
	<?php foreach ($notas as $nota): ?>
		<tr>
			<td><?= $nota->alumno->nombre?>_<?= $nota->alumno->apellido?></td>
			<td><?= $nota->nota?></td>
		</tr>
	<?php endforeach;?>
	
</table>
</div>
