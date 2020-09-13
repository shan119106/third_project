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
  overflow-y:scroll;
  scroll-behavior: smooth;
  

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
	width: 99%;
	height: 350px;
	overflow: hidden;
	background-color: rgba(0,0,0,0.6);
	font-family: 'Open Sans', sans-serif;
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
a:hover {
  color: #ffcc00;
}

i{
 
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
				<li><a href="Sindex.php"><i class='fas fa-shopping-bag' style='font-size:36px; margin-right:30px;'></i><br>PRODUCTS</a></li>
				<li><a href="account.php" class="login"><i class='fas fa-user-alt' style='font-size:36px; margin-right:25px;'></i><br>ACCOUNT</a></li>
				<li><a href="Statistics.php"><i class="fa fa-line-chart" style="font-size:36px; margin-right:20px;"></i><br>STATISTICS</a></li>
				<li><a href="logout.php"><i class="fa fa-sign-out" style="font-size:36px;  margin-right:10px;"></i><br>LOGOUT</a></li>
			</ul>
			</nav>
		
	</div>
</div>
</body>
</html>