<?php
	$con = mysqli_connect('127.0.0.1', 'root','','kickstarte');
	$text_zaprosa = "DELETE FROM kickstarte WHERE id = '{$_GET['id']}'"; 
	mysqli_query($con, $text_zaprosa);
	header('Location: acc.php');
 ?>