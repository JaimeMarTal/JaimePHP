<div class="container">

<h1>List of users</h1>

<a href="<?=base_url()?>user/c"><button class="btn btn-primary" >New</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Back</button></a>
<table class="table table-striped">
	<tr>
	    <th>DNI</th>
		<th>Name</th>
		<th>Country(born)</th>
		<th>Country(travel)</th>
	</tr>
	
	<?php foreach ($users as $user): ?>
		<tr>
		<td><?= $user->dni?></td>
		<td><?= $user->nombre?></td>
		<td><?= $user->born!=null?$user->born->nombre:'--'?></td>
		<td>
			<?php foreach ($user->ownTravelList as $travel):?>
			<?= $travel->city->nombre ?>
			<?php endforeach;?>
		</td>
	</tr>
	<?php endforeach;?>
</table>

</div>

