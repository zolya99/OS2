


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?=PUBLIC_DIR.'style.css'?>">



<body>
	<div id="data">
		<?php 
		$query = "SELECT id, first_name, last_name, email, gender, nationality FROM user WHERE id = ':id'";
		require_once DATABASE_CONTROLLER;
		$user = getRecord($query);
		?>
		Name: <?=$user['first_name'] . ' ' . $user['last_name'] ?>
		<table class="table table-striped">
			<thead>
				<tr>
				
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Gender</th>
					<th scope="col">Nationality</th>
					
					
				</tr>

			</thead>
			<tbody>
					<tr>
						
						<td></td>
						<td><?=$user['email'] ?></td>
						<td><?=$user['gender'] == 0 ? 'Female' : ($user['gender'] == 1 ? 'Male' : 'Other') ?></td>
						<td><?=$user['nationality'] ?></td>
						
		

