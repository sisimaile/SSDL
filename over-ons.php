<?php

include "nav.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Over ons</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/f2c75c26a9.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_overonspage.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">

  

  </head>
  <body>
 
<div class="content overons">


<div class="container-fluid geenpadding ">

    <?php
        $titel = $_GET['pagina'];

        $pagina = new ViewPagina();
        $pagina->showoveronspagina($titel);
    ?>

 <div class="container">
 <div class="row contact-over-ons">
     <div class="col-md-4 contact-over-ons1">
         <p>0527 634 800</p>
         <p>info@ssdl.nl</p>
      

         <br>
        <p>Espelerlaan 4</p>
        <p>8203 DC Emmeloord</p>
        
        <div class="align-text-bottom">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-pinterest"></i>
        </div>
     </div>
     <div class="col-md-8">
        <img src="images/img5.jpg" class="img-fluid" alt="">
     </div>
 </div>
</div>

<br>
<br>





</div>
</div>



<?php
include "footer.php";

?>