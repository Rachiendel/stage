<?php
session_start();
if ($_SESSION['username']){
    if ($_SESSION['role'] == "student") {
        require '../dbconnect.php';

        $query = "SELECT * FROM `gebruikers` WHERE ID = " . $_SESSION["ID"];
        $results = mysqli_query($db_connect, $query);
        ?>
        <html>
        <head>
            <title>Toevoegen</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <div id="toevoegen"><a href="student.php">Home</a></div>
        <div class="login-box">
            <form name="coinFormulier" method="post" action="toevoegVerwerk.php" id="main">
                <table>
                    <tr>
                        <td>Bedrijf naam:</td>
                        <td><input type="text" name="naamVeld" required></td>
                    </tr>
                    <tr>
                        <td>Plaats:</td>
                        <td><input type="text" name="plaatsVeld" required></td>
                    </tr>
                    <tr>
                        <td>Website:</td>
                        <td><input type="text" name="websiteVeld" required/></td>
                    </tr>
                    <tr>
                        <td>Contact persoon:</td>
                        <td><input type="text" name="contactVeld" required/></td>
                    </tr>
                    <tr>
                        <td>Datum:</td>
                        <td><input type="date" name="datumVeld" required/></td>
                    </tr>
                    <tr>
                        <td class="submitKnop"><input type="submit" name="verzend" value="Voeg toe aan het overzicht"></td>
                    </tr>
                </table>
            </form>
        </body>
        </html>
<?php
    } else {
        header("Location ../index.php");
    }
}

?>

<style>
    #main {
        width: max-content;
        margin: 40px auto;
        font-family: "Segoe UI", sans-serif;
        padding: 25px 28px;
        background: greenyellow;
        border-radius: 4px;
        border: 1px solid #302d2d;
        animation: popup 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);
    }
</style>
