<?php include('db_connect.php'); ?>
<?php
				session_start();
				$username=$_SESSION['username'];
				?>
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
		#sideBar{
			background-color: #ffffff;
		}
		.container{
			margin-top: 100px;

		}
		.btn-warning{
			width: 70px;
			height: 52px;
			padding: 12.5px;
			border-radius: 0px;
			padding-left: 20px;
		}
		.form-control{
			padding: 25px;
			height: 48px;

		}
		.All,.women,.Men,.Kitchen_Appliances,.Home_Appliances,.Electronics{
			height: 50px;
			color: #ffcc00;
			border:none;
			border-bottom:1px solid #d9d9d9;
			border-radius: 0px;
			background-color: #ffffff;
		}
		.active{
			background-color: #ffcc00;
			color: #ffffff;
			border:none;
			margin: none;
			outline: none;
		}
		
	</style>
</head>
<body>
	<?php
	include("bheader.php");
	include("db_connect.php");
	?>
	
	<div class="tab-content" >
		<h3 align="center" style="margin-top: 100px; text-decoration: underline #ffcc00;">Products</h3><br/>
		<div class="container">
			<form method="post" id="form1" action="">
				<div class="input-group">
					<input type="text" name="content" class="form-control context" placeholder="Search">
					<div class="input-group-btn">
						<button class="btn btn-warning search_bar"  type="button" name ="search_bar" form="form1"><i class='fas fa-search' style='font-size:30px;color: white;'></i></button>

					</div>
				</div>
			</form>
		</div>
	<div class="container">
		<div class="row">
		<div class="col-lg-3">
				<div class="nav flex-column nav-pills" id ="v-pills-tab" role="tablist" aria-orientation="vertical">
					<button  class="  All" id="v-pills-home-tab" data-toggle="pill" role="tab" id="sideBar" style="">All</button>
					<button  class="  women" id="v-pills-home-tab" data-toggle="pill" role="tab" id="sideBar" style="">Women</button>
					<button  class=" Men" id="v-pills-home-tab" data-toggle="pill" role="tab" id="sideBar" style="">Men</button>
					<button  class=" Kitchen_Appliances" id="v-pills-home-tab" data-toggle="pill" role="tab" id="sideBar" style="">Kitchen Appliances</button>
					<button  class=" Home_Appliances" id="v-pills-home-tab" data-toggle="pill" role="tab" id="sideBar" style="">Home Appliances</button>
					<button class=" Electronics" id="v-pills-home-tab" data-toggle="pill" role="tab" id="sideBar" style="">Electronics</button>
				</div>
			</div>
			<div class="col-lg-9">
				 <div class=" tab-pane products"></div>
			</div>
	   
		
	
	</div>
	</div>
	</div>	
	
	<script type="text/javascript">
		$(document).ready(function(){
			$(".products").load('all.php');
  	$(".addToCart").click(function(e){
  		
  		var form =$(this).closest(".form-submit");
  		var pid=form.find(".pid").val();
  		e.preventDefault();
  		$.ajax({
  			url: 'addToCart.php',
  			method:'post',
  			data: {pid:pid},
  			success:function(response){
  				alert("added successfully");
  			}

  		});
  	});
  	$(".search_bar").click(function(e){
  		var query=$('.context').val();
  		e.preventDefault();
  		$.ajax({
  			url:'search.php',
  			method:'post',
  			data:{query:query},
  			success:function(response){
  				$(".products").html(response);
  			}

  		});
	});
	$(".All").click(function(){
		$(".products").load('all.php');
		$("button").removeClass("active");
		$(this).addClass("active");
	});
	$(".women").click(function(){
		$(".products").load('women.php');
		$("button").removeClass("active");
		$(this).addClass("active");
	});
	$(".Men").click(function(){
		$(".products").load('men.php');
		$("button").removeClass("active");
		$(this).addClass("active");
	});
	$(".Kitchen_Appliances").click(function(){
		$(".products").load('kitchen_Appliances.php');
		$("button").removeClass("active");
		$(this).addClass("active");
	});
	$(".Home_Appliances").click(function(){
		$(".products").load('home_Appliances.php');
		$("button").removeClass("active");
		$(this).addClass("active");
	});
	$(".Electronics").click(function(){
		$(".products").load('Electronics.php');
		$("button").removeClass("active");
		$(this).addClass("active");
	});

  
});
	</script>
</body>

</html>