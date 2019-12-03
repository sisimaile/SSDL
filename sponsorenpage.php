<?php


//include "nav.php";
include "processen/class_view_sponsor.php";
include_once "processen/class_sponsor.php";
include_once "processen/ViewPagina.php";
include_once "processen/Pagina.php";

if (isset($_POST['deleteSponsor'])){
    $sponsorid = $_POST['id'];

    $delete = new Sponsor();
    $delete->deleteSponsor($sponsorid);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Sponsoren</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/f2c75c26a9.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_sponsorenpage.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
  </head>
  <body>
 
<div class="container-fluid">
    <div class="content">

        <?php
            $titel = $_GET['pagina'];
            $pagina = new ViewPagina();
            $pagina->showsponsorPagina($titel)
        ?>
    
<br>
    <!--TWO COLUMN SECTION sponsoren-->
        <div id="sponsors">
            <?php
               $sponsor = new view();
                $sponsor->getallSponsors();
            ?>
        </div>
    </div>
</div>
 

<?php

include "footer.php";
?>
    

