<div class="container">

<h1>Elige lenguaje que quieres eliminar</h1>

<form action="<?=base_url()?>ciudad/dPost" method="post">
<select class="form-control" name="idCiudad" >
		<?php foreach ($lenguajes as $lenguaje):?>
		<option value="<?=$lenguaje->id?>">
			<?= $lenguaje->nombre?>
		</option>
<?php endforeach;?>
</select>
<br/>
	<input type="submit" value="Eliminar" class="btn btn-primary"/>
	<a href="<?=base_url()?>"><button class="btn btn-primary">Volver</button></a>
</form>
 
 </div>

