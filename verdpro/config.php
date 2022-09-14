 <?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


$db_hostname = 'localhost';
$db_username = 'db86947';
$db_password = 'rzaweedn';
$db_database = '86947_database';


$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if(!$mysqli){
    echo "FOUT: geen connectie naar database. <br>";
    echo "ERROR:" . mysqli_connect() . "<br/>";
    exit;
}



?>

