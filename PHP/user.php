<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php 
        require("funkcje.php");
        echo "Zalogowano <br>";
        if($_SESSION["zalogowany"] != 1){
            header("Location: index.php");
        }
        echo $_SESSION["zalogowanyImie"] . "<br>";
        if(isSet($_POST["myfile"])){
            $currentDir=getcwd();
            $uploadDir = "/zdjeciaUzytkownikow/";
            $fileName = $_FILES['myfile']['name'];
            $fileSize = $_FILES['myfile']['size'];
            $fileTmpName = $_FILES['myfile']['tmp_name'];
            $fileType = $_FILES['myfile']['type'];
            if($fileName!= "" and ($fileType == 'image/png' or $fileType == 'image/jpeg' or
            $fileType == 'image/PNG' or $fileType == 'image/JPEG')){
                $uploadPath = $currentDir . $uploadDir . $fileName;
                if(move_uploaded_file($fileTmpName,$uploadPath)){
                    echo "Zdjęcie zostało załadowane na serwer FTP <br>";
                }
            }
        }
       
    ?>
    <form action ="user.php" method="post" enctype="multipart/form-data">
    <fieldset>
    <label for="myfile">Plik:</label> 
    <input name="myfile" type="file"> <br>
    <input name="myfile" type="submit"> <br>
    </fieldset>   
    </form>
    <img src="graf1.png" alt="Tutaj zdjecie" height="42" width="42"> <br>
    <a href="index.php">Hiperłącze do index.php</a> <br>
    <form action="index.php" method="post">
    <input type="submit" name="wyloguj" value="wyloguj">
    </form>
</body>
</html>
