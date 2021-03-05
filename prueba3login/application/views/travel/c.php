<div class="container">

<h1>Register travel</h1>
<form action="<?=base_url()?>travel/cPost" method="post">
<div class="form-group">
User

	<select class="form-control" name="idUser" >
		<?php foreach ($users as $user):?>
		<option value="<?=$user->id?>">
			<?= $user->dni?>(<?= $user->nombre?>)
		</option>
		<?php endforeach;?>
	</select><br/>
	</div>
	
	<div class="form-check">
City travel
			<?php foreach ($cities as $city):?>
<input type="checkbox" name="idTravel[]" value="<?= $city->id?>" id="idT-<?= $city->id?>">
<label for="idT-<?= $city->id?>"><?=$city->nombre?></label>
		<?php endforeach;?><br/><br/>
		</div>

<a href="<?=base_url()?>user/c"><button class="btn btn-primary" >New</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Back</button></a>
</form>
</div>

