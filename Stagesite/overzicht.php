<?php
session_start();
if ($_SESSION['username']){
    if($_SESSION['role'] == "mentor"){
        require "dbconnect.php";

        $query = "SELECT * FROM `gebruikers`";
        $results = mysqli_query($db_connect, $query);
?>
        <main>
                <?php
                    if (mysqli_num_rows($results) == 0){
                        ?> <p>Er zijn geen studenten in uw klas</p> <?php
                    } else {
                        ?>
                            <head>
                                <link rel="stylesheet" href="tabel.css">
                                <link rel="stylesheet" href="index.css"></head>

                        <header>
                            <nav>
                                <ul class="nav__links">
                                    <li><a href="https://stageplaza.nl/wiki/sollicitatiegesprek_stage/#:~:text=Je%20moet%20je%20altijd%20voorbereiden,ook%20belangrijk%3B%20wees%20op%20tijd.">Tips</a></li>
                                    <li><a href="https://stagemarkt.nl/leerbedrijven/?Termen=Software+developer+(25604)&PlaatsPostcode=&Straal=0&Land=e883076c-11d5-11d4-90d3-009027dcddb5&ZoekenIn=O&Page=1&Longitude=&Latitude=&Regio=&Plaats=&Niveau=&SBI=&Kwalificatie=ecacf4bd-cd9c-e411-80f1-0050568a270a&Sector=&RandomSeed=301&Leerweg=2468c1a0-ad7b-4209-b27b-b12ae0e3d1d2&Internationaal=&Beschikbaarheid=&AlleWerkprocessenUitvoerbaar=&LeerplaatsGewijzigd=&Sortering=0&Bron=ORG&Focus=&LeerplaatsKenmerk=&OrganisatieKenmerk=">Bedrijven</a></li>
                                    <li><a href="./login/out.php">Logout</a></li>
                                </ul>
                            </nav>
                            <a class="cta" href="index.php">Stagewebsite</a>
                        </header>
                        <table id="customers">
                            <tr>
                                <th class="thAanmelding">Naam</th>
                                <th class="thAanmelding">Klas</th>
                                <th class="thAanmelding">StudentNR</th>
                                <th class="thAanmelding">Bedrijf</th>
                                <th class="thAanmelding">Datum Contract</th>
                                <th class="thAanmelding">Details</th>
                            </tr>
                            <?php
                        while($row = mysqli_fetch_array($results)) {
                            if($row['klas'] == $_SESSION['role']['mentor'])
                            ?>16TB SSD harde schijf draagbare SSD externe harde schijf voor draagbare desktop type-c
                            <tr>
                                <td><?=$row["username"]?></td>
                                <td><?=$row["klas"]?></td>
                                <td><?=$row["studentnr"]?></td>
                                <?php
                                if($row["bedrijf"] == null){
                                    echo "";
                                } else {
                                 ?> <td><?=$row["bedrijf"]?></td>
                                    <td><?=$row["datum"]?></td>
                                    <td><a href="detail.php?id=<?=$row['ID']?>">Details</a></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                        }
                        ?>
                        </table> <?php
                    }
                ?>
            <script src="script.js"></script>

        </main> <?php

        }
    } else {
    header("Location: index.php");
}


