<div class="container">
	<h1>Lotería familiar</h1>
	
	<p>Repartiendo millones desde 2019</p>

	<?php if ($login):?>
	<a href="<?= base_url()?>boleto/add"><button>Añadir boleto</button></a> 
	<br/>
	<a href="<?= base_url()?>participacion/intercambiar"><button>Intercambiar participación</button></a> 
	<br/>
	<a href="<?= base_url()?>participacion/regalar"><button>Regalar participación</button></a> 
	<br/>
	<a href="<?= base_url()?>boleto/addPremio"><button>Registrar premio</button></a> 
	<br/>
	<a href="<?= base_url()?>boleto/estado"><button>Ver estado boletos</button></a> 
	<br/>
	<?php else:?>
	Haz login para utilizar la aplicación
	<?php endif;?>
</div>
