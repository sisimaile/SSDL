<?php

include_once 'processen/Pagina.php';


if (isset($_POST['submit'])){
    $titel = $_POST['titel'];
    $message = $_POST['tekst'];
    $image = $_POST['image'];

    $pagina = new Pagina();
    $pagina->addPaginas($titel, $message, $image);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>SSDL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/f2c75c26a9.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_pagina-toevoegen.css"> 
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
  </head>
  <body>

  <div class="container-fluid">
      
      <div class="pagina-toevoegen-box">
          <h1>Pagina toevoegen</h1>
<section id="pagina-form">
    <form action="pagina-toevoegen.php" method="post">
        
        <div class="textbox-pagina-toevoegen form-group">
        <input type="text" name="titel" placeholder="Titel">
        </div>

      
        <div class="textbox-pagina-toevoegen form-group">
        <textarea name="tekst" placeholder="Tekst"></textarea><br>
        </div>

        <div class="textbox-pagina-toevoegen form-group">
        <input type="text" name="image" placeholder=" image.jpg"> 
        </div>


        <input type="submit" value="Submit" class="knop-pagina-toevoegen" name="submit">

    </form>
</section>
</div>
</div>
</body>
</html>
