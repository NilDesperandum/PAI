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
        if(isSet($_POST["send"]))
{
    $login = test_input($_POST["login"]);
    $haslo = test_input($_POST["haslo"]);
    if( ($login == $osoba1->login and $haslo == $osoba1->haslo ) or
     ($login == $osoba2->login and $haslo == $osoba2->haslo))
     {
         if($login ==$osoba1->login){
            $_SESSION["zalogowanyImie"]= $osoba1->imieNazwisko;
         } else if($login == $osoba2->login){
             $_SESSION["zalogowanyImie"]= $osoba2->imieNazwisko;
         }
         $_SESSION["zalogowany"]= 1;
         header("Location: user.php");
     }else {
         header("Location: index.php");
     }
    //echo "Przesłany login: $login <br>";
    //echo "Przesłane hasło: $haslo <br> <br>";
    
}
    
    ?>
</body>
</html>
