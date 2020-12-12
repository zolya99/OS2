<?php require_once 'protected/config.php' ; ?>

<br>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?=PUBLIC_DIR.'style.css'?>">
<body>
<form method="POST" action="index.php?P=uploadsong" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-md-6">
			<label><h3>Song Name</label>
			<input type="text" name="song_name" id="song_name">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-6">
			<label><h3>Artist</h3></label>
			<input type="text" name="artist" id="artist">
		</div>
	</div>
	<br>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label><h3>Album</h3></label>
			<input type="text" name="album" id="album">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label><h3>Length</h3></label>
			<input type="time" name="length" id="length">
		</div>
	</div>

	<br>
	<div class="form-row">
		<label><h3>File: </h3></label>
		<input type="File" name="songUp" id="songUp">
	</div>
	<br>
	<input type="submit" class="btn btn-success btn-lg" value="Upload" name="upload" id="upload">
</form>
</body>
</html>


<?php
	$query = "SELECT id, song_name, artist, album, length, mp3 FROM songs ORDER BY id";
	require_once DATABASE_CONTROLLER; 

	$songs = getList($query);
	?>

	<?php if(count($songs) <= 0):  ?>
		<h1>There are no songs in the database.</h1>
	<?php else : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					
					<th scope="col">Song Name</th>
					<th scope="col">Artist</th>
					<th scope="col">Album</th>
					<th scope="col">Length</th>
					<th scope="col">Song</th>
					<th scope="col">Player</th>
					<th scope="col">Delete</th>
					
				</tr>
			</thead>
			<tbody>
				
				<?php foreach ($songs as $s) : ?>
					
					<tr>
						
						<td><?=$s['song_name'] ?></td>
						<td><?=$s['artist'] ?></td>
						<td><?=$s['album'] ?></td>
						<td><?=$s['length'] ?></td>
						<td><?=$s['mp3'] ?></td>
						<td><audio controls preload="metadata"   style=" width:500px;">
							<source src="<?=$s['mp3']?>" type="audio/mpeg"></audio><br />
						
						
						<a href="http://scriptgenerator.net/really-simple-embed-audio-player-script/" title="Generate here your HTML5 audio player" style="text-align: left;display: block">HTML5 Audio Player</a></td>
						<td><a href="index.php?P=delete&d=<?=$s["id"]?>"><svg class="bi bi-trash" width="5em" height="5em" viewBox="1.7 0 20 16" fill="red" xmlns="http://www.w3.org/2000/svg">
  						<path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"/>
  						<path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"/>
						</svg></a></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
		
	<?php endif; ?>