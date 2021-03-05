<div class="container">

<h1>Nuevo empleado</h1>

<form action="<?=base_url()?>empleado/cPost" method="post">
<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre"/>
	<br/>
	<label for="apellido">Apellido</label>
	<input id="apellido" type="text" name="apellido"/>
	<br/>
	<label for="tlf">Telefono</label>
	<input id="tlf" type="text" name="tlf"/>
	<br/>
	<label for="pwd">Contraceña</label>
	<input id="pwd" type="text" name="pwd"/>
	<br/>
	Ciudad

	<select class="form-control" name="idCiudad" >
		<?php foreach ($ciudades as $ciudad):?>
		<option value="<?=$ciudad->id?>">
			<?= $ciudad->nombre?>
		</option>
		<?php endforeach;?>
	</select><br/>
	Lenguajes de programacion

	<select class="form-control" name="idLenguaje[]" multiple="multiple">
		<?php foreach ($lenguajes as $lenguaje):?>
		<option value="<?=$lenguaje->id?>">
			<?= $lenguaje->nombre?>
		</option>
		<?php endforeach;?>
	</select><br/>
	<input type="submit" value="Crear" class="btn btn-primary"/>
	<input type="reset" value="Cancelar" class="btn btn-primary"/>
</form>

</div>