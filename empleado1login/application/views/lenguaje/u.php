<div class="container">

<h1>Modificar lenguaje</h1>

<form action="<?=base_url()?>lenguaje/uPost" method="post">
Elige lenguaje
	<select class="form-control" name="idLenguaje" >
<?php foreach ($lenguajes as $lenguaje):?>
		<option value="<?=$lenguaje->id?>">
			<?= $lenguaje->nombre?>
		</option>
<?php endforeach;?>
</select>
	
	<label for="nombre">Nuevo nombre:</label>
	<input id="nombre" type="text" name="nombre"/><br/>
	
	<input type="submit" value="Modificar" class="btn btn-primary"/>
	<input type="reset" value="Cancelar" class="btn btn-primary"/>
	
	
</form>
 
 </div>
