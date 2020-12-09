<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
	<h1>Page access is forbidden!</h1>
<?php else : ?>
<?php 
	$query = "SELECT megnevezes, fejleszto, kiado, kiadas_eve, letoltesek_szama FROM programok";
	require_once DATABASE_CONTROLLER;
	$programs = getList($query);
	?>
	<?php if(count($programs) <= 0) : ?>
		<h1>No programs found in the database!</h1>
	<?php else : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Megnevezés</th>
					<th scope="col">Fejlesztő</th>
					<th scope="col">Kiadás éve</th>
					<th scope="col">Letöltések száma</th>
					<th scope="col">Hozzáadás
					<th scope="col">Szerkesztés</th>
					<th scope="col">Törlés</th>
				</tr>

			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($workers as $w) : ?>
					<?php $i++; ?>
					<tr>
						<th scope="row"><?=$i ?></th>
						<td><a href="index.php?P=wdata&d=<?=$w['id'] ?>"><?=$w['first_name'] . ' ' . $w['last_name'] ?></a></td>
						<td><?=$w['email'] ?></td>
						<td><?=$w['gender'] == 0 ? 'Female' : ($w['gender'] == 1 ? 'Male' : 'Other') ?></td>
						<td><?=$w['nationality'] ?></td>
						<td><a href="index.php?P=edit&d=<?=$w['id'] ?>">Edit</a></td>
						<td><a href="index.php?P=delete&d=<?=$w['id'] ?>">Delete</a></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	<?php endif; ?>
<?php endif; ?>