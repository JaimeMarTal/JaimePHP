<div class="container">

	<form action="<?=base_url()?>empleado/uPost" method="post">
	<input type="hidden" name="idEmpleado" value="<?=$empleado->id?>"/>
	<label for="nombre">Nombre: </label>
	<input type="text" name="nombre" id="nombre" value="<?=$empleado->nombre?>"/><br>
	
	<label for="apellidos">Apellidos: </label>
	<input type="text" name="apellidos" id="apellidos" value="<?=$empleado->apellidos?>"/><br>
	
	<label for="telefono">Teléfono: </label>
	<input type="text" name="telefono" id="telefono" value="<?=$empleado->telefono?>"/><br>
	
	<label for="ciudad">Ciudad de nacimiento: </label>
	<input type="text" name="ciudad" id="ciudad" value="<?=$empleado->ciudad->nombre?>"/><br>
	Lenguajes de programación:
	
	<?php 
	    $listaLenguajes=[];
    	foreach ($empleado->ownSabeList as $sabe){
    	   array_push($listaLenguajes, $sabe->lenguaje->nombre);
    	}
	?>
	
	PHP <input type="checkbox" name="lenguajes[]" value="php" <?=in_array('php', $listaLenguajes)?'checked':''?>/>
	JAVA <input type="checkbox" name="lenguajes[]" value="java" <?=in_array('java', $listaLenguajes)?'checked':''?>/>
	JAVASCRIPT <input type="checkbox" name="lenguajes[]" value="javascript" <?=in_array('javascript', $listaLenguajes)?'checked':''?>/>
	PYTHON <input type="checkbox" name="lenguajes[]" value="python" <?=in_array('python', $listaLenguajes)?'checked':''?>/>
	C++ <input type="checkbox" name="lenguajes[]" value="c++" <?=in_array('c++', $listaLenguajes)?'checked':''?>/>

	<br>
	<input type="submit" value="Modificar datos empleado"/>
	</form>
</div>