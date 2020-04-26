<?php session_start(); ?>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 </head>
 <body>
	<form action="file06_redirect.php" method="POST">
	id_prac <input type="text" name="id_prac">
	nazwisko <input type="text" name="nazwisko">
	<input type="submit" value="Wstaw">
	<input type="reset" value="Wyczysc">
	</form>
	  <?php 
	if(isset($_SESSION["data"])){
		if($_SESSION["data"] == 1){
			echo "<div style='color:red'> Nie udało się dodać nowego pracownika </div> <br>";
			$_SESSION["data"] = 0;
		}
	}
	?>
 <a href="file06_get.php">Odnośnik do file06_get.php</a>
 </body>
 </html>