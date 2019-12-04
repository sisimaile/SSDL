
<?php

session_start();

include 'processen/Connection.php';
include 'processen/Pagina.php';
include 'processen/ViewPagina.php';
include 'processen/class_view_sponsor.php';
include 'processen/viewActivity.php';
include 'processen/ViewLid.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/f2c75c26a9.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_navbar.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
  </head>
  <body>


<div class="sidebar text-center">
    <div class="sidebar-header">
        <form action="homepage.php" method="get">
            <button type="submit" class="btn-icoon my-1 text-center">
                <i class="fas fa-leaf" id=""></i>
            </button>
            <input type="hidden" value="home" name="pagina">
        </form>
    </div>
   
    <form action="over-ons.php" method="get">
        <button type="submit" class="btn btn-sidebar">Over-ons</button>
        <input type="hidden" value="over-ons" name="pagina">
    </form>
    
    <form action="sponsorenpage.php" method="get">
        <button type="submit" class="btn btn-sidebar">Sponsoren</button>
        <input type="hidden" value="sponsoren" name="pagina">
    </form>
    
    <form action="activiteiten-overzichtpage.php" method="get">
        <button type="submit" class="btn btn-sidebar">Activiteiten</button>
        <input type="hidden" value="activiteiten" name="pagina">
    </form>
    <?php
        $pagelink = new ViewPagina();
        $pagelink->showAllPaginasTitel();
    ?>

    <?php
    if(isset($_SESSION['lid'])) {
        if ($_SESSION['lid'] == 'admin') {
            $beheerderlinks = new ViewPagina();
            $beheerderlinks->showbeheerderlinks();
        }
    }else{

    }
    ?>


    <div class="knopsidebar text-center">
        <a href="processen/logout.php"><button type="button" class="btn btn-sidebar-gh my-1 text-center">uitloggen</button></a>
        <a href="login.php"><button type="button" class="btn btn-sidebar-gh my-1 text-center">inloggen</button></a>
        <a href="leden-aanmelden.php"><button type="button" class="btn btn-sidebar-gh my-1 text-center">aanmelden</button></a>
    </div>

    

   
</div>

</body>
 <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>
</html>