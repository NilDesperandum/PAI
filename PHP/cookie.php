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
        if(isSet($_POST["utworzCookie"])){
            $wartosc = $_POST["czas"];
            setcookie("ciastko","MojeCiastko",time() + $wartosc,"/");
            echo "Dodano ciasteczko <br>";
        }
    
    ?>
    <a href="index.php">Hiperłącze do index.php</a>
</body>
</html>
