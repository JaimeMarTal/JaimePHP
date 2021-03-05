<div class="container">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Nombre</th><th>Apellidos</th><th>Teléfono</th><th>Ciudad</th><th>Lenguajes</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($empleados as $empleado):?>
				<tr>
    				<td><?=$empleado->nombre?></td>
    				<td><?=$empleado->apellidos?></td>
    				<td><?=$empleado->telefono?></td>
    				<td><?=$empleado->ciudad->nombre?></td>
    				<td>
    					<?php $sinComaFinal='';?>
    					<?php foreach($empleado->ownSabeList as $sabe):?>
    					<?php $sinComaFinal.=$sabe->lenguaje->nombre.','?>
    					<?php endforeach;?>
    					<?= rtrim($sinComaFinal, ','); ?>
    					
    					<!--<?php foreach($empleado->aggr('ownSabeList','lenguaje') as $lenguaje):?>
    					<?=$lenguaje->nombre?>,
    					<?php endforeach;?>-->
    				</td>
    				</tr>
			<?php endforeach;?>
		</tbody>	
	</table>

</div>