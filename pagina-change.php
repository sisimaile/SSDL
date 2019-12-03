<?php

//include "header.php";
include "nav.php";


if (isset($_POST['paginachange'])){
    $paginaID = $_POST['id'];
    $paginatitel = $_POST['titel'];
    $paginatekst = $_POST['tekst'];
    $paginaimage = $_POST['image'];

    $change = new Pagina();
    $change->changepagina($paginaID, $paginatitel, $paginatekst, $paginaimage);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Pagina change</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <script src="https://kit.fontawesome.com/f2c75c26a9.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_pagina-change.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
  </head>
  <body>
 
<div class="container-fluid content">
    <div class="row">
        <div class="col-6 paginaveranderen-box">
            <section id="pagina-content">
                <h3>Huidige gegevens</h3>
                <?php
                    $selectedPagina = new ViewPagina();
                    $selectedPagina->showOnePagina($_GET["id"]);
                ?>
        </div>

        <div class="col-6 nieuwe-gegevens text-center">
                <h3>Nieuwe gegevens</h3>
                <?php
                echo "<form action='pagina-change.php' method='post'>
                    <div class='form-group'>
                    <p>Titel:</p>
                    <input type='text' name='titel'><br>
                    </div>

                    <div class='form-group'>
                    <p>tekst:</p>
                    <textarea name='tekst'></textarea><br>
                    </div>

                    <div class='form-group'>
                    <p>afbeelding</p>
                    <input type='text' name='image'> <br><br>
                    </div>

                    <div class='form-group'>
                    <input type='submit' class='btn btn-primary' value='change' name= 'paginachange'>
                    <input type='hidden' value='" . $_GET['id'] . "' name='id'>
                    </div>
                </form>"
                ?>
            </section>
        </div>
    </div>
</div>

<p>test123</p>

<?php
include "footer.php";
?>