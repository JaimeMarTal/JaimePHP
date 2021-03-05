<div class="container">

<h1>Modificar ciudad</h1>

<form action="<?=base_url()?>ciudad/uPost" method="post">
Elige ciudad
	<select class="form-control" name="idCiudad" >
<?php foreach ($ciudades as $ciudad):?>
		<option value="<?=$ciudad->id?>">
			<?= $ciudad->nombre?>
		</option>
<?php endforeach;?>
</select>
	
	<label for="nombre">Nuevo nombre:</label>
	<input id="nombre" type="text" name="nombre"/><br/>
	
	<input type="submit" value="Modificar" class="btn btn-primary"/>
	<input type="reset" value="Cancelar" class="btn btn-primary"/>
	
	
</form>
 
 </div>
