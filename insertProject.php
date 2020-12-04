<?php 
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstarte");
	$query_text = "SELECT * FROM kickstarte";
	$query = mysqli_query($con, $query_text);
	mysqli_query($con, "INSERT INTO kickstarte (title, description, goal, img, user, place) 
	VALUES ('{$_GET['title']}', '{$_GET['description']}', '{$_GET['goal']}', '{$_GET['img']}', '{$_GET['user']}', '{$_GET['place']}')");
	header('Location: index.php');
 ?>