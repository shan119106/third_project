<?php include("db_connect.php") ?>
<?php
if(isset($_POST['pid'])){
	session_start();
	$username =$_SESSION['username'];
	$pid=$_POST['pid'];
	echo $username;
	$query="INSERT INTO add_to_cart (user_name,product_id) VALUES ('$username','$pid')";
	$result =mysqli_query($db,$query);
	if($result){
		$query ="SELECT * FROM add_to_cart WHERE username ='$username'";
		$row =mysqli_num_rows(mysqli_query($db,$query));
		echo $row;
		$query="SELECT * FROM products WHERE prod_id ='pid' LIMIT 1";
		$run = mysqli_fetch_assoc(mysqli_query($db,$query));
		$quantity =$run['prod_quantity'];
		$quantity =$quantity -1;
		$query ="UPDATE products SET prod_quantity ='$quantity' WHERE prod_id='pid'";
		$row=mysqli_query($db,$query);
	}
}
?>