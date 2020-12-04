<?php 
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstarte");
	$query = mysqli_query($con, "SELECT * FROM kickstarte WHERE id='{$_GET['id']}'");
	$stroka = $query->fetch_assoc();
	$num = $stroka["donated"] + 10;
	mysqli_query($con, "UPDATE kickstarte SET donated='{$num}' WHERE id='{$_GET['id']}'");
	header('Location: index.php');
 ?>