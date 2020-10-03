<?php include('db_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		

	</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			overflow-y: scroll;
		}
		.button{
			border: none;
			margin:0px;
			border-radius: 15px;
			position: absolute;
			left: 40%;
			transform: translate(0%,50%);
			background-color: #ffcc00;
			color: #fff;
			text-align: center;
			font-size: 24px;
			width: 350px;
			height: 40px;
			padding-left: 20px;
		}
		#add_products{
			position: absolute;
			top: 60%;
			border-radius:5px;
		}
		nav ul{
	display: inline-block;
	list-style-type: none;

}

		
	</style>
</head>
<body>
	<?php
	include("sheader.php");
	?>

	<div>
		<button class="button" type="button" id="add">Add New Product&nbsp&nbsp<i class='fas fa-plus-circle' style='font-size:24px;'></i></button>
	</div>
	<div class="tab-content product">
		<h3 align="center" style="margin-top: 100px; text-decoration: underline #ffcc00;">Your Products</h3><br/>
		<div class="container">
			<div class="row mt-2 pb-3">
			<?php
				session_start();
				$username =$_SESSION['username'];
				$query ="SELECT * FROM products WHERE admin_name='$username' ORDER BY id DESC";
				$result=mysqli_query($db,$query);
				$var =0;
				while ($row =mysqli_fetch_assoc($result)) {
					
					?>

					
						<div class="col-lg-7">
							<div class="card-deck" style="width:800px; padding-left: 250px;margin-left: 20px;">
								<div class="card p-4 border-secondary mb-2">
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
										<button class="btn btn-info btn-block editItem" style="background-color:#ffcc00;border: 1px solid #ffcc00 ;"><i class="fa fa-edit" style="font-size:24px"></i>Edit</button>
										<button class="btn btn-info btn-block history" style="background-color:#ffcc00;border: 1px solid #ffcc00 ;">Purchases</button>
											
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
	</div>
	<div id="add_products"></div>
	<script type="text/javascript">
		$(document).ready(function(){
  $(".button").click(function(){
  	$(".button").hide();
  	$(".product").hide();
    $("#add_products").load("add_product.php");
  });
  $(".editItem").click(function(e){
  	e.preventDefault();
  	var $form =$(this).closest(".form-submit");
  	var pid =$form.find(".pid").val();
  	$.ajax({
  		url:'edit.php',
  		method:'post',
  		data:{pid:pid},
  		success:function(response){
  			$('.button').hide();
  			$(".product").html(response);
  		}
  	});
  	});

  	$(".history").click(function(e){
  		var $form =$(this).closest(".form-submit");
  	var pid =$form.find(".pid").val();
  	e.preventDefault();
  	$.ajax({
  		url:'history.php',
  		method:'post',
  		data:{pid:pid},
  		success:function(response){
  			$('.button').hide();
  			$(".product").html(response);
  		}
  	});
  });
});
	</script>
</body>

</html>