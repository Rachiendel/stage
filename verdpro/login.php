<?php

require 'config.php';
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','db86947','rzaweedn','86947_database') or die('Unable To connect');
		
		$username = $_POST["user_name"];
		$password = $_POST["password"];
		$stmt = $con->prepare("SELECT * FROM user WHERE user_name=? AND password=md5(?);");
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();
		$result = $stmt->get_result();
		
        //$result = mysqli_query($con,"SELECT * FROM user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index.php");
    }
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href="login.css">
</head>
<body>
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input   type="password" name="password">
<br><br>
<input   type="submit" name="submit" value="Submit">
<input   type="reset">
</form>
</body>
</html>





