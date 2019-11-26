<?php

include "header.php";
include "nav.php";

include 'processen/Connection.php';
include 'processen/Pagina.php';
include 'processen/ViewPagina.php';

?>
<div class="content">
<!--FIXED BACKGROUND-->
<div class="row">
    <div class="col">
        <div class="container">
            <img src="images/img3.jpg" alt="" class="img-fluid">
            <div class=" centered">
                <h1 class="display-2">Bedankt!</h1>
                <h3>De kabouter is u dankbaar!</h3>
            </div>
        </div>
    </div>
</div>


<hr class="my-4">

<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <h2>Stichting Save the Leprechaun...</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis asperiores nemo fugit nostrum repellat cumque quisquam vero? 
                Nihil laudantium pariatur atque, dolor recusandae error eum? In ipsam, quia eos ipsa officiis, ad corrupti error ratione 
                porro odio laudantium reiciendis consequatur aliquam nihil delectus tempora. Sapiente blanditiis nostrum incidunt dolore ex.</p>
            <br>
            <a href="#" class="btn btn-primary">meer over ons</a>
        </div>
        <div class="col-lg-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum.</p>
        </div>
    </div>
</div>

<hr class="my-4">

<!--THREE COLUMN SECTION-->
<div class="container-fluid padding">
    <div class="row text-center padding">
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
    <hr class="my-4">
</div>

<!--FIXED BACKGROUND2-->
<figure>
    <div class="fixed-wrap">
        <div id="fixed">
            <img src="images/img3.jpg" alt="" class="img-fluid">
            <h3 class="display-4 text-center">Lorem ipsum dolor sit amet.</h3>
        </div>
    </div>
</figure>


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

<hr class="my-4">

<?php
$paginas = new ViewPagina();
$paginas->showAllPaginasTitel();
?>


<!--SPONSOREN-->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Leer onze sponsoren kennen</h1>
        </div>
        <hr>
        
    </div>
    <div class="row">
        <div class="col-md-2">
        <i class="fab fa-canadian-maple-leaf"></i>
        </div>
        <div class="col-md-2">
        <i class="fas fa-tree"></i>
        </div>
        <div class="col-md-2">
        <i class="fab fa-pagelines"></i>
        </div>
        <div class="col-md-2">
        <i class="fas fa-feather"></i>
        </div>
        <div class="col-md-2">
        <i class="fas fa-paw"></i>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <button>Meer over onze sponsoren</button>
        </div>
    </div>
</div>

<hr class="my-4">

<!--WELCOME TEXT-->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Wist u dat?</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quidem libero eos exercitationem sapiente incidunt maiores ex, optio aliquid repudiandae.
            </p>
        </div>
    </div>
</div>

</div>



<?php
include "footer.php";
?>