<div class="container">

<h1>Lista de empleados</h1>

<a href="<?=base_url()?>empleado/c"><button class="btn btn-primary" >Nuevo</button></a>
<a href="<?=base_url()?>empleado/u1"><button class="btn btn-primary" >Modificar</button></a>
<a href="<?=base_url()?>empleado/d"><button class="btn btn-primary" >Borrar</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Volver</button></a>
<table class="table table-striped">
	<tr>
	    
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Telefono</th>
		<th>Ciudad</th>
		<th>Lenguajes</th>
	</tr>
	
	<?php foreach ($empleados as $empleado): ?>
		<tr>
		<td><?= $empleado->nombre?></td>
		<td><?= $empleado->apellido?></td>
		<td><?= $empleado->telefono?></td>
		<td><?= $empleado->ciudad!=null?$empleado->ciudad->nombre:'---'?></td>
		<td> <?php foreach ($empleado->ownConoceList as $conoce):?>
			<?= $conoce->lenguaje->nombre ?>
			<?php endforeach;?>
				</td>
	
		
	</tr>
	<?php endforeach;?>
</table>

</div>

