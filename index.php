<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstarte");
	$query = mysqli_query($con, "SELECT * FROM kickstarte");
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
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href="acc.php"><img src="lk.png" class="rounded-circle" ></a>
		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><?php $query->num_rows ?></span></h4>
	<p></p>
	<div class="row mt-5">
		<?php 
			for ($i=0; $i < $query->num_rows; $i++) { 			
			$stroka = $query->fetch_assoc();
		 ?>
			<div class="col-4 border border-light rounded">
				<div class="col-12" style="background-image: url(<?php echo $stroka["img"]?>); height: 300px; background-position: center; background-size: cover;">
				</div>
				<h3><?php echo $stroka["title"]?></h3>
				<p class="mb-3"><?php echo $stroka["description"]?></p>
				<p class="mb-2">by <?php echo $stroka["user"]?>, <?php echo $stroka["place"]?></p>
				<p><?php echo $stroka["goal"]?>$ goal</p>
				<form action="updatedonate.php" method="GET">
				<p class="text-success"><?php echo $stroka["donated"]?>$ pledged</p>
				<input type="" name="id" value="<?php echo $stroka["id"]?>" style="display:none; ">
				<button class="btn bg-success text-white">Back tis project +10$</button>
				</form>
			</div>

		<?php } ?>
	</div>

</div>
</body>
</html>