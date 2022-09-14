
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href="index.css">
</head>
<body>
	
     <div class="navbar">
    <h1>ENERGIEOVERZICHT HUISHOUDENS</h1>
  <a href="index.php">Index</a> 
  <a class="active" href="Overzicht.php">overzicht</a> 
  <a href="toevoegForm.php">invoer</a> 
  <a href="admin.php">admin</a> 
  <a href="logout.php">Log uit</a>
</div>
	
	

	
</body>
</html>

<?php
 
require 'config.php';
 
$query =  "SELECT * FROM verbruik";
 
$result =  mysqli_query($mysqli, $query);
 
if(!$result){
 
    echo "<p>FOUT!</p>";
    echo "<p> . </p>";
    echo "<p> . mysqli_error($mysqli) </p>";
    exit;
}
 
if(mysqli_num_rows($result)>0){
 
    echo "<table border='1px'>";
 
    echo "<tr><th>jaar</th><th>Gas</th><th>elektra</th>";
 
    while ($item = mysqli_fetch_assoc($result)){
 
        echo "<tr>";
 
        echo "<td>" . $item['jaar'] . " </td> ";
 
        echo "<td>" . $item['Gas'] . "</td>";

        echo "<td>" . $item['elektra'] . "</td>";

    }
    echo "</tr>";
    echo "</table>";} 
else {
    echo "<p> Geen items gevonden!<p/>";
}
?>
