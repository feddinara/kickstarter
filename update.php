<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstarte");
	mysqli_query($con, "UPDATE kickstarte SET title='{$_GET['title']}', description='{$_GET['description']}', goal='{$_GET['goal']}', img='{$_GET['img']}', user='{$_GET['user']}', place='{$_GET['place']}' WHERE id='{$_GET['idid']}'");
	header('Location: acc.php');
?>