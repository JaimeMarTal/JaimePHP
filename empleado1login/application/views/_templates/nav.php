	<nav class="container navbar navbar-expand-sm">

		<a class="navbar-brand" href="<?=base_url()?>"> 
			<img src="<?=base_url()?>assets/img/logo.png" alt="INICIO" style="width: 40px;">
		</a>

		<ul class="navbar-nav">

    		    	
    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Empleado</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>empleado/r">Listar</a>
    			</div>
    		</li>
    		
    		<li class="nav-item dropdown">
    		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Ciudad</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>ciudad/r">Listar</a>
    			</div>
    		</li>
	 
    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Lenguaje de programacion</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>lenguaje/r">Listar</a>
    			</div>
    		</li>
	 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Perfil</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>empleado/l">Login</a>

    			</div>
    		</li>
   		</ul>
	</nav>
