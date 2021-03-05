<div class="container">

<h1>New city</h1>

<form action="<?=base_url()?>city/cPost" method="post">
	<label for="idp">Name</label>
	<input id="idp" type="text" name="nombre"/><br/>
	Country
	<select name="idCountry">
		<?php foreach ($countries as $country):?>
		<option value="<?= $country->id?>">
			<?=$country->nombre?>
		</option>
		<?php endforeach;?>
	</select>
	<br/><br/>
	<input type="submit" value="Crear" class="btn btn-primary"/>
	<input type="reset" value="Cancelar" class="btn btn-primary"/>
	
	
</form>
 
 </div>