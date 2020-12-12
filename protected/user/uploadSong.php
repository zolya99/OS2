<?php require_once 'protected/config.php' ; ?>


<?php if(isset($_POST["upload"]))
        
            $song_name = $_POST["song_name"];
            $artist = $_POST["artist"];
            $album = $_POST["album"];
            $length = $_POST["length"];
            $pname = $_FILES["songUp"]['name'];
            $tname =$_FILES["songUp"]["tmp_name"];
            $uploads_dir = 'C:/Users/zolya/OneDrive/Uploads';
            move_uploaded_file($tname, $uploads_dir.'/'.$pname);
            $query = "INSERT INTO songs(song_name, artist, album, length, mp3) VALUES ('$song_name', '$artist', '$album', '$length', '$pname')";
            require_once DATABASE_CONTROLLER;
            var_dump($query);
            if(executeDML($query))
            {
                echo "File Successfully uploaded";
            }
    
            else
            {
                echo "Error";       
            }
?>
            