<?php session_start(); ?>
<a href="file06_post.php">Odnośnik do file06_post </a> <br>
  <?php 
	if(isset($_SESSION["data"])){
		if($_SESSION["data"] == 2){
			echo "<div style='color:green'> Udało się dodać nowego pracownika </div>";
			$_SESSION["data"] = 0;
		}
	}
	?>
<h4> Lista pracowników: </h4>
<?php
 $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
 if (!$link) {
 printf("Connect failed: %s\n", mysqli_connect_error());
 exit();
 }
 $sql = "SELECT * FROM pracownicy";
 $result = $link->query($sql);
 foreach ($result as $v) {
 echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
 }
 $result->free();
 $link->close();
?>