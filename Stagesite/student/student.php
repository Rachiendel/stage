<?php
require '../dbconnect.php';
session_start();
if ($_SESSION['username']){
    if($_SESSION['role'] == "student"){

    $query = "SELECT * FROM `gebruikers` WHERE `ID` = {$_SESSION["ID"]} AND `bedrijf` IS NOT NULL";
    $results = mysqli_query($db_connect, $query);

    ?>
     <head>
         <link rel="stylesheet" href="/tabel.css">
         <link rel="stylesheet" href="/index.css">

     </head>
    <li><a href="../login/out.php">Logout</a></li>
    <li><a href="toevoegen.php">Bedrijf Toevoegen</a></li>

        <main>
            <?php
            if (mysqli_num_rows($results) == 0){
                ?> <p>Er zijn geen stages</p> <?php
            } else {
                ?>
                <table id="customers">
                    <tr>
                        <th class="thAanmelding">Bedrijf</th>
                        <th class="thAanmelding">Plaats</th>
                        <th class="thAanmelding">Website</th>
                        <th class="thAanmelding">Contact Persoon</th>
                        <th class="thAanmelding">Datum</th>
                        <th></th>
                    </tr>
                    <?php
                    while($row = mysqli_fetch_array($results)) {
                        ?>
                        <tr>
                            <td><?=$row["bedrijf"]?></td>
                            <td><?=$row["plaats"]?></td>
                            <td><?=$row["website"]?></td>
                            <td><?=$row["contactpersoon"]?></td>
                            <td><?=$row["datum"]?></td>
                            <td><a href="../verwijder/verwijder.php">Verwijder</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table> <?php
            }
            ?>
        </main>

    <?php

    } else {
        header("Location: index.php");
    }
}

