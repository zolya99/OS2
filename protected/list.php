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
					<th scope="col">Megnevezés</th>
					<th scope="col">Fejlesztő</th>
					<th scope="col">Kiadó</th>
					<th scope="col">Kiadás éve</th>
					<th scope="col">Letöltések száma</th>
					<th scope="col">Szerkesztés</th>
					<th scope="col">Törlés</th>
				</tr>

			</thead>
			<tbody>
		
				<?php foreach ($programs as $p) : ?>
					
					<tr>
						
						<td><?=$p['megnevezes'] ?></td>
						<td><?=$p['fejleszto'] ?></td>
						<td><?=$p['kiado'] ?></td>
						<td><?=$p['kiadas_eve'] ?></td>
						<td><?=$P['letoltesek_szama']?></td>
						<td><a href="index.php?P=edit&d=<?=$p['megnevezes'] ?>">Edit</a></td>
						<td><a href="index.php?P=delete&d=<?=$p['megnevezes'] ?>">Delete</a></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	<?php endif; ?>
<?php endif; ?>