<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
	<h1> Page access is forbidden!</h1>
<?php else : ?>
	<?php
	$query = "SELECT first_name, last_name, email, gender, nationality, permission FROM users";
	require_once DATABASE_CONTROLLER; 

	$users = getList($query);
	?>

	<?php if(count($users) <= 0):  ?>
		<h1>No users found in the database.</h1>
	<?php else : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">First Name</th>
					<th scope="col">Last Name</th>
					<th scope="col">Email</th>
					<th scope="col">Gender</th>
					<th scope="col">Nationality</th>
					<th scope="col">Permission</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($users as $u) : ?>
					<?php $i++;?>
					<tr>
						<th scope="row"><?=$i ?></th>
						<td><?=$u['first_name'] ?></td>
						<td><?=$u['last_name'] ?></td>
						<td><?=$u['email'] ?></td>
						<td><?=$u['gender'] ?></td>
						<td><?=$u['nationality'] ?></td>
						<td><?=$u['permission'] ?></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	<?php endif; ?>
<?php endif; ?>

