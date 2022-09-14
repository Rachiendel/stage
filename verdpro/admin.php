<?php
require 'config.php';
session_start();
if($_SESSION["name"]) {

?>

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
  <a href="toonagenda.php">Agenda</a>
  <a href="toevoegForm.php">invoer</a> 
  <a href="admin.php">admin</a> 
  <a href="logout.php">Log uit</a>
</div>
	
	

	
</body>
</html>

<?php
}else {
	header("Location:login.php");}
?>