<div class="container">
	<form action="<?=base_url()?>empleado/cpost" method="post">
	<label for="nombre">Nombre: </label>
	<input type="text" name="nombre" id="nombre"/><br>
	
	<label for="apellidos">Apellidos: </label>
	<input type="text" name="apellidos" id="apellidos"/><br>
	
	<label for="telefono">Teléfono: </label>
	<input type="text" name="telefono" id="telefono"/><br>
	
	<label for="ciudad">Ciudad de nacimiento: </label>
	<input type="text" name="ciudad" id="ciudad"/><br>
	
	
	Lenguajes de programación: 
	PHP <input type="checkbox" name="lenguajes[]" value="php"/>
	JAVA <input type="checkbox" name="lenguajes[]" value="java"/>
	JAVASCRIPT <input type="checkbox" name="lenguajes[]" value="javascript"/>
	PYTHON <input type="checkbox" name="lenguajes[]" value="python"/>
	C++ <input type="checkbox" name="lenguajes[]" value="c++"/>
	
	<br><br> 
	<input type="submit" value="Guardar empleado"/>
	</form>
</div>
