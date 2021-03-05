<div class="container">

<h1>Nuevo empleado</h1>

<form action="<?=base_url()?>empleado/cPost" method="post">
<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre"/>
	<br/>
	<label for="apellido">Apellido</label>
	<input id="apellido" type="text" name="apellido"/>
	<br/>
	
	<label for="pwd">Contraceña</label>
	<input id="pwd" type="password" name="pwd"/>
	<br/>
	Departamento

	<select class="form-control" name="idDepartamento" >
		<?php foreach ($departamentos as $departamento):?>
		<option value="<?=$departamento->id?>">
			<?= $departamento->nombre?>
		</option>
		<?php endforeach;?>
	</select><br/>
	<input type="submit" value="Crear" class="btn btn-primary"/>
	<input type="reset" value="Cancelar" class="btn btn-primary"/>
</form>

</div>



































