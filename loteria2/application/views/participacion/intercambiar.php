<div class="container">
<h1>Intercambiar decimo</h1>
<form>
	Decimo
	<select name="boletoPropio">
    	<?php foreach ($persona->ownBoletoList as $boleto): ?>
    	<option value="<?= $boleto->numero ?>">
    		<?= $boleto->numero ?>
    	</option>
    	<?php endforeach;?>
	</select>
	
	<br/>
	Cantidad
	<input type="number" name="cantidad"/>
	<br/>
	
		Decimo
	<select name="boletoAjeno">
    	<?php foreach ($boletosAjenos as $boletoAjeno): ?>
    	<option value="<?= $boletoAjeno->id ?>">
    		<?= $boletoAjeno->numero ?> (<?= $boletoAjeno->persona->nombre ?>) 
    	</option>
    	<?php endforeach;?>
	</select>
	
</form>
</div>