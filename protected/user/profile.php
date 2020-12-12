<?php require_once 'protected/config.php' ; ?>



<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?=PUBLIC_DIR.'style.css'?>">

<body>
	<div id="data">
		<p id="prof">Profile</p>
		<img src="https://p.kindpng.com/picc/s/24-248325_profile-picture-circle-png-transparent-png.png" alt="profpic" width=100 height=100 id="image">
		<form  id="submit" method="post" action="index.php?P=upload" enctype="multipart/form-data">
    	Select image to upload:
    	<input type="File" name="fileToUpload">
    	<input class="btn btn-primary" type="submit" value="Upload Image" name="submit">
		</form>
		
		
	<?php
		if(array_key_exists('d', $_GET) && !empty($_GET['d']))
			$query = "SELECT id, first_name, last_name, email, gender, nationality, permission FROM users WHERE id = :id";
			$params = [
				':id' => $_GET['d']
			];
			require_once DATABASE_CONTROLLER;
			$users = getRecord($query, $params); ?>
		

			<h2>Name: <?=$users['first_name'] . ' '  . $users['last_name'];?></h2>
			&nbsp;
			<br>
			<h2>Email: <?=$users['email']; ?></h2>
			&nbsp;
			<br>
			<h5>Gender: <?=$users['gender'] == 0 ? 'Female' : ($users['gender'] == 1 ? 'Male' : 'Other') ?>
			&nbsp;
			Nationality: <?=$users['nationality'];?>
			&nbsp; <br>
			Permission: <?=$users['permission'] == 0 ? 'User' : 'Root' ?></h5>
		
			<a id="edit" href="index.php?P=edit&d=<?=$users['id'] ?>"><svg class="bi bi-person-lines-fill" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  		<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7 1.5a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5zm-2-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm2 9a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
		</svg><h3>Edit</h3></a>
			

	</div>
	
</body>
</html>


