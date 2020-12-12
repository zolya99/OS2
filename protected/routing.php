<?php 

#if(!array_key_exists('M', $_GET) || empty($_GET['M']))
	#$_GET['M'] = 'normal';

if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';

	switch ($_GET['P']) {
		case 'home' : require_once 'index.php'; break;
		case 'delete': IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/delete.php' : header('Location: index.php?P=songs'); break;
		case 'profile' : IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/profile.php' : header('Location: index.php'); break;
		case 'edit' : IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/edit.php': header('Location: index.php'); break;
		case 'upload' : IsUserLoggedIn() ? require_once PROTECTED_DIR. 'user/upload.php' : header ('Location: index.php'); break; 
		case 'songs' : IsUserLoggedIn() ? require_once PROTECTED_DIR. 'user/songs.php' : header('Location: index.php'); break;
		case 'uploadsong' : IsUserLoggedIn() ? require_once PROTECTED_DIR. 'user/uploadSong.php' : header('Location: index.php'); break;

		case 'login': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php'); break;
		case 'register': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php'); break;
		case 'logout': IsUserLoggedIn() ? UserLogout(): header('Location: index.php');  break;
		case 'users': IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/user_list.php' : header ('Location: index.php'); break;
		default: require_once '404.php'; break;
	}

?>