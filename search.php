<?php
include("db_connect.php");
if($_POST['query']){
	
	$query1=$_POST['query'];
	$query="SELECT * FROM products WHERE name LIKE '%$query1%' OR description LIKE '%$query1%'";
	$result=mysqli_query($db,$query);
	if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_array($result)){
			?>
			<div class="col-lg-7">
							<div class="card-deck" style="width:800px">
								<div class="card p-2 border-secondary mb-2">
									<img src="<?php echo $row['img1']; ?>" class="card-img-top" style="height: 200px;width: 200px;align-self: center">
									<div class="card-body p-1">
										<h4 class="card-title text-center text-body"><?php echo $row['name']; ?></h4>
										<h5 class="card-text text-center text-warning"><i class="fa fa-rupee" style="font-size:20px"></i><?php echo$row['prod_price']; ?>/-</h5>
										<h5 class="card-text text-center text-body">Quantity:<?php echo$row['prod_quantity']; ?></h5>
										<h5 class="card-text text-center text-body" style="font-size: 16px;"><?php echo$row['description']; ?></h5>
									</div>
									<div class="card-footer p-1">
										<form action="" class="form-submit">
										<input type="hidden" name="prod_id" class="pid" value="<?php echo $row['prod_id']?>">
										<button class="btn btn-info btn-block addToCart" style="background-color:#ffcc00;border: 1px solid #ffcc00 ;"><i class="fa fa-shopping-cart" style="font-size:24px"></i></i>Add To Cart</button>
											
										</form>
									</div>

						
								</div>
							</div>
						</div>
						<?php
		}

	}

	else{
		?>
		<p>product not found</p>
		<?php
		}
	
	
}
?>