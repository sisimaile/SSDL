<?php
//include "nav.php";
include 'processen/Connection.php';
include 'processen/class_activiteit.php';
include 'processen/viewActivity.php';


if (isset($_POST['activiteitchange'])){
    $activiteitID = $_POST['id'];
    $activiteitennaam = $_POST['naam'];
    $activiteitendatum = $_POST['datum'];
    $activiteitenstraat = $_POST['straat'];
    $activiteitenhuisnummer = $_POST['huisnummer'];
    $activiteitenpostcode = $_POST['postcode'];
    $activiteitenbeschrijving = $_POST['beschrijving'];
    $activiteitenimage = $_POST['image'];

    $change = new ActivityValidator();
    $change->changeactiviteit($activiteitID, $activiteitennaam, $activiteitendatum, $activiteitenstraat, $activiteitenhuisnummer, $activiteitenpostcode, $activiteitenbeschrijving, $activiteitenimage);
}

?>
  <!doctype html>
<html lang="en">
  <head>
    <title>Change activiteit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/f2c75c26a9.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_activiteit-change.css">
    
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
  </head>
  <body>
              <div class="content">
                  <section id="pagina-content">

                  <h3>Huidige gegevens</h3>
                  <?php
                  $selectedActiviteit = new viewActivity();
                  $selectedActiviteit->showOneActiviteit($_GET["id"]);
              ?>
          </div>




    <h3 class="test content">Nieuwe gegevens</h3>
    <?php
    echo "
    <div class='container-fluid'>
    <div class='content'>
    <div class='activiteit-aanpassen-box'> 
    <form action='activiteit-change.php' method='post'>
        
    <div class='textbox-activiteit-aanpassen form-group'>
        Naam:<br>
        <input type='text' name='naam'><br>
    </div> 
        
    <div class='textbox-activiteit-aanpassen form-group'>
        Datum:<br>
        <input type='date' name='datum'><br>
    </div> 
       
    <div class='textbox-activiteit-aanpassen form-group'>
        Straat:<br>
        <input type='text' name='straat'><br>
    </div> 
        
    <div class='textbox-activiteit-aanpassen form-group'>
        Huisnummer:<br>
        <input type='text' name='huisnummer'><br>
    </div> 

    <div class='textbox-activiteit-aanpassen form-group'>
        Postcode:<br>
       <input type='text' name='postcode'><br>
    </div> 
       
    <div class='textbox-activiteit-aanpassen form-group'>Beschrijving:<br>
        <textarea name='beschrijving'></textarea><br>
    </div> 
        
        
    <div class='textbox-activiteit-aanpassen form-group'>
        Image:<br>
        <input type='text' name='image'> <br><br>
    </div> 
       
        <input type='submit' value='change' class='knop-activiteit-aanpassen' name= 'activiteitchange'>
        <input type='hidden' value='" . $_GET['id'] . "' name='id'>
    </form>
    
    </div>
    </div>
    </div>";
    ?>
</section>
    </body>
