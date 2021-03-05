<div class="container">

<h1>New user</h1>

<form action="<?=base_url()?>user/cPost" method="post">
<label for="dni">DNI</label>
	<input id="dni" type="text" name="dni"/>
	<br/>
	<label for="name">Nombre</label>
	<input id="name" type="text" name="name"/>
	<br/>
	City born
	<select name="idCity">
		<?php foreach ($cities as $city):?>
		<option value="<?= $city->id?>">
			<?=$city->nombre?>
		</option>
		<?php endforeach;?>
	</select>
	<br/>
	City travel:
	<?php foreach ($cities as $city):?>
<input type="checkbox" name="idTravel[]" value="<?= $city->id?>" id="idT-<?= $city->id?>">
<label for="idT-<?= $city->id?>"><?=$city->nombre?></label>
		<?php endforeach;?>
		<br/>
	<input type="submit" value="Crear" class="btn btn-primary"/>
	<input type="reset" value="Cancelar" class="btn btn-primary"/>
</form>

</div>