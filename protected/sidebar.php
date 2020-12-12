

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="<?=PUBLIC_DIR.'style.css'?>">
</html>
<div class="w3-sidebar w3-bar-block w3-transparent w3-card" style="width:10%">
	<a href="index.php" ><svg class="bi bi-house-fill" width="3em" height="3em" viewBox="0 -3 15 20" fill="White" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd"/>
	</svg></a>

  <?php if(!IsUserLoggedIn()) : ?>
	<a href="index.php?P=login"><svg class="bi bi-person-fill" width="3em" height="3em" viewBox="4 -3.5 15 20" fill="White" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
</svg></a> <?php endif;?>

<?php if(!IsUserLoggedIn()) : ?>
<a href="index.php?P=register"><svg class="bi bi-person-plus" width="3em" height="3em" viewBox="-4 -3.5 20 20" fill="White" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM6 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0zm4.5 0a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V5.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M13 7.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/>
</svg></a> <?php endif;?>
  <br>
<?php if(IsUserLoggedIn()) :?>
  <div>
    <br>
    <a id="link" href="index.php?P=profile&d=<?=$_SESSION['uid'] ?>" class="w3-bar-item w3-button"><svg class="bi bi-person-fill" width="1.5em" height="1.5em" viewBox="0 -0.5 15 20" fill="Black" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
    </svg>Profile: <?=$_SESSION['fname'] . ' '  . $_SESSION['lname'];?>

    </a>
    <br> 

    <a id="link" href="index.php?P=songs" class="w3-bar-item w3-button"><svg class="bi bi-music-note-list" width="1em" height="1em" viewBox="0 1 16 16" fill="Black" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
    <path fill-rule="evenodd" d="M12 3v10h-1V3h1z" clip-rule="evenodd"/>
    <path d="M11 2.82a1 1 0 01.804-.98l3-.6A1 1 0 0116 2.22V4l-5 1V2.82z"/>
    <path fill-rule="evenodd" d="M0 11.5a.5.5 0 01.5-.5H4a.5.5 0 010 1H.5a.5.5 0 01-.5-.5zm0-4A.5.5 0 01.5 7H8a.5.5 0 010 1H.5a.5.5 0 01-.5-.5zm0-4A.5.5 0 01.5 3H8a.5.5 0 010 1H.5a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
    </svg>Songs</a>

    <br>
    <div>
    <a id="logout" href="index.php?P=logout" class="w3-bar-item w3-button">Logout</a>
    </div>

    <br>
    <?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] >= 1) : ?>
      <a id="link" href="index.php?P=users" class="w3-bar-item w3-button"><svg class="bi bi-list" width="1em" height="1em" viewBox="0 1 16 16" fill="Black" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 013 11h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm0-4A.5.5 0 013 7h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm0-4A.5.5 0 013 3h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
      </svg>User List</a>
    <?php endif; ?>

    
  </div> 

<?php endif; ?>
</div>

<div style="margin-left:10%">
