<div class="container">
<form action="<?=base_url()?>boleto/addPost" method="post">
	Número 
	<input type="number" min=0 max=99999 name="numero"/>
	<br/>

	Participación (euros)
	<input type="number" name="euros"/>
	<br/>
	
	<input type="submit"/>
	
</form>
</div>