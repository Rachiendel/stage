<?php
require 'dbconnect.php';
session_start();

switch($_SESSION['role']){
    case "mentor":
        header("Location: overzicht.php");
        break;
    case "student":
        header("Location: student/student.php");
        break;
    default:
        break;
}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">

</head>
<body>
<header>
    <nav>
        <ul class="nav__links">
            <li><a href="https://stageplaza.nl/wiki/sollicitatiegesprek_stage/#:~:text=Je%20moet%20je%20altijd%20voorbereiden,ook%20belangrijk%3B%20wees%20op%20tijd.">Tips</a></li>
            <li><a href="https://stagemarkt.nl/leerbedrijven/?Termen=Software+developer+(25604)&PlaatsPostcode=&Straal=0&Land=e883076c-11d5-11d4-90d3-009027dcddb5&ZoekenIn=O&Page=1&Longitude=&Latitude=&Regio=&Plaats=&Niveau=&SBI=&Kwalificatie=ecacf4bd-cd9c-e411-80f1-0050568a270a&Sector=&RandomSeed=301&Leerweg=2468c1a0-ad7b-4209-b27b-b12ae0e3d1d2&Internationaal=&Beschikbaarheid=&AlleWerkprocessenUitvoerbaar=&LeerplaatsGewijzigd=&Sortering=0&Bron=ORG&Focus=&LeerplaatsKenmerk=&OrganisatieKenmerk=">Bedrijven</a></li>
            <li><a href="./login/login.php">Login</a></li>
        </ul>
    </nav>
    <a class="cta" href="index.php">Stagewebsite</a>
    <style>
        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
        }

    </style>
</header>

<div class="login-box">
    <h1 style="color: white; text-align: center">Stagesite</h1>
</div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>





























<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <link rel="stylesheet" href="style.css">-->
<!--    <title>Home</title>-->
<!--</head>-->
<!--<body>-->
<!--    <nav>-->
<!--        <ul>-->
<!--            --><?php
//            if($_SESSION['username'])
//            {
//                ?><!-- <li><a href="login/out.php">Logout</a></li>--><?php
//            }?>
<!--            <li><a href="login/login.php">Login</a></li>-->
<!--        </ul>-->
<!--    </nav>-->
<!---->
<!---->
<!--</body>-->
<!--</html>-->