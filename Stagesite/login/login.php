<?php
    require '../dbconnect.php';
    session_start();
    $message="";
    if(count($_POST)>0) {
        $query = "SELECT * FROM `gebruikers` WHERE `username` = '".$_POST["username"]."' AND `password` = '".$_POST["password"]."'";
        $result = mysqli_query($db_connect, $query);
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            echo $row["username"];
            $_SESSION["username"] = $row['username'];
            echo $row["role"];
            $_SESSION["role"] = $row['role'];
            echo $row["ID"];
            $_SESSION["ID"] = $row['ID'];
        } else {
            $message = "Invalid username or password !";
        }
    }
    if(isset($_SESSION["username"])) {
        header("Location:../index.php");
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
</head>

<header>
    <nav>
        <ul class="nav__links">
            <li><a href="https://stageplaza.nl/wiki/sollicitatiegesprek_stage/#:~:text=Je%20moet%20je%20altijd%20voorbereiden,ook%20belangrijk%3B%20wees%20op%20tijd.">Tips</a></li>
            <li><a href="https://stagemarkt.nl/leerbedrijven/?Termen=Software+developer+(25604)&PlaatsPostcode=&Straal=0&Land=e883076c-11d5-11d4-90d3-009027dcddb5&ZoekenIn=O&Page=1&Longitude=&Latitude=&Regio=&Plaats=&Niveau=&SBI=&Kwalificatie=ecacf4bd-cd9c-e411-80f1-0050568a270a&Sector=&RandomSeed=301&Leerweg=2468c1a0-ad7b-4209-b27b-b12ae0e3d1d2&Internationaal=&Beschikbaarheid=&AlleWerkprocessenUitvoerbaar=&LeerplaatsGewijzigd=&Sortering=0&Bron=ORG&Focus=&LeerplaatsKenmerk=&OrganisatieKenmerk=">Bedrijven</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </nav>
    <a class="cta" href="index.php">Stagewebsite</a>

</header>


<div class="login-box">
    <h2>Login</h2>
    <form name="frmUser" method="post" action="">
        <div class="user-box">
            <input type="text" name="username" required="">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
        </div>
        <a href="#">
            <span></span>
            <span></span>
            <input type="submit" style="background-color: transparent; border-color: transparent;  name="submit value="Login" class="button">
        </a>
    </form>
</div>
</html>
<script type="text/javascript" src="script.js"></script>

<style>
    html {
        height: 100%;
    }
    body {
        margin:0;
        padding:0;
        font-family: sans-serif;
        background: linear-gradient(#141e30, #243b55);
    }

    .nav__links {
        list-style: none;
        display: flex;
    }

    .nav__links a,
    .cta,
    .overlay__content a {
        font-family: "Montserrat", sans-serif;
        font-weight: 500;
        color: #edf0f1;
        text-decoration: none;
    }

    .nav__links li {
        padding: 0px 20px;
    }

    .nav__links li a {
        transition: all 0.3s ease 0s;
    }

    .nav__links li a:hover {
        color: #0088a9;
    }

    .cta {
        margin-left: 20px;
        padding: 9px 25px;
        background-color: rgba(0, 136, 169, 1);
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease 0s;
    }

    .cta:hover {
        background-color: rgba(0, 136, 169, 0.8);
    }

    header {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 30px 10%;
        background-color: rgba(0,0,0,.5);
    }

    .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px;
    }

    .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }
    .login-box .user-box label {
        position: absolute;
        top:0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .login-box .user-box input:focus ~ label,
    .login-box .user-box input:valid ~ label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }

    .login-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
    }

    .login-box a:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
        0 0 25px #03e9f4,
        0 0 50px #03e9f4,
        0 0 100px #03e9f4;
    }

    .login-box a span {
        position: absolute;
        display: block;
    }

    .login-box a span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
    }

    @keyframes btn-anim1 {
        0% {
            left: -100%;
        }
        50%,100% {
            left: 100%;
        }
    }

    .login-box a span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
    }

    @keyframes btn-anim2 {
        0% {
            top: -100%;
        }
        50%,100% {
            top: 100%;
        }
    }

    .login-box a span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
    }

    @keyframes btn-anim3 {
        0% {
            right: -100%;
        }
        50%,100% {
            right: 100%;
        }
    }

    .login-box a span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
    }

    @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }
        50%,100% {
            bottom: 100%;
        }
    }

    .button{
        color:#03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 4px
    }
</style>
