<?php

include "header.php";
include "nav.php";

include 'processen/Connection.php';
include 'processen/Pagina.php';
include 'processen/ViewPagina.php';
?>
<!--FIXED BACKGROUND-->
<figure>
    <div class="fixed-wrap">
        <div id="fixed"></div>
    </div>
</figure>


<!--WELCOME TEXT-->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">De kabouter is u dankbaar!</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quidem libero eos exercitationem sapiente incidunt maiores ex, optio aliquid repudiandae.
            </p>
        </div>
    </div>
</div>

<hr class="my-4">

<!--THREE COLUMN SECTION-->
<div class="container-fluid padding">
    <div class="row text-center padding">
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
    <hr class="my-4">
</div>

<!--TWO COLUMN SECTION ACTIVITEITENN-->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <h2>Lorem ipsum dolor sit...</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis asperiores nemo fugit nostrum repellat cumque quisquam vero? 
                Nihil laudantium pariatur atque, dolor recusandae error eum? In ipsam, quia eos ipsa officiis, ad corrupti error ratione 
                porro odio laudantium reiciendis consequatur aliquam nihil delectus tempora. Sapiente blanditiis nostrum incidunt dolore ex.</p>
            <br>
            <a href="#" class="btn btn-primary">meer activiteiten</a>
        </div>
        <div class="col-lg-6">
            <img src="images/img1.jpg" class="img-fluid" alt="">
        </div>
    </div>
</div>

<?php
$paginas = new ViewPagina();
$paginas->showAllPaginasTitel();
?>

<hr class="my-4">


<?php
include "footer.php";
?>