<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
	<h1>Page access is forbidden!</h1>
<?php else : ?>
	<?php
	 	if(array_key_exists('d', $_GET) && !empty($_GET['d'])) {
			$query = "SELECT megnevezes, fejleszto, kiado, kiadas_eve, letoltesek_szama FROM programok Where megnevezes = ':megnevezes'";
			$params = [
				':megnevezes' => $_GET['d'],
				];
			require_once DATABASE_CONTROLLER;
			$program = getRecord($query, $params);
			foreach($program as $p)
				$query = "DELETE FROM programok WHERE megnevezes =".$_GET['d'];
				if(!executeDML($query, $params))
					echo "Nem sikerült törölni!";
				header('Location: index.php?P=list_worker'); 
			}
			?>
<?php endif; ?>