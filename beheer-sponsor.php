<?php
include "processen/Connection.php";
//include "header.php";
include "processen/class_sponsor.php";
include "processen/class_view_sponsor.php";
include "nav.php";




if(isset($_POST['sponsortoevoegen'])) {
    $naam_sponsor = $_POST['naamsponsor'];
    $email_sponsor = $_POST['emailSponsor'];
    $telefoon_sponsor = $_POST['telefoonSponsor'];
    $overde_sponsor = $_POST['overDeSponsor'];
    $plaats_sponsor = $_POST['plaatsSponsor'];
    $straat_sponsor = $_POST['straatsponsor'];
    $huisnummer_sponsor = $_POST['huisnummersponsor'];
    $postcode_sponsor = $_POST['postcodeSponsor'];
    $afbeelding_sponsor = $_POST['afbeeldingSponsor'];

    $nieuweSponsor = new Sponsor;
    $nieuweSponsor->sponsor_toevoegen ($naam_sponsor, $email_sponsor, $telefoon_sponsor, $overde_sponsor, $plaats_sponsor, $straat_sponsor, $huisnummer_sponsor, $postcode_sponsor, $afbeelding_sponsor );
    
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
    <link rel="stylesheet" type="text/css" href="css/.css"> <!-- MOET NOG TOEVOEGEN CSS -->
    
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
  </head>
  <body>
 

<!--SPONSOR TOEVOEGEN-->

<div class="content container">
    <form action="beheer-sponsor.php" method="POST">
        <div class="form-group ">
            <label for="naamsponsor">Naam</label>
            <input type="text" class="form-control" id="naamsponsor" name="naamsponsor" placeholder="Chamomilla" value="">
            <div class="error">
                <?php //echo $errors['naamsponsor'] ?? '' ?>
            </div>
        </div>
        
        <div class="form-row">
            <div class=" form-group col-md-6">
                <label for="straat">Straat</label>
                <input type="text" class="form-control" id="straat" name="straatsponsor" placeholder="Europalaan">
                <div class="error">
                    <?php// echo $errors['straatsponsor'] ?? '' ?>
                 </div>
            </div>
            <div class="form-group col-md-6">
                <label for="huisnummersponsor">Huisnummer</label>
                <input type="text" class="form-control" id="huisnummersponsor" name="huisnummersponsor" placeholder="20">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="postcodeSponsor">postcode</label>
                <input type="text" class="form-control" id="postcodeSponsor" placeholder="8303 JI" name="postcodeSponsor">
                </div>

            <div class="form-group col-md-6">
                <label for="plaatsSponsor">plaats</label>
                <input type="text" class="form-control" id="plaatsSponsor" name="plaatsSponsor" placeholder="Emmeloord">
                
            </div>
        </div>

            <div class="form-group">
                <label for="emailSponsor">email sponsor</label>
                <input type="email" class="form-control" id="emailSponsor" name="emailSponsor">
            </div>

            <div class="form-group">
                <label for="telefoonSponsor">telefoon sponsor</label>
                <input type="text" class="form-control" id="telefoonSponsor" name="telefoonSponsor">
            </div>


        <div class="form-group">
            <label for="overDeSponsor">over de sponsor</label>
            <textarea class="form-control" id="overDeSponsor" rows="3" name="overDeSponsor"></textarea>
        </div>

        <div class="form-group">
            <label for="afbeeldingSponsor">afbeelding sponsor</label>
            <input type="text" id="afbeeldingSponsor" name="afbeeldingSponsor">
        </div>

   <button type="submit" name="sponsortoevoegen" class="btn btn-primary">sponsor toevoegen</button>
</form>
</div>


<?php
$check = new view;
$check->retrieveFromDb();
$check->viewSponsor();

?>

<?php

include "footer.php";
?>