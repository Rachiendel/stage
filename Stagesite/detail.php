<?php
session_start();
require 'dbconnect.php';
if ($_SESSION['username']){
    if($_SESSION['role'] == "mentor"){
        require "dbconnect.php";
        $id = $_GET['id'];

        $query = "SELECT * FROM `gebruikers` WHERE `ID` = " . $id;
        $results = mysqli_query($db_connect, $query);

        while($row = mysqli_fetch_array($results)) {
            ?>
                <head>
                    <link rel="stylesheet" href="/tabel.css">
                </head>
            <main>
                <table id="customers">
                    <tr>
                        <th class="thAanmelding">Naam</th>
                        <th class="thAanmelding">Klas</th>
                        <th class="thAanmelding">StudentNR</th>
                        <th class="thAanmelding">Bedrijf</th>
                        <th class="thAanmelding">Datum</th>
                        <th class="thAanmelding">Plaats</th>
                        <th class="thAanmelding">Website</th>
                        <th class="thAanmelding">Contact Persoon</th>
                    </tr>

                    <tr>
                        <td><?=$row["username"]?></td>
                        <td><?=$row["klas"]?></td>
                        <td><?=$row["studentnr"]?></td>
                        <td><?=$row["bedrijf"]?></td>
                        <td><?=$row["datum"]?></td>
                        <td><?=$row["plaats"]?></td>
                        <td><?=$row["website"]?></td>
                        <td><?=$row["contactpersoon"]?></td>
                    </tr>
                </table>
            </main>

            <?php
        }
    } else {
            header("Location: index.php");
    }
}
