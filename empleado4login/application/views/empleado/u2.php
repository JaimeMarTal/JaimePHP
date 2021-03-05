<div class="container">

<h1>Modificar empleado</h1>

<form action="<?=base_url()?>empleado/uPost" method="post">
<label for="nombre">Nombre</label>
	<input id="nombre" type="text" name="nombre" value="<?=$empleado->nombre?>"/>
	<br/>
	<label for="apellido">Apellido</label>
	<input id="apellido" type="text" name="apellido" value="<?=$empleado->apellido?>"/>
	<br/>
	<label for="tlf">Telefono</label>
	<input id="tlf" type="text" name="tlf" value="<?=$empleado->telefono?>"/>
	<br/>
	<input id="id" type="hidden" name="id" value="<?=$empleado->id?>"/>
	
	Ciudad

	<select class="form-control" name="idCiudad" >
		<?php foreach ($ciudades as $ciudad){
		
if($ciudad->id==$empleado->ciudad_id){
		    echo <<<UNO
		    <option value="$ciudad->id" selected="selected">
		    $ciudad->nombre </option>
UNO;
		}
		else{
		    echo <<<DOS
		    <option value="$ciudad->id">
		    $ciudad->nombre </option>
DOS;
		}}
?>
	</select><br/>
	Lenguajes de programacion

	<select class="form-control" name="idLenguaje[]" multiple="multiple">
			<?php foreach ($lenguajes as $lenguaje){
			    $conocidos=[];
			    foreach ($empleado->ownConoceList as $conoce){
			        array_push($conocidos, $conoce->lenguaje_id);}
			        if(in_array($lenguaje->id,$conocidos)){
		    echo <<<UNO
		    <option value="$lenguaje->id" selected="selected">
		    $lenguaje->nombre </option>
UNO;
		}
		else{
		    echo <<<DOS
		    <option value="$lenguaje->id">
		    $lenguaje->nombre </option>
DOS;
		}}
?>
	</select><br/>
	<input type="submit" value="Modificar" class="btn btn-primary"/>
	<input type="reset" value="Cancelar" class="btn btn-primary"/>
</form>

</div>