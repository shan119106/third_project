<?php include("db_connect.php");
?>
<div class="col-lg-9 search_products">
<div class=" tab-pane" id ="v-pills-Kitchen-Appliances" role="tabpanel">
			<div class="row mt-2 pb-3 ">
			<?php
				
				$query ="SELECT * FROM products  WHERE prod_category='Kitchen Appliances' ORDER BY id DESC";
				$result=mysqli_query($db,$query);
				$var =0;
				while ($row =mysqli_fetch_assoc($result)) {
					
					?>

					
						<div class="col-lg-7">
							<div class="card-deck" style="width: 800px;">
								<div class="card p-2 border-secondary mb-2">
									<img src="<?php echo $row['img1']; ?>" class="card-img-top" style="height: 200px;width: 200px;align-self: center">
									<div class="card-body p-1">
										<h4 class="card-title text-center text-body"><?php echo $row['name']; ?></h4>
										<h5 class="card-text text-center text-warning"><i class="fa fa-rupee" style="font-size:20px"></i><?php echo$row['prod_price']; ?>/-</h5>
										<h5 class="card-text text-center text-body">Quantity:<?php echo$row['prod_quantity']; ?></h5>
										<h5 class="card-text text-center text-body" style="font-size: 16px;"><?php echo$row['description']; ?></h5>
									</div>
									<div class="card-footer p-1">
										<form action="" class="form-submit
										">
										<input type="hidden" name="prod_id" class="pid" value="<?php echo $row['prod_id']?>">
										<button class="btn btn-info btn-block addToCart" style="background-color:#ffcc00;border: 1px solid #ffcc00 ;"><i class="fa fa-shopping-cart" style="font-size:24px"></i></i>Add To Cart</button>
											
										</form>
									</div>

						
								</div>
							</div>
						</div>
					<?php
				}
			?>
			</div>
		</div>