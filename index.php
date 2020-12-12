<?php session_start(); ?>
<?php require_once 'protected/config.php'; ?>
<?php require_once USER_MANAGER; ?>
<?php require_once PROTECTED_DIR.'sidebar.php'; ?>
<?php require_once PROTECTED_DIR.'header.php'; ?>

<!DOCTYPE html>
<html>
<title>Postify</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?=PUBLIC_DIR.'style.css'?>">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<body>


<div>
	<div class="w3-container w3-transparent">
		<div>
			<h1>Postify</h1>
		</div>
	</div>
	<?php if(!IsUserLoggedIn()) :?>
		<div class="w3-container">
			<h2>Notification</h2>
			<p>Click on the first icon, if you want to go to this website Home.</p>
			<p>With the second button, you can search for songs.</p>
			<p>The filled Person will navigate you to the website's login page.</p>
			<p id="last">To connect to the Postify Community, press the filled person with a plus mark.</p>
		</div>
	<?php endif; ?>

</div>
<div class="container-fluid">
	<content><?php require_once PROTECTED_DIR.'routing.php'; ?></content>
</div>
      
</body>
</html>
