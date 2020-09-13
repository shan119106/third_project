<?php
include("db_connect.php");
session_start();
$username =$_SESSION['username'];
$query ="SELECT * FROM user WHERE username='$username' LIMIT 1";
$run =mysqli_fetch_assoc(mysqli_query($db,$query));
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
	if($run['category'] =='Buyer'){
		include("bheader.php");

	}
	else{
		include("sheader.php");

	}
	?>
<div class="containner">
	<div class="text-center" style="font-size: 30px; text-align: center;">
		Account Details
	</div>
	<table class="table  table-borderless">
		<tr >
			<th>
			<p>Name:&nbsp&nbsp<?php echo $run['username'] ?></p>
			</th>
		</tr>
		<tr>
			<th>
			<p>Email:&nbsp&nbsp<?php echo $run['email'] ?></p>
			</th>
		</tr>
		
		<tr>
			<th>
			<p>Category:&nbsp&nbsp<?php echo $run['category'] ?></p>
			</th>
		</tr>
	</table>
	</div>
</div>
</body>
</html>


