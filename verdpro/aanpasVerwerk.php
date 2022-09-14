<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href="index.css">
</head>
<body>
		 <div class="navbar">
    <h1>CRUD</h1>
  <a class="active" href="index.php">Index</a> 
  <a href="toevoegForm.php">Tabel</a> 
  <a href="toonagenda.php">Agenda</a> 
  <a href="logout.php">Log uit</a>
</div>
	
</body>
</html>










<?php

require 'config.php';
session_start();
if($_SESSION["name"]) {

if (isset($_POST['verzend'])){
    //lees alle velden uit en stop de waarden in variabelen

    $id = $_POST['idVeld'];
    $na = $_POST['naamVeld'];
    $gebr = $_POST['geboortedatumVeld'];
    $gesl = $_POST['geslachtVeld'];
    $lan = $_POST['landVeld'];
    $genr = $_POST['genreVeld'];
  
}

$query = "UPDATE artiest";
$query .= " SET naam = '{$na}', geboortedatum = '{$gebr}', geslacht = '{$gesl}', ";
$query .= " land = '{$lan}', genre = '{$genr}'";
$query .= " WHERE ID = {$id}";


$result = mysqli_query($mysqli, $query);

if ($result)
    {
        echo "Het item is toegevoeged<br/>";
    }
    else
    {
        echo "FOUT bij toevoegen <br/>";
        echo $query . "<br/>";
        echo mysqli_error($mysqli);
    }


echo "<a href='toonagenda.php'>OVERZICHT</a> <br/>";

}else {
	header("Location:login.php");}

?>

