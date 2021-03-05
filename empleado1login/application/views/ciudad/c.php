<div class="container">

<h1>Nueva ciudad</h1>

<form action="<?=base_url()?>ciudad/cPost" method="post">
	<label for="nombre">Nombre:</label>
	<input id="nombre" type="text" name="nombre"/><br/>
	<input type="submit" value="Crear" class="btn btn-primary"/>
	<input type="reset" value="Volver" class="btn btn-primary"/>
	
	
</form>
 
 </div>