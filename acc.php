<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<div class="col-4 mx-auto">
		<form action="insertProject.php" method="GET">
			<input type="" name="title" placeholder="Заголовок" class="form-control">
			<textarea name="description" class="form-control" placeholder="Описание"></textarea>
			<input type="" name="goal" class="form-control" placeholder="Необходимая сумма">
			<input type="" name="img" class="form-control" placeholder="Обложка">
			<input type="" name="place" class="form-control" placeholder="Город">
			<input type="" name="user" class="form-control" placeholder="User">
			<button class="btn">Добавить</button>
		</form>
	</div>
	<div class="col-8 mx-auto">
		<h3>My projects</h3>
	</div>
	<?php 
		for ($i=0; $i < $query->num_rows; $i++) { 			
			$stroka = $query->fetch_assoc();
		 ?>
		<div class="col-8 mx-auto">
			<h2 class="text-center"><?php echo $stroka["title"]?></h2>
			<p class="text-center"><?php echo $stroka["description"]?></p>
			<div class="row">
				<div class="col-10" style="background-image: url(<?php echo $stroka["img"]?>); height: 300px; background-position: center; background-size: cover;">
				</div>
				<div class="col-2">
					<p class="text-success">Собрано</p>
					<h3 class="text-success"><?php echo $stroka["donated"]?>$</h3>
					<p>Необходимая сумма</p>
					<h4><?php echo $stroka["goal"]?>$</h4>
					<form method="GET" action="change.php">
						<input style="display: none" type="" name="idid" class="form-control" value="<?php echo $stroka["id"] ?>">
						<button class="bg-success btn mb-2">Редактировать</button>
					</form>
					<form method="GET" action="delete.php">
						<input style="display: none" type="" name="id" class="form-control" value="<?php echo $stroka["id"] ?>">
						<button class="bg-danger btn">Удалить</button>
					</form>
				</div>
			</div>
		</div>

	<?php } ?>
</body>
</html>