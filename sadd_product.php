<?php

include('db_connect.php');
session_start();
$username =$_SESSION['username'];
if(isset($_POST['product_add'])){
	$product_name =$_POST['product_name'];
	$product_quantity =$_POST['product_quantity'];
	$product_cat =$_POST['product_cat'];
	$product_price =$_POST['product_price'];
	$product_desc =$_POST['product_desc'];
	$product_id =uniqid('',true);
	$fileName=$_FILES['product_img1']['name'];
	$fileType=$_FILES['product_img1']['type'];
	$fileTmp=$_FILES['product_img1']['tmp_name'];
	$fileError=$_FILES['product_img1']['error'];
	$fileSize=$_FILES['product_img1']['size'];
	$fileExt=explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed=array('png','jpg','jpeg');
	$fileDestination='';
	if(in_array($fileActualExt,$allowed)){
		if($fileSize<1000000){
			$fileNameNew=uniqid('',true).".".$fileActualExt;
			$fileDestination='post/'.$fileNameNew;
			move_uploaded_file($fileTmp,$fileDestination);
			$query= "INSERT INTO products (name,description,img1,admin_name,prod_price,prod_quantity,prod_id,prod_category) VALUES ('$product_name','$product_desc','$fileDestination','$username','$product_price','$product_quantity','$product_id','$product_cat')";
			$result =mysqli_query($db,$query);
 			if($result){
			?>
			<script> alert('inserted succesfully')</script>
			<?php		
			header("location: Sindex.php");
	
			}


			
		}
		else{
			?>
			<script> alert('file is too big')</script>
			<?php	
			header("location: Sindex.php");
		}
	}
	else{
		?>
			<script> alert('file cannot be uploaded')</script>
			<?php	
		header("location: Sindex.php");
	}



}
?>