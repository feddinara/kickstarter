<!DOCTYPE html>
<html>
<head>
	<title>редактирование</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
</head>
<body>
<?php 
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstarte");
	$query = mysqli_query($con, "SELECT * FROM kickstarte WHERE user='V-Games'");
?>
	<div class="col-12">
		<div class="row">
			<div class="col-2 pt-3">
				<a href="" class="text-dark ml-3">Explore</a>
				<a href="" class="text-dark ml-3">Start a project</a>
			</div>
			<div class="col-8 text-center">
				<img src="logo.png" class="w-25">
				<p>#BlackLivesMatter</p>
			</div>
			<div class="col-2 text-left pt-3">
				<a href="acc.php"><img src="lk.png" class="rounded-circle" ></a>
			</div>
		</div>
	</div>
	<?php 
		for ($i=0; $i < $query->num_rows; $i++) { 			
			$stroka = $query->fetch_assoc();
	?>
	<form method="GET" action="update.php">
		<div class="col-6 mx-auto">
			<input type="" name="idid" class="form-control mb-1" value="<?php echo $stroka["id"]?>" style="display: none">
			<input type="" name="title" class="form-control mb-1" value="<?php echo $stroka["title"]?>">
			<input type="" name="description" class="form-control mb-1" value="<?php echo $stroka["description"]?>">
			<input type="" name="goal" class="form-control mb-1" value="<?php echo $stroka["goal"]?>">
			<input type="" name="img" class="form-control mb-1" value="<?php echo $stroka["img"]?>">
			<input type="" name="user" class="form-control mb-1" value="<?php echo $stroka["user"]?>">
			<input type="" name="place" class="form-control mb-2" value="<?php echo $stroka["place"]?>">
			<button class="bg-success btn">Редактировать</button>
		</div>
	</form>
	<?php } ?>
</body>
</html>