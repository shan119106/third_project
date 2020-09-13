<?php include("db_connect.php");
if($_POST['pid']){
$pid =$_POST['pid'];
?>
<div class="container">
	<div class="row justify-content-center">
		<table class="table text-center">
			<tr>
				<td colspan="7">
					<h4 class="text-center text-warning m-0">Cart</h4>
				</td>
			</tr>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Date</th>

			</tr>
			<tbody>
			
			<?php
			   $query ="SELECT * from orders WHERE product_id ='$pid'";
			   $result =mysqli_query($db,$query);
			   while($run =mysqli_fetch_assoc($result)){
			   $date=$run['order_date'];
			   echo $date;
			   $user =$run['user_name'];
			   	$query ="SELECT * FROM user WHERE username ='$user'  LIMIT 1";
			   	$row = mysqli_fetch_assoc(mysqli_query($db,$query));
			   
			   	?>
			   	<tr>
			   		<td><?php echo $user ?></td>
			   		<td><?php echo $row['email'] ?></td>
			   		<td><?php echo $date; ?></td>
			   	</tr>
			   	<?php
			   }
			}
			   ?>
			</tbody>
			<tr>
				<td colspan="1">
					<a href="Sindex.php" class="btn btn-warning" style="color: #ffffff;">Go Back</a>
				</td>
				
			</tr>
		</table>
	</div>
</div>