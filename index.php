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
echo "<h1>Nasz system</h1>";
if(isSet($_POST["wyloguj"])){
    $_SESSION["zalogowany"] = 0;
}
if(isSet($_COOKIE["ciastko"])){
    echo $_COOKIE["ciastko"];
}
?>
    <form action="logowanie.php" method="post">
    <fieldset>   
    <legend>Logowanie:</legend>
    <label for="login">Login:</label>
    <input type="text" name="login"><br>
    <label for="haslo">Hasło: </label>
    <input type="text" name="haslo"><br>
    <input type="submit" name="send" value="Zaloguj">
    </fieldset>
    </form>
    <form action="cookie.php" method="post">
    <fieldset>   
    <label for="czas">Czas:</label>
    <input type="number" name="czas"><br>
    <input type="submit" name="utworzCookie" value="utworzCookie"><br>
    </fieldset>
    </form>
    <a href="user.php">Hiperłącze do user.php</a>
</body>

</html>
