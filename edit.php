<?php
include("db_connect.php") ?>
<?php
 $run='';
if(isset($_POST['pid'])){
	$prod_id =$_POST['pid'];
	$query ="SELECT * FROM products WHERE prod_id='$prod_id' LIMIT 1";
	$run =mysqli_fetch_assoc(mysqli_query($db,$query));
	?>
	<form action="edit.php" method="post">
		<div class="row">
			<div class="col-md-3">
				<img src="<?php echo $run['img1'] ?>" style ="height: 200px;width: 200px;align-self: center">
			</div>
			<div class="col-md-2">
				<h4 class="text-left"><?php echo $run['name'] ?></h4>
				<input type="hidden" name="prod_id" value="<?php echo $run['prod_id'] ?>">
				<h6 class="text-left"><input type="text" name="price" value="<?php echo $run['prod_price'] ?>" ></h6>
				<h6 class="text-left"><input type="text" name="quantity" value="<?php echo $run['prod_quantity'] ?>"></h6>
				<h6 class="text-left"><textarea type="text" name="desc" rows="3" cols="20" class="form-control"><?php echo $run['description'] ?></textarea></h6>
				<input type="submit" name="product_edit" value="Update" class="btn btn-warning" style="color: #ffffff;">
			</div>
		</div>
	</form>
 <?php
}
 if(isset($_POST['product_edit'])){
 	echo "hi";
 	$prod_id=$_POST['prod_id'];
 	$prod_price=$_POST['price'];
 	$prod_quant =$_POST['quantity'];
 	$prod_desc =$_POST['desc'];
 	$query="UPDATE products SET prod_price='$prod_price',
 	prod_quantity='$prod_quant',
 	description='$prod_desc' WHERE prod_id='$prod_id' ";
 	echo $prod_quant;
 	$run =mysqli_query($db,$query);
 	
 	if($run){
 		echo "hi";
 		header("location: Sindex.php");
 	}
 
}


?>