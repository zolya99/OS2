<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
	<h1>Page access is forbidden! You can't delete songs. If you want to remove one please, ask the owner of the website!</h1>
	<br>
	Thank you for your understading! Email: <a href="mailto:zolya1999@gmail.com">Zoltan Nagy</a>
<?php else : ?>
	<?php
	 	if(array_key_exists('d', $_GET) && !empty($_GET['d'])) {
			$query = "SELECT id, song_name, artist, album, length, mp3 FROM songs";
			$params = [
				':id' => $_GET['d'],
				];
			require_once DATABASE_CONTROLLER;
			$songs = getRecord($query, $params);
			foreach($songs as $s)
				$query = "DELETE FROM songs WHERE id =".$_GET['d'];
				if(!executeDML($query, $params))
					echo "Nem sikerült törölni!";
				header('Location: index.php?P=songs'); 
			}
			?>
<?php endif; ?>