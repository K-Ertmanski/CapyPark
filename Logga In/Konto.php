<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CapyPark</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/235/235359.png">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="PhpStandard.css" id="stylesheet">
    <link rel="stylesheet" href="PhpStandardDark.css" id="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    </style>
</head>

<body>

    <!-- Beginning -->
    <div id="firstDiv">
        <img src="../.vscode/Capybara_Photoshop_Baner_kopia1.jpg" alt="CapybaraBanner" id="headerImage">
    </div>
    <div id="secondDiv">        
        <header>
        
          <ul>
            <li><a href="../Index.html">Hem</a></li>
            <li><a href="../Angånde Mig/AngandeMig.html">Angående Mig</a></li>
            <li><a href="../Intressen/Intressen.html">Intressen</a></li>
            <li><a href="../Akademiska Kurser/AkademiskaKurser.html">Akademiska Kurser</a></li>
            <li><a href="../Arbetat Med/ArbetatMed.html">Arbetat Med</a></li>
            <li><a href="../Kontakt Information/KontaktInformation.html">Kontakt</a></li>
            <li><a class="active" href="AngandeMig.html">Konto</a></li>
            <button id="toggleBtn">Toggle Dark Mode</button>
          </ul>
          
        </header>
        <!-- Dark Mode Toggle Button -->

    </div>

    <div class="container">

        <div class="jumbotron">

            <div class="col-md-3" id="kortInfoVänster">
                <a href="../.vscode/Capybara_Stone_Statue(PNG Version).png">
                    <img src="../.vscode/Capybara_Stone_Statue(PNG Version).png" alt="CapybaraProfile" id="profileImage">
                </a>
            </div>

            <div class="col-md-9" id="kortInfoHöger">

                <!-- in loggnigns redirect -->

                <!-- Welcome Information-->
                <?php
                session_start();
                if (isset($_SESSION["id"]) && isset($_SESSION["user_name"])) {
                ?>
                    <h1>Hej!  <?php echo $_SESSION["user_name"]; ?> </h1>
                    <a href="LoggaUt.php">Logga Ut</a>
                <?php
                } else {
                    header("Location: Uppgifter.php");
                    exit();
                }
                ?>
                <br>
                <a href="#kInfo">Konto Information</a>
                <!-- Welcome Information -->
            </div>
        </div>
    </div>

    <!-- Mid -->
    <div class="container" id="smal">
        <div class="jumbotron">
            <h2 id="kInfo"><b> Konto Information</b></h2>
            <dl>
                <dd> <b>Personlig information</b> </dd>
                <br>
                <dd><b>-</b> Användarnamn: <b><?php echo $_SESSION["user_name"]; ?></b> </dd>
                <br>
                <dd><b>-</b> Lösenord: <b> * * * * *</b></dd>
                <dd> <i>(Har du glömt ditt lösenord?)</i></dd>
                <br>
                <dd><b>-</b> E-post: <b><?php echo $_SESSION["email"]; ?></b> </dd>
                <br>
                <dd><b>-</b> Telefonnummer: <b>
                        <?php
                        if (isset($_SESSION["telefonnummer"]) && $_SESSION["telefonnummer"] !== "0") {
                            echo $_SESSION["telefonnummer"]; // If telephone number exists in the session and is not zero, display it
                        } else {
                            echo '<a href="Ändra_telefonnummer.php">Fyll i ditt telefonnummer</a>'; // If not or is zero, provide a link to update it
                        }
                        ?>
                </b> </dd>
                <br>
                <dd><b>-</b> ID: <b><?php echo $_SESSION["id"]; ?></b></dd>
            </dl>
        </div>
    </div>
    <!-- End -->
    <div id="end">
        <hr>
    </div>
    <footer>
        <p id="kontakt_info">Kontakt</p>
        <div id="kontakt_länkar">
            <b>Kontakta mig via e-post: <a href="mailto:05kacert@skola.boras.se">05kacert@skola.boras.se</a></b>
            <br>
            <b>Adress: <a href="https://www.google.com/maps/@34.9061752,139.1016718,2a,90y,302.45h,65.63t/data=!3m6!1e1!3m4!1shigNETWVXoUAAQZLDcm2Q!2e0!7i13312!8i6656?entry=ttu">Capybara vägen 420</a></b>
            <br>
            <b>Telefon: <a>033-430 48 00</a></b>
            <br>
            <b>Webbansvarig: <a href="mailto:05kacert@skola.boras.se">Kacper Ertmanski</a></b>
            <br>
            <b>Senast Uppdaterad: <a>2023-10-04</a></b>
        </div>
    </footer>
    <script src="..\Index.js"></script> <!-- Include the JavaScript file -->
</body>
</html>
