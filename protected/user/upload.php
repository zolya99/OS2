<?php require_once 'protected/config.php' ; ?>
<?php

    if(isset($_POST["submit"]))

        $pname = rand(1000,10000)."-".$_FILES["fileToUpload"]['name'];
        $tname =$_FILES["fileToUpload"]["tmp_name"];
        $uploads_dir = 'C:/Users/zolya/OneDrive/Uploads';
        move_uploaded_file($tname, $uploads_dir.'/'.$pname);
        $query = "INSERT INTO profpic(image) VALUES ('$pname')";
        require_once DATABASE_CONTROLLER;
        if(executeDML($query)){
            echo "File Successfully uploaded";
        }
    
        else{
            echo "Error";        }
?>

