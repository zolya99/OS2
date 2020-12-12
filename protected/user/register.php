<!DOCTYPE html>
<html>
<title>Postify - Register</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?=PUBLIC_DIR.'style.css'?>">
<head><h2>Register and be able to share your music!</h2></head>
</html>
<?php
	if($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST['register']))
	{
		$postData =
		[
			'fname' => $_POST['first_name'],
			'lname' => $_POST['last_name'],
			'email' => $_POST['email'],
			'email1' => $_POST['email1'],
			'password' => $_POST['password'],
			'password1' => $_POST['password1'],
			'gender' => $_POST['gender'],
			'nationality' => $_POST['nationality']
		];

		if(empty($postData['fname']) || empty($postData['lname']) || empty($postData['email']) || empty($postData['email1']) || empty($postData['password']) || empty($postData['password1']) || empty($postData['nationality']))
		{
			echo "Hiányzó adat(ok)!";

		}
		else if ($postData['email'] != $postData['email1']) 
		{
			echo "Az email címek nem egyeznek";
		}
		else if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL))
		{
			echo "Hibás email formátum!";
		}
		else if ($postData['password'] != $postData['password1'])
		{
			echo "A jelszavak nem egyeznek!";
		}
		else if (strlen($postData['password']) < 6)
		{
			echo "A jelszó túl rövid! Legalább 6 karakter hosszúnak kell lennie!";
		}
		else if (!UserRegister($postData['email'], $postData['password'], $postData['fname'], $postData['lname'], $postData['gender'], $postData['nationality']))
		{
			echo "Sikertelen regisztráció!";
		}

		$postData['password'] = $postData['password1'] = "";
	}
?>
<form method="post">
	<div class="form-row">
		<div class="form-group col-md-6"><br>
			<label for="registerFirstName"><h3>First Name</h3></label>
			<input type="text" class="form-control" id="registerFirstName" name="first_name" value="<?=isset($postData) ? $postData['fname'] : "";?>">
		</div>
		<div class="form-group col-md-6"><br>
			<label for="registerLastName"><h3>Last Name</h3></label>
			<input type="text" class="form-control" id="registerLastName" name="last_name" value="<?=isset($postData) ? $postData['lname'] : "";?>">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerEmail"><h3>Email</h3></label>
			<input type="email" class="form-control" id="registerEmail" name="email" value="<?=isset($postData) ? $postData['email'] : "";?>">
		</div>
		<div class="form-group col-md-6">
			<label for="registerEmail1"><h3>Confirm Email</h3></label>
			<input type="email" class="form-control" id="registerEmail1" name="email1" value="<?=isset($postData) ? $postData['email1'] : "";?>">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="registerPassword"><h3>Password</h3></label>
			<input type="password" class="form-control" id="registerPassword" name="password" value="">
		</div>
		<div class="form-group col-md-6">
			<label for="registerPassword1"><h3>Confirm Password</h3></label>
			<input type="password" class="form-control" id="registerPassword1" name="password1" value="">
		</div>
	</div>

	<div class="form-row">
			<div class="form-group col-md-12">
		    	<label for="registerGender"><h3>Gender</h3></label>
		    	<select class="form-control" id="registerGender" name="gender" value="<?=isset($postData) ? $postData['gender'] : "";?>">
		      		<option value="0">Female</option>
		      		<option value="1">Male</option>
		      		<option value="2">Other</option>
		    	</select>
		  	</div>
		</div>

	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="registerNationality"><h3>Nationality</h3></label>
			<input type="text" class="form-control" id="registerNationality" name="nationality" value="<?=isset($postData) ? $postData['nationality'] : "";?>">
		</div>
	</div>

	<button type="submit" class="btn btn-success btn-lg" name="register">Register</button>
</form>
