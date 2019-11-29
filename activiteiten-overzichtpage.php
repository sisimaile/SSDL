<?php


include "nav.php";

include 'processen/class_activiteit.php';
include 'processen/viewActivity.php';

if (isset($_POST['activiteitdelete'])) {
    $activiteitid = $_POST['id'];
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
    <link rel="stylesheet" type="text/css" href="css/style_activiteiten-overzichtpage.css">  <!-- MOET NOG CSS TOEVOEGEN -->
    
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
  </head>
  <body>
 
<!-- Bootstrap CSS -->
<div class="content">

  <?php
    $titel = $_GET['pagina'];

    $pagina = new ViewPagina();
    $pagina->showactiviteitenPagina($titel)
  ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <?php
                        $activiteit = new viewActivity();
                        $activiteit->showAllActivities();
                    ?>
                    </div>
                </div>
            </div>

</div>

<?php
include "footer.php";
?>
  </body>
