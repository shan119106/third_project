<!DOCTYPE html>
<html>
<head>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
	<style type="text/css">
	.section{
  background: url(CSS/images/index_back.jpg) no-repeat center center fixed;
  background-size: cover;
  height: 350px;
  width: 100%;
  overflow:hidden;
  

}
*{
	margin:0;
	padding: 0;
	font-family: 'Open Sans', sans-serif;

	
}
html{
	scroll-behavior: smooth;

}
	
img{
	width: 150px;
	height: 50px;
}
.overlay{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 350px;
	overflow: hidden;
	background-color: rgba(0,0,0,0.6);
	font-family: 'Open Sans', sans-serif;
	overflow: hidden;
}
nav{
	flex: 1;
	text-align: right;

}
.navbar_nav{
	display: flex;
	align-items: center;
	padding: 20px;
	
}

nav ul{
	display: inline-block;
	list-style-type: none;

}
nav ul li{
	display: inline-block;
	margin-right: 20px;

}
a{
	text-decoration: none;
	color:#ffffff; 
}
a:hover{
	
	color:#fffc00; 
}
i{
  margin-right:20px;
  align-content: center;
}
	</style>

</head>
<body>
	<div class='section'></div>
	<div class="overlay">
	<div class="navbar_nav ">
		<div class="logo">
			<img src="CSS/images/icon.png">
		</div>
		
			<nav>
			<ul>
				<li><a href="bindex.php"><i class='fas fa-shopping-bag' style='font-size:36px'></i><br>PRODUCTS</a></li>
				<li><a href="account.php" class="login"><i class='fas fa-user-alt' style='font-size:36px'></i><br>ACCOUNT</a></li>
				<li><a href="Cart.php" class="login"><i class="fa fa-shopping-cart" style="font-size:48px;"></i></a></li>
				<li><a href="bborder.php" class="login"><i class="fa fa-cart-arrow-down" style="font-size:36px"></i></a></li>
				<li><a href="logout.php" class="login"><i class="fa fa-sign-out" style="font-size:36px;  margin-right:10px;"></i><br>LOGOUT</a></li>

			</ul>
			</nav>
		
	</div>
</div>
</body>
</html>