<div class="container">

<h1>Nuevo departamento</h1>

<form action="<?=base_url()?>departamento/cPost" method="post">
	<label for="idd">Nombre:</label>
	<input id="idd" type="text" name="nombre"/><br/>

	<br/><br/>
	<input type="submit" value="Crear" class="btn btn-primary"/>
	<input type="reset" value="Volver" class="btn btn-primary"/>
	
	
</form>
 
 </div>