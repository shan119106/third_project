<?php include("db_connect.php") ?>
<?php
$x=1;
if(isset($_POST['pid'])){
	session_start();
	$output ='';
	$username =$_SESSION['username'];
	$pid=$_POST['pid'];
	$query ="SELECT * FROM add_to_cart WHERE product_id = '$pid'";
	$result =(mysqli_query($db,$query));
	if(mysqli_num_rows($result)>0){
		$output = "already in cart";
	}
	else{
	$query="INSERT INTO add_to_cart (user_name,product_id) VALUES ('$username','$pid')";
	$result =mysqli_query($db,$query);
	if($result){
		
		$query="SELECT * FROM products WHERE prod_id ='$pid' LIMIT 1";
		$run = mysqli_fetch_assoc(mysqli_query($db,$query));
		$quantity =intval($run['prod_quantity'])-1;
		$query ="UPDATE products SET prod_quantity ='$quantity' WHERE prod_id='$pid'";
		$row=mysqli_query($db,$query);
		$output= "added successfully";
		}
	}
	echo $output;
	
}
?>