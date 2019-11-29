<?php 
include "processen/Connection.php";
require("processen/class_activiteit.php");
//include "test/viewActivity.php";
//include "header.php";
include "nav.php";


if(isset($_POST["activiteittoevoegen"])) {
    //validate entries
    $validation = new ActivityValidator ($_POST);
    $errors = $validation->validateForm();
    
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
    <link rel="stylesheet" type="text/css" href="css/style_beheer-activiteit.css">   
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
  </head>
  <body>
 
<!--ACTIVITEIT TOEVOEGEN-->
<div class="content ">

<div class="row ">
    <div class="col">
        <h1 class="titelpagina">Voeg een activiteit toe</h1>
    </div>
</div>


<div class=" container-fluid ">
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <div class="row" >
        <div class="form-group col-md-4 mx-1">
            <input type="text" class="form-control" id="titelactiviteit" name="titelactiviteit" placeholder="titel activiteit" >
        <div class="error">
                <?php echo $errors['titelactiviteit'] ?? '' ?>
        </div>
    </div>
       
        <div class="form-group col-md-3 mx-1">
            <input type="date" class="form-control" id="datumactiviteit" name="datumactiviteit">
            <div class="error">
                <?php echo $errors['datumactiviteit'] ?? '' ?>
            </div>
        </div>
        
    </div>


    <div class="form-row">
        <div class=" form-group col-md-5 mx-1">
            <input type="text" class="form-control" id="straat" name="straatactiviteit" placeholder="Straat">
                <div class="error">
                    <?php echo $errors['straatactiviteit'] ?? '' ?>
                 </div>
            </div>
        <div class="form-group col-md-2 mx-1">
            <input type="text" class="form-control" id="huisnummer" name="huisnummeractiviteit" placeholder="Huisnummer">
                <div class="error">
                    <?php echo $errors['huisnummeractiviteit'] ?? '' ?>
                 </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-2 mx-1">
            <input type="text" class="form-control" id="postcode" placeholder="postcode" name="postcodeactiviteit">
                <div class="error">
                    <?php echo $errors['postcodeactiviteit'] ?? '' ?>
                </div>
        </div>
        <div class="form-group col-md-5 mx-1">
            <input type="text" class="form-control" id="plaats" name="plaatsactiviteit" placeholder="plaats">
                <div class="error">
                    <?php echo $errors['plaatsactiviteit'] ?? '' ?>
                 </div>
            </div>
        </div>

        <div class="form-group col-md-7 mx-1">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="beschrijvingactiviteit" placeholder="Beschrijving van de activiteit"></textarea>
                <div class="error">
                    <?php echo $errors['beschrijvingactiviteit'] ?? '' ?>
                 </div>
        </div>

        <div class="form-group col-md-7">
            <input type="text" class="form-control" id="image" name="image" placeholder="image.file">
                <div class="error">
                    <?php echo $errors['image'] ?? '' ?>
                </div>
        </div>

   <button type="submit" name="activiteittoevoegen" class="btn btn-primary knop-activiteit-toevoegen">activiteit toevoegen</button>
</form>
</div>
</div>
<?php
/*
$activiteit = new viewActivity();
$activiteit->showAllActivities();
*/
?>

<?php
include "footer.php";
?>