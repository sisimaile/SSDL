<?php

include "header.php";
include "nav.php";

include 'processen/Connection.php';
include 'processen/Pagina.php';
include 'processen/ViewPagina.php';
?>


<div class="content">  <!--Houd overige apart-->
<!--FIXED BACKGROUND-->

    <div class="fixed-wrap0">
        <div id="fixed">
            <img src="images/img2a.jpg" alt="" class="img-fluid">
                <div class="centered0">
                <h1 class="display-2">Bedankt!</h1>
                <h3>De kabouter is u dankbaar!</h3>
                </div>
        </div>
    </div>
   





<!--TWO COLUMN SECTION ABOUT US-->
            
<div class="container home-over-ons">
    <div class="row ">
        <div class="col-md-12 col-lg-6 ">
            <h2 class="display-3">Stichting Save the Dutch Leprechaun...</h2>
            
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


<div class="my-4"></div>

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
            <h1>Lorem ipsum dolor sit...</h1>
            <h3>laudantium reiciendis consequatur aliquam nihil</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis asperiores nemo fugit nostrum repellat cumque quisquam vero? 
                Nihil laudantium pariatur atque, dolor recusandae error eum? In ipsam, quia eos ipsa officiis, ad corrupti error ratione 
                porro odio laudantium reiciendis consequatur aliquam nihil delectus tempora. Sapiente blanditiis nostrum incidunt dolore ex.</p>
            <br>
            <a href="#" class="btn btn-primary">meer activiteiten</a>
        </div>
        <div class="col-lg-6 two-column-section2">
            <img src="images/img1.jpg" class="img-fluid" alt="">
        </div>
    </div>
</div>

<?php
$paginas = new ViewPagina();
$paginas->showAllPaginasTitel();
?>



<!--SPONSOREN-->
<div class="container-fluid padding">
    <div class="row titelleersponsorenkennen text-center">
        <div class="col-12">
            <h1 class="display-4">Leer onze sponsoren kennen</h1>
        </div>
        <hr>
        
    </div>
    <div class="row sponsorenkennen text-center">
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
    <div class="row sponsorenkennen text-center">
        <div class="col">
            <button class="btn btn-primary" >Meer over onze sponsoren</button>
        </div>
    </div>
</div>


<!--WIST U DAT TEXT-->
<div class="container-fluid ">
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



<?php
include "footer.php";
?>
</div>




