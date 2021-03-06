<?php


include "nav.php";
include_once "processen/Pagina.php";
include_once "processen/ViewPagina.php";

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
    <link rel="stylesheet" type="text/css" href="css/style_homepage.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
  </head>
  <body>
 

<div class="content">  
<!--FIXED BACKGROUND-->

    <div class="fixed-wrap0">
        <div id="fixed">
            <div class="centered0">
            <h1>Welkom!</h1>
            <h3>De kabouter groet u met open armen</h3>
            </div>
            <img src="images/img5.jpg" class="img-fluid" alt="">
        </div>
    </div>
    
    <?php
        // $titel = $_GET['pagina'];
         //$datas = new ViewPagina();
         //$datas->showhomePagina($titel);
    ?>


<!--TWO COLUMN SECTION ABOUT US-->
            
<div class="container home-over-ons">
    <div class="row ">
        <div class="col-md-12 col-lg-6 ">
            <h2 class="display-3">Stichting Save the Dutch Leprechaun...</h2>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis asperiores nemo fugit nostrum repellat cumque quisquam vero? 
                Nihil laudantium pariatur atque, dolor recusandae error eum? In ipsam, quia eos ipsa officiis, ad corrupti error ratione 
                porro odio laudantium reiciendis consequatur aliquam nihil delectus tempora. Sapiente blanditiis nostrum incidunt dolore ex.</p>
            <br>
            <form action="over-ons.php" method="get">
                <button type="submit" class="btn btn-sidebar">meer over ons</button>
                <input type="hidden" value="over-ons" name="pagina">
            </form>
        </div>
        <div class="col-lg-6">     
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ratione temporibus blanditiis deleniti totam eligendi, porro 
            fugit laboriosam dolorum aut magnam molestias rerum ipsam quaerat quae velit dolor hic reprehenderit odit excepturi 
            soluta dignissimos impedit dolores! Excepturi impedit, corrupti laborum odio numquam vitae nobis nihil laboriosam ipsa
             sit voluptatibus nulla. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem pariatur delectus 
             labore obcaecati natus ullam ex vero modi, eveniet unde. Excepturi impedit, corrupti laborum odio numquam vitae nobis nihil laboriosam ipsa
             sit voluptatibus nulla. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem pariatur delectus 
             labore obcaecati natus ullam ex vero modi, eveniet unde.   Rem pariatur delectus 
             labore obcaecati natus ullam ex vero modi, eveniet unde.lores! Excepturi impedit, corrupti laborum odio numquam vitae nobis nihil laboriosam ipsa
             sit voluptatibus nulla. Lorem ipsum, dolor sit 
        

        </div>
    </div>
</div>


<div class="my-3"></div>

<!--THREE COLUMN SECTION LEER DE KABOUTER KENNEN-->
<div class="container leer-de-kabouter-kennen ">
    <div class="row text-center ">
        <div class="col-12">
            <h1 class="display-4">Leer de kabouter kennen!</h1>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-utensils"></i>
        <h3>Voedsel</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, numquam. Sapiente expedita pariatur temporibus assumenda perferendis nobis sunt facilis laborum.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-home"></i>
        <h3>Leefgebied</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, numquam. Sapiente expedita pariatur temporibus assumenda perferendis nobis sunt facilis laborum.</p>
        </div>
        <div class="col-xs-12 col-md-4">
        <i class="fas fa-language"></i>
        <h3>Taal</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, numquam. Sapiente expedita pariatur temporibus assumenda perferendis nobis sunt facilis laborum.</p>
        </div>
    </div>
    
</div>

<!--FIXED BACKGROUND2-->

<div class="fixed-wrap ">
        <div id="fixed">
            <img src="images/img3.jpg" alt="" class="img-fluid">
            <h3 class="display-4 text-center centered-fixedbackground2">Lorem ipsum dolor sit amet.</h3>
        </div>
    </div>


<!--TWO COLUMN SECTION ACTIVITEITENN-->

<div class="container-fluid">
    <div class="row two-column">
        <div class="col-md-12 col-lg-6 two-column-section1 ">
            <h1>Doe je ook mee aan de sponsorloop?</h1>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis asperiores nemo fugit nostrum repellat cumque quisquam vero? 
                Nihil laudantium pariatur atque, dolor recusandae error eum? In ipsam, quia eos ipsa officiis, ad corrupti error ratione 
                porro odio laudantium reiciendis consequatur aliquam nihil delectus tempora. Sapiente blanditiis nostrum incidunt dolore ex.</p>
            <br>
            <form action="activiteiten-overzichtpage.php" method="get">
                <button type="submit" class="btn btn-sidebar">meer activiteiten</button>
                <input type="hidden" value="activiteiten" name="pagina">
            </form>
        </div>
        <div class="col-lg-6 two-column-section2">
            <img src="images/img1.jpg" class="img-fluid" alt="">
        </div>
    </div>
    </div>


<!--SPONSOREN-->

<div class="container-fluid ">
    <div class="row titelleersponsorenkennen text-center">
        <div class="col-12">
            <h1 class="display-4">Leer onze sponsoren kennen</h1>
        </div>
        <hr>
        
    </div>
    <div class="row sponsorenkennen0 text-center">
        <div class="col-md-1"></div>
        <div class="col-md-2">
        <i class="fab fa-canadian-maple-leaf"></i>
        <h3>Chamomilla</h3>
        </div>
        <div class="col-md-2">
        <i class="fas fa-tree"></i>
        <h3>Fabula Activus</h3>
        </div>
        <div class="col-md-2">
        <i class="fab fa-pagelines"></i>
        <h3>Suplacon</h3>
        </div>
        <div class="col-md-2">
        <i class="fas fa-feather"></i>
        <h3>ROC Friese Poort</h3>
        </div>
        <div class="col-md-2">
        <i class="fas fa-paw"></i>
        <h3>Credon</h3>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row sponsorenkennen1 text-center">
        <div class="col">
            <form action="sponsorenpage.php" method="get">
                <button type="submit" class="btn btn-sidebar">meer sponsoren</button>
                <input type="hidden" value="sponsoren" name="pagina">
            </form>
        </div>
    </div>
</div>



<!--WIST U DAT TEXT-->
<div class="container-fluid">
    <div class="row jumbotron wistudat">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <h1 class="display-4">Wist u dat?</h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quidem libero eos exercitationem sapiente incidunt maiores ex, optio aliquid repudiandae.
                Nihil laudantium pariatur atque, dolor recusandae error eum? In ipsam, quia eos ipsa officiis, ad corrupti error ratione 
                porro odio laudantium reiciendis consequatur aliquam nihil delectus tempora. Sapiente blanditiis nostrum incidunt dolore ex
            </p>
        </div>
    </div>
</div>



</div>

<?php
include "footer.php";
?>




