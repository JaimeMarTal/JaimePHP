<div class="container">

<h1>Escribe tus datos</h1>

<form action="<?=base_url()?>empleado/lPost" method="post">
<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre"/>
	<br/>
	<label for="apellido">Apellido</label>
	<input id="apellido" type="text" name="apellido"/>
	<br/>
	<label for="pwd">Contraceña</label>
	<input id="pwd" type="password" name="pwd"/>
	<br/>
	<input type="submit" value="Entrar" class="btn btn-primary"/>
	<input type="reset" value="Borrar" class="btn btn-primary"/>
</form>

</div>
