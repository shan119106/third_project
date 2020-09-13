<?php 
include('db_connect.php');
$month = date('m');
$query ="SELECT COUNT(*) as count FROM orders WHERE  MONTH(order_date) ='$month' GROUP BY DATE(order_date) ORDER BY DATE(order_date) ASC";
$run =mysqli_query($db,$query);
while ($row =mysqli_fetch_assoc($run)) {
	$date =DATE_FORMAT($row['order_date'],'%d');
	$output[] =array(
		'date' => $date,
	     'product' => floatval($row['count']) 
	 );
	
}