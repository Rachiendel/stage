<?php 

$connect = mysqli_connect("localhost", "Databasesdb", "#1Geheim", "Databasesdb");
$query = "SELECT * FROM account";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
    if ($row["jaar"] == "2019"){
        $chart_data1 .= "{ jaar:'".$row["jaar"]."', verbruik:".$row["verbruik"].", totaalverbruik:".$row["totaalverbruik"]."}, ";
    }
    if ($row["jaar"] == "2020"){
        $chart_data2 .= "{ jaar:'".$row["jaar"]."', verbruik:".$row["verbruik"].", totaalverbruik:".$row["totaalverbruik"]."}, ";
    }
    if ($row["jaar"] == "2021"){
        $chart_data3 .= "{ jaar:'".$row["jaar"]."', verbruik:".$row["verbruik"].", totaalverbruik:".$row["totaalverbruik"]."}, ";
    }
}
$chart_data = substr($chart_data, 0, -2);
?>

<!DOCTYPE html>
<html>
 <head>
  <title>overzicht gas en electra</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>

 <body>
  <div class="container" style="width:900px;">
   <h2 align="center">Overzicht van gas</h2>
   <br /><br />
   <h2>2019</h2>
   <div id="chart1"></div>
   <h2>2020</h2>
   <div id="chart2"></div>
   <h2>2021</h2>
   <div id="chart3"></div>
  </div>
 </body>
</html>

<script>
Morris.Bar({
 element : 'chart1',
 data:[<?php echo $chart_data1; ?>],
 xkey:'jaar',
 ykeys:['verbruik', 'totaalverbruik'],
 labels:[ 'verbruik', 'totaalverbruik'],
 hideHover:'auto',
 stacked:true
});
Morris.Bar({
 element : 'chart2',
 data:[<?php echo $chart_data2; ?>],
 xkey:'jaar',
 ykeys:['verbruik', 'totaalverbruik'],
 labels:[ 'verbruik', 'totaalverbruik'],
 hideHover:'auto',
 stacked:true
});
Morris.Bar({
 element : 'chart3',
 data:[<?php echo $chart_data3; ?>],
 xkey:'jaar',
 ykeys:['verbruik', 'totaalverbruik'],
 labels:[ 'verbruik', 'totaalverbruik'],
 hideHover:'auto',
 stacked:true
});
</script>
