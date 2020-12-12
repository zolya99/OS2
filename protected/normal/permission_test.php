<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] < 1) : ?>
	<h1> Page access is forbidden!</h1>
	Permission check: <?=isset($_SESSION['permission']) ? $_SESSION['permission'] : "You don't have permission allowed!" ?>
<?php else : ?>
	<h1>Acces allowed</h1>
	<p>Your permission level is <?=$_SESSION['permission'] ?></p>
<?php endif; ?>