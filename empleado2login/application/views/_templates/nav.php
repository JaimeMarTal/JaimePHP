
<div class="container">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=base_url()?>">C.C.U</a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<?php session_start_seguro();?>
					<?php if(!isset($_SESSION['usuario'])):?>
					<li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#"> EMPLEADO<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?=base_url()?>empleado/rAnonimo">LISTAR</a></li>
						</ul>
					</li>
					<li><a href="<?= base_url() ?>home/login">LOGIN</a></li>
					<li><a href="<?= base_url() ?>home/registrar">REGISTRAR</a></li>
					<?php else:?>
					<li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#"> EMPLEADO<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?=base_url()?>empleado/c">CREAR</a></li>
							<li><a href="<?=base_url()?>empleado/r">LISTAR -> MODIFICAR Y BORRAR</a></li>
						</ul>
					</li>
					<?php endif;?>
				</ul>
				 <?php if(isset($_SESSION['usuario'])):?>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a>Bienvenid@ <?= $_SESSION['usuario'] ?></a></li>
                      <li><a href="<?= base_url() ?>home/logout">LOGOUT</a></li>
                    </ul>
                <?php endif;?>

			</div>
		</div>
	</nav>
</div>
<br>

