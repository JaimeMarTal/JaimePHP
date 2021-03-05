<div class="container">

<h1>List of cities</h1>

<a href="<?=base_url()?>city/c"><button class="btn btn-primary">New</button></a>
<a href="<?=base_url()?>"><button class="btn btn-primary">Back</button></a>

<table class="table table-striped table-hover">
	<tr>
		<th>Name</th>
		<th>Country</th>
	</tr>
	
	<?php foreach ($cities as $city): ?>
		<tr>
			<td><?= $city->nombre?></td>
			<td><?= $city->country!=null?$city->country->nombre:'--'?></td>
		</tr>
	<?php endforeach;?>
	
</table>
</div>
