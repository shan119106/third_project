<?php
include("db_connect.php");
$month = date('m');
$query ="SELECT * FROM orders WHERE  MONTH(order_date) ='$month' ";
$run =mysqli_query($db,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("sheader.php");
?>
<?php
while($row=mysqli_fetch_assoc($run)){
	
}
?>
<div class="panel-body">
	<div id="chart_area" style="width: 1000px;height: 620px;" ></div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    	google.charts.load('current',{packages: ['corechart','bar']});
    	google.charts.setOnLoadCallback();
    	function load_monthwise_date(year,title)
    	{
    		var temp_title ="this month progress";
    		$.ajax({
    			url:"fetch.php",
    			method:'post',
    		    data:{value:'hi'},
    		    dataType:'json',
    		    success:function(response){

    		    }
    		});
    	}
    	function drawMonthwiseChart(chart_data,chart_main,main_title){
    		var jsonData =chart_data;
    		var data = new google.visualization.DataTable();
    		data.addColumn('string','Date');
    		data.addColumn('product')
    	}

    	</script>
</body>
</html>