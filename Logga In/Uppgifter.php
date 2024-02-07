<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>CapyPark</title>
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/235/235359.png">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="PhpStandard.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    hr {
        margin-top: 120px;
        height: 25px;
        background-color: #2D6A4F;
        border: none;
    }
</style>

</head>

<body>

  <!-- begining -->

  <div id="firstDiv">
    <img src="../.vscode/Capybara_Photoshop_Baner_kopia1.jpg" alt="CapybaraBanner" id="headerImage">
  </div>
  
  <div id="secondDiv">
    <ul>
    <li><a href="../Index.html">Hem</a></li>
    <li><a href="../Angånde Mig/AngandeMig.html">Angående Mig</a></li>
    <li><a href="../Intressen/Intressen.html">Intressen</a></li>
    <li><a href="../Akademiska Kurser/AkademiskaKurser.html">Akademiska Kurser</a></li>
    <li><a href="../Arbetat Med/ArbetatMed.html">Arbetat Med</a></li>
    <li><a href="../Kontakt Information/KontaktInformation.html">Kontakt</a></li>
    <li><a class="active" href="AngandeMig.html">Logga In</a></li>
    </ul>
  </div>

  <div id="thirdDiv">
    
  </div>
  
  <div class="container">

    <div class="jumbotron" style=" background-color: #d3d3d3;" >

      <div class="col-md-3" id="kortInfoVänster">

        <a href="../.vscode/Capybara_Stone_Statue(PNG Version).png">
          <img src="../.vscode/Capybara_Stone_Statue(PNG Version).png" alt="CapybaraProfile" id="profileImage">        
        </a>
      </div>

      <div class="col-md-9" id="kortInfoHöger">

         <!-- in loggnigns fomrulär -->

         <h1><strong>Logga In</strong></h1> 

          <!-- loga in -->
          <form action="LoggaIn.php" method="post">


          <?php if (isset($_GET['error'])) { ?>

          <p class="error"><?php echo $_GET['error']; ?></p>

          <?php } ?>

          <br>

          <p id="inputText"><strong>Användar Namn</strong></p>

          <input type="text" name="uname" placeholder="Användar Namn" required><br>

          <p id="inputText"><strong>Lösenord</strong></p>

          <input type="password" name="password" placeholder="Lösenord" required><br> 

          <br> 

          <button type="submit">Login</button>

          </form>

        <!-- Slut på loga in -->

      </div>

    </div>

  </div>

  <!-- mid -->

  
  <div class="container" id="smal">

    <div class="jumbotron">
      <h1><strong>Skapa Konto</strong></h1>

      <h2><b>Om du inte har ett konto?</b></h2>
      
        <dl>
          <dd> <b>Var kreativ! Skapa ett konto nu!</b> </dd>
          <br>
          <dd><b>-</b> Skapa ett användarnamn du kommer minnas.</dd>
          <br>
          <dd><b>-</b> Ett lösenord, som du kan komma ihåg väl, men även är säkert genom att vara orginalt. <b>(Hälst inte: "abc123")</b></dd>
        </dl>

        <!-- Skapa Konto -->

        <!-- HTML for the registration form -->
        
      <form action="Register.php" method="post">
        

        <?php if (isset($_GET['error'])) 
        { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>
        
        <?php } ?>

        <p id="inputText"><strong>Användarnamn</strong></p>
        <input type="text" name="uname" placeholder="Användarnamn" required>

        <p id="inputText"><strong>Lösenord</strong></p>
        <input type="password" name="password" placeholder="Lösenord" required>

        <br>

        <button type="submit">Skapa Konto</button>
      </form>

        <!-- Slut Skapa Konto -->

    </div>

  </div>

  <!-- end -->
 

  <div id="end">
    <hr>
  </div>

  <footer>
    <p id="kontakt_info" style="color:rgb(223, 223, 223);">Kontakt</p>
    <div id="kontakt_länkar" style="color:rgb(201, 185, 185);">
      <b>Kontakta mig via e-post: <a href="mailto:05kacert@skola.boras.se">05kacert@skola.boras.se</a></b>
      <br>
      <b>Adress: <a href="https://www.google.com/maps/@34.9061752,139.1016718,2a,90y,302.45h,65.63t/data=!3m6!1e1!3m4!1shigNETmWXoUAAAQZLDcm2Q!2e0!7i13312!8i6656?entry=ttu">Capybara vägen 420</a></b>
      <br>
      <b>Telefon: <a>033-430 48 00</a></b>
      <br>
      <b>Webbansvarig: <a href="mailto:05kacert@skola.boras.se">Kacper Ertmanski</a></b>
      <br>
      <b>Senast Uppdaterad: <a>2023-10-04</a></b>
    </div>
  </footer>
  
</body>
</html>