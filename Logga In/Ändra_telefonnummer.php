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

  <script>
    $(document).ready(function() {
      $('form').submit(function(event) {
        var telefonnummer1 = $('[name="telefonnummer"]').val();
        var telefonnummer2 = $('[name="telefonnummer2"]').val();

        if (telefonnummer1 !== telefonnummer2) {
          alert("Telefonnummer måste vara samma!");
          event.preventDefault(); // Prevent form submission
        }
      });
    });
  </script>

</head>

<body>

  <!-- beginning -->

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
    <li><a class="active">Kontaktinformation</a></li>
    </ul>
  </div>

  <div id="section1">
    
  </div>
  
  <div class="container">

    <div class="jumbotron" style=" background-color: #d3d3d3;" >

      <div class="col-md-3" id="kortInfoVänster">

        <a href="../.vscode/Capybara_Stone_Statue(PNG Version).png">
          <img src="../.vscode/Capybara_Stone_Statue(PNG Version).png" alt="CapybaraProfile" id="profileImage">        
        </a>
      </div>

      <div class="col-md-9" id="kortInfoHöger">

<!-- Kontaktinformation -->


        <!-- HTML för registrations form -->

        <?php
        session_start();
        ?>
        <form action="Register.Tel.php" method="post">
        

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>
        
        <?php } ?>

        <h1><strong>Kontaktinformation</strong></h1>

        <!-- test Telefonnummer -->

        <p id="inputText"><strong>Telefonnummer</strong></p>
        <input type="telefonnummer" name="telefonnummer" placeholder="Telefonnummer" required>

        <p id="inputText"><strong>Telefonnummer igen</strong></p>
        <input type="telefonnummer" name="telefonnummer2" placeholder="Bekräfta Dit Telefonnummer " required>

        <br>

        <button type="submit">Lägg Till</button>

      </form>

        <!-- Slut Skapa Konto -->

      </div>

    </div>

  </div>

  <!-- mid -->

  
  
  <!-- end -->
 

  <div id="end">
    <hr>
  </div>

  <footer>
    <p id="kontakt_info" style="color:rgb(223, 223, 223);">Kontakt</p>
    <div id="kontakt_länkar" style="color:rgb(201, 185, 185);">
      <b>Kontakta mig via e-post: <a href="mailto:05kacert@skola.boras.se">05kacert@skola.boras.se</a></b>
      <br>
      <b>Adress: <a href="https://www.google.com/maps/@34.9061752,139.1016718,2a,90y,302.45h,65.63t/data=!3m6!1e1!3m4!1shigNETkWXoUAAAQZLDcm2Q!2e0!7i13312!8i6656?entry=ttu">Capybara vägen 420</a></b>
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