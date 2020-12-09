<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Webprog2 ZH (Kurzus: C)</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <?php if(!IsUserLoggedIn()) : ?>
      	<a class="nav-item nav-link text-warning" href="index.php?P=login">Login</a>
      	<a class="nav-item nav-link text-danger" href="index.php?P=register">Register</a>
      <?php else : ?>
      	<a class="nav-item nav-link" href="index.php?P=userpanel">User Panel</a>

      	<a class="nav-item nav-link enabled" href="index.php?P=list_programs">Program List</a>
      	<a class="nav-item nav-link enabled" href="index.php?P=add_program">Add program</a>
      	<a class="nav-item nav-link disabled" href="#">Empty URL</a>


      	<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] >= 1) : ?>

		<?php endif; ?>
		<a class="nav-item nav-link text-danger" href="index.php?P=logout">Logout</a>
      <?php endif; ?>
    </div>
  </div>
</nav>