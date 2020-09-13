 <?php include('db_connect.php');?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="add_product.css">

<div class="row">
	<div id="column">
		<div class="panel panel-default">
			<div id="panel-heading">
				<h3>
					<i class="fa a-money fa-w"></i>Add Product
				</h3>
			</div><!--panel-heading end -->
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="add_product.php" enctype="multipart/form-data">
					<div class="form-group">
						<label class ="col-md-3 control-label">Product Name:</label>
						<input type="text" name="product_name" class="form-control" required>
					</div>
					<div class="form-group">
						<label class ="col-md-3 control-label">Product Quantity:</label>
						<input type="number" name="product_quantity" class="form-control" required>
					</div>
					<div class="form-group">
						<label class ="col-md-3 control-label">Product Category:</label>
						<select name="product_cat" class="form-control">
							<option selected disabled="">Select Category</option>
							<option value ="women">Women</option>
							<option value ="men">Men</option>
							<option value ="Kitchen Appliances">Kitchen Appliances</option>
							<option value ="home Appliances">home Appliances</option>
							<option value ="Electronics">Electronics</option>

						</select>
					</div>
					<div class="form-group">
						<label class ="col-md-3 control-label">Product Image1:</label>
						<input type="file" name="product_img1" class="form-control" required>
					</div>
					<div class="form-group">
						<label class ="col-md-3 control-label">Product Price:</label>
						<input type="text" name="product_price" class="form-control" required>
					</div>
					<div class="form-group">
						<label class ="col-md-3 control-label">Product Description:</label>
						<textarea name="product_desc" class="form-control" rows="5" cols="35"></textarea>
					</div>

					<div class="form-group">
						
						<input type="submit" name="product_add" value="Add" class="btn-warning">
					</div>
					
				</form>				
			</div>
		</div>
		
	</div>
	
</div>
<?php


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
			
			
		}
		else{
			echo "your file is too big";
		}
	}
	else{
		echo "file cannot be uploaded";
	}


$query= "INSERT INTO products (name,description,img1,admin_name,prod_price,prod_quantity,prod_id,prod_category) VALUES ('$product_name','$product_desc','$fileDestination','$username','$product_price','$product_quantity','$product_id','$product_cat')";
$result =mysqli_query($db,$query);
 if($result){

echo "<script> alert('inserted succesfully')</script>";
header("location: Sindex.php");
}

$product_final=array();
}