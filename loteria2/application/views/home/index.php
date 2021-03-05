<div class="container">
	<h1>Registro de lotería</h1>

	<?php if ($login):?>
	<a href="<?= base_url()?>boleto/add"><button>Añadir decimo</button></a> 
	<br/>
	<a href="<?= base_url()?>participacion/intercambiar"><button>Compartir participación</button></a> 
	<br/>
	<a href="#"><button>Regalar participación (En cnstrucción)</button></a> 
	<!-- <a href="<?= base_url()?>participacion/regalar"><button>Regalar participación</button></a> -->
	<br/>
	<a href="#"><button>Registrar premio (En cnstrucción)</button></a>
	<!-- <a href="<?= base_url()?>boleto/addPremio"><button>Registrar premio</button></a> --> 
	<br/>
	<a href="#"><button>Estado de decimos (En cnstrucción)</button></a>
	<!-- <a href="<?= base_url()?>boleto/addPremio"><button>Registrar premio</button></a>  --> 
	<br/>
	<?php else:?>
	Haz login para mas funciones
	<?php endif;?>
</div>
