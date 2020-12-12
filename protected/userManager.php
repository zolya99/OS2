<?php
function IsUserLoggedIn()
{
	return $_SESSION != null && array_key_exists('uid', $_SESSION) && is_numeric($_SESSION['uid']);
}

function UserLogout()
{
	session_unset();
	session_destroy();
	header('Location: index.php');
}

function UserLogin($email, $password)
{
	$query = "SELECT id, first_name, last_name, email, gender, nationality, permission FROM users WHERE email = :email AND password = :password";
	$params =
	[ ':email' => $email,
	  ':password' => sha1($password)];
	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(!empty($record))
	{
		$_SESSION['uid'] = $record['id'];
		$_SESSION['fname'] = $record['first_name'];
		$_SESSION['lname'] = $record['last_name'];
		$_SESSION['email'] = $record['email'];
		$_SESSION['gender'] = $record['gender'];
		$_SESSION['nationality'] = $record['nationality'];
		$_SESSION['permission'] = $record['permission'];

		header('Location: index.php'); 
	}
	return false;
	
}

function UserRegister($email, $password, $fname, $lname, $gender, $nationality)
{
	$query = "SELECT id FROM users email = :email";
	$params = [':email' => $email];
	
	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(empty($record))
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, gender, nationality) VALUES (:first_name, :last_name, :email, :password, :gender, :nationality)";
		$params = 
		[
			':first_name'  => $fname,
			':last_name'  => $lname,
			':email'  => $email,
			':password'  => sha1($password),
			':gender' => $gender,
			':nationality' => $nationality
		];

		if(executeDML($query, $params)) header('Location: index.php?P=login'); 
	}
}

?>