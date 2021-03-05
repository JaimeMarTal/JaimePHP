<div class="container">

<h1>New country</h1>

<form action="<?=base_url()?>country/cPost" method="post">
	<label for="idp">Name</label>
	<input id="idp" type="text" name="nombre"/><br/>
	<input type="submit" value="Crear" class="btn btn-primary"/>
	<input type="reset" value="Cancelar" class="btn btn-primary"/>
</form>
 
 </div>