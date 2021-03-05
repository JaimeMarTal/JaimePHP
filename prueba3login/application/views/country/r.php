<div class="container">

<h1>Lista de países</h1>

<a href="<?=base_url()?>country/c"><button class="btn btn-primary">Nueva</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Volver</button></a>

<table class="table table-striped table-hover">
	<tr>
		<th>Name</th>
		<th>Number of cities</th>
	</tr>
	
	<?php foreach ($countries as $pais): ?>
		<tr>
			<td><?= $pais->nombre?></td>
			<td><?= sizeof($pais->ownCityList)?></td>
		</tr>
	<?php endforeach;?>
</table>
</div>
