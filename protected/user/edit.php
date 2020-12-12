<?php
		$query = "SELECT id, first_name, last_name, email, gender, nationality FROM users WHERE id = :id";
		$params = [
				':id' => $_GET['d']
				];
		require_once DATABASE_CONTROLLER;
		$user = getList($query, $params); ?>
		<?php if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editProfile'])) {
		$postData = [
			':id' => $_GET['d'],
			'first_name' => $_POST['first_name'],
			'last_name' => $_POST['last_name'],
			'email' => $_POST['email'],
			'gender' => $_POST['gender'],
			'nationality' => $_POST['nationality']
			
		];

		if(empty($postData['first_name']) || empty($postData['last_name']) || empty($postData['email']) || empty($postData['nationality']) || $postData['gender'] < 0 && $postData['gender'] > 2 ) {
			echo "Hiányzó adat(ok)!";
		} else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
			echo "Hibás email formátum!";
		} else {
			$query = "UPDATE users SET id = :id, first_name = :first_name, last_name = :last_name, email = :email, gender = :gender, nationality = :nationality WHERE id = :id";
			$params = [
				':id' => $_GET['d'],
				':first_name' => $postData['first_name'],
				':last_name' => $postData['last_name'],
				':email' => $postData['email'],
				':gender' => $postData['gender'],
				':nationality' => $postData['nationality']
			];
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query, $params)) {
				echo "Hiba az adatbevitel során!";

			} 
			header('Location: index.php');
		}
	}
	?>


		<?php foreach ($user as $u): ?>
		<form method="post">
		<div>
			<div>
				<label for="userID"></label>
				<input type="hidden" class="form-control" id="userId" value="<?=$u['id'] ?>" name="id">
			</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="userFirstName">First Name</label>
				<input type="text" class="form-control" id="userFirstName" value="<?=$u['first_name'] ?>" name="first_name">
			</div>
			<div class="form-group col-md-6">
				<label for="userLastName">Last Name</label>
				<input type="text" class="form-control" id="userLastName" value="<?=$u['last_name'] ?>" name="last_name">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="userEmail">Email</label>
				<input type="email" class="form-control" id="email" value="<?=$u['email'] ?>" name="email">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
		    	<label for="userGender">Gender</label>
		    	<select class="form-control" id="gender" value="<?=$u['gender'] == 0 ? 'Female' : ($u['gender'] == 1 ? 'Male' : 'Other') ?>" name="gender">
		      		<option value="0">Female</option>
		      		<option value="1">Male</option>
		      		<option value="2">Other</option>
		    	</select>
		  	</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="userNationality">Nationality</label>
				<input type="text" class="form-control" id="nationality" value="<?=$u['nationality'] ?>" name="nationality">
			</div>
		</div>
		<button type="submit" class="btn btn-primary" name="editProfile">Edit</button>
	</form>
	<?php endforeach; ?>