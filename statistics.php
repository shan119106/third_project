
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("sheader.php");
?>

<div class="panel-body">
	<div id="chart_area" style="width: 1000px;height: 620px;" ></div>
</div>
<div class="hello"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
    	google.charts.load('current',{packages: ['corechart','line']});
    	google.charts.setOnLoadCallback();
    	function load_monthwise_data(title)
    	{
            
    		$.ajax({
    			url:"fetch.php",
    			type:'post',
                data:{title:"title"},
    		    dataType:'json',
    		    success: function(){
                    alert("hi");
                     //drawMonthwiseChart(data,title); 
    		    },
                 error: function(){
                    alert("frgf");
                     //drawMonthwiseChart(data,title); 
                }
    		});
    	}
        
        
    	/*function drawMonthwiseChart(chart_data,chart_main_title){
    		var jsonData =chart_data;
    		var data = new google.visualization.DataTable();
    		data.addColumn('string','Date');
    		data.addColumn( 'number','product');
            $.each(jsonData,function(i,jsonData){
                var date = jsonData.Date;
                var count = parseFloat($.trim(jsonData.product));
                data.addRows([date,count]); 
            });
            var options:
            {
                title:chart_main_title,
                hAxis: {title: 'Date'},
                vAxis: {title: 'Products'}  
            };
            var chart = new.google.visualization.LineChart(document.getElementById('chart_area'));
            chart.draw(data,options);
            
    	}

    	</script>
        <script type="text/javascript">
            $(document).ready(function(){
                
                        load_monthwise_data('this month progress');
                   
            });
        </script>
</body>
</html>