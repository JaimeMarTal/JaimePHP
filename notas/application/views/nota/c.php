<div class="container">

<h1>Nueva nota</h1>
<form action="<?=base_url()?>nota/cPost" method="post">
<div class="form-group">
Nota: 
<input type="number" name="nota" required="required" min="1" max="10"/>	
<br/>
<br/>
Alumno

	<select class="form-control" name="idAlumno" >
		<?php foreach ($alumnos as $alumno):?>
		<option value="<?=$alumno->id?>">
			<?= $alumno->nombre?>_<?= $alumno->apellido?>
		</option>
		<?php endforeach;?>
	</select><br/>
Asignatura

	<select class="form-control" name="idAsignatura" >
		<?php foreach ($asignaturas as $asignatura):?>
		<option value="<?=$asignatura->id?>">
			<?= $asignatura->nombre?>
		</option>
		<?php endforeach;?>
	</select><br/>
	</div>
	
	<div class="form-check">
<br/>
		</div>

<a href="<?=base_url()?>alumno/c"><button class="btn btn-primary" >Guardar</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Volver</button></a>
</form>
</div>

