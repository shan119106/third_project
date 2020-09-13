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
include("bheader.php");
?>
<div class="container">
	<div class="row justify-content-center">
		<table class="table text-center">
			<tr>
				<td colspan="7">
					<h4 class="text-center text-warning m-0">Cart</h4>
				</td>
			</tr>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total Price</th>

			</tr>
			<tbody>
			  <?php
			   include("db_connect.php");
			   session_start();
			   $username =$_SESSION['username'];
			   $grand_total =0;
			   $query ="SELECT * from add_to_cart WHERE user_name ='$username'";
			   $result =mysqli_query($db,$query);
			   while($run =mysqli_fetch_assoc($result)){
			   	$query ="SELECT * FROM products WHERE prod_id ='{$run['product_id']}' LIMIT 1";
			   	$row = mysqli_fetch_assoc(mysqli_query($db,$query));
			   	$grand_total = $grand_total+ $row['prod_price'];
			   	?>
			   	<tr>
			   		<td><?php echo $row['name'] ?></td>
			   		<td><i class="fa fa-rupee" style="font-size:16px"></i><?php echo number_format($row['prod_price'],2); ?></td>
			   		<td>1</td>
			   		<td><i class="fa fa-rupee" style="font-size:16px"></i><?php echo number_format($row['prod_price'],2); ?></td>
			   	</tr>
			   	<?php
			   }

			   ?>
			</tbody>
			<tr>
				<td colspan="1">
					<a href="bindex.php" class="btn btn-warning" style="color: #ffffff;">Go Back</a>
				</td>
				<td colspan="2">
					<p>Grand Total: <i class="fa fa-rupee" style="font-size:16px"></i><?php echo number_format($grand_total,2); ?></p>
				</td>
				<td colspan="4">
					<a href="border.php" class="btn btn-warning" style="color: #ffffff;">Order</a>
				</td>
			</tr>
		</table>
	</div>
</div>

</body>
</html>