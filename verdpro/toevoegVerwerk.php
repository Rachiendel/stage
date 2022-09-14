<?php 

 require 'config.php';

  

if (isset($_POST['verzend']))
	
{   $ja = $_POST['jaarVeld'];
    $ga = $_POST['GasVeld'];
    $el = $_POST['elektraVeld'];

	
    
    $query = "INSERT INTO verbruik";
    $query .= " (jaar, Gas, elektra)";
    $query .= " VALUES ('{$ja}','{$ga}', '{$el}')";
    
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
    echo "<a href='toonagenda.php'>OVERZICHT</a>";
}

 

else 
{
    echo "Het formulier is niet (goed) verstuurd<br/>";
}
?>