<?php

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

    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>Change activiteit</title>
    </head>
    </html>

    <body>
<section id="pagina-content">
    <h3>Huidige gegevens</h3>
    <?php
    $selectedActiviteit = new viewActivity();
    $selectedActiviteit->showOneActiviteit($_GET["id"]);
    ?>

    <h3>Nieuwe gegevens</h3>
    <?php
    echo "<form action='activiteit-change.php' method='post'>
        Naam:<br>
        <input type='text' name='naam'><br>
        Datum:<br>
        <input type='date' name='datum'><br>
        Straat:<br>
        <input type='text' name='straat'><br>
        Huisnummer:<br>
        <input type='text' name='huisnummer'><br>
        Postcode:<br>
        <input type='text' name='postcode'><br>
        Beschrijving:<br>
        <textarea name='beschrijving'></textarea><br>
        Image:<br>
        <input type='text' name='image'> <br><br>
        <input type='submit' value='change' name= 'activiteitchange'>
        <input type='hidden' value='" . $_GET['id'] . "' name='id'>
    </form>";
    ?>
</section>
    </body>
