<?php
include "processen/Connection.php";
//include "header.php";
include "processen/class_sponsor.php";
include "processen/class_view_sponsor.php";


include "nav.php";


if(isset($_POST['sponsortoevoegen'])) {
    $naam_sponsor = $_POST['naamsponsor'];
    $straat_sponsor = $_POST['straatsponsor'];
    $huisnummer_sponsor = $_POST['huisnummersponsor'];
    $postcode_sponsor = $_POST['postcodeSponsor'];
    $plaats_sponsor = $_POST['plaatsSponsor'];
    $land_sponsor = $_POST['landSponsor'];
    $email_sponsor = $_POST['emailSponsor'];
    $telefoon_sponsor = $_POST['telefoonSponsor'];
    $overde_sponsor = $_POST['overDeSponsor'];
    $afbeelding_sponsor = $_POST['afbeeldingSponsor'];

    $nieuweSponsor = new Sponsor;
    $nieuweSponsor->naam_sponsor = $naam_sponsor;
    $nieuweSponsor->straat_sponsor = $straat_sponsor;
    $nieuweSponsor->huisnummer_sponsor =  $huisnummer_sponsor;
    $nieuweSponsor->postcode_sponsor = $postcode_sponsor;
    $nieuweSponsor->plaats_sponsor = $plaats_sponsor;
    $nieuweSponsor->land_sponsor = $land_sponsor;
    $nieuweSponsor->email_sponsor = $email_sponsor;
    $nieuweSponsor->telefoon_sponsor = $telefoon_sponsor;
    $nieuweSponsor->overde_sponsor = $overde_sponsor;
    $nieuweSponsor->afbeelding_sponsor = $afbeelding_sponsor;

    $nieuweSponsor->sponsor_toevoegen ($naam_sponsor, $straat_sponsor, $huisnummer_sponsor, $postcode_sponsor, $plaats_sponsor, $land_sponsor, $email_sponsor, $telefoon_sponsor, $overde_sponsor, $afbeelding_sponsor );
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
    <link rel="stylesheet" type="text/css" href="css/style_beheer-sponsor.css"> 
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
  </head>
  <body>
 

<!--SPONSOR TOEVOEGEN-->
<div class="row ">
    <div class="col bla">
        <h1>Voeg een sponsor toe</h1>
    </div>
</div>
<div class="content container">
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <div class="form-group ">
            <input type="text" class="form-control" id="naamsponsor" name="naamsponsor" placeholder="Naam" value="">
            <div class="error">
                <?php //echo $errors['naamsponsor'] ?? '' ?>
            </div>
        </div>
        
        <div class="form-row">
            <div class=" form-group col-md-5 mx-1">
                
                <input type="text" class="form-control" id="straat" name="straatsponsor" placeholder="Straat">
                <div class="error">
                    <?php// echo $errors['straatsponsor'] ?? '' ?>
                 </div>
            </div>
            <div class="form-group col-md-3 mx-1">
                
                <input type="text" class="form-control" id="huisnummersponsor" name="huisnummersponsor" placeholder="Huisnummer">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-3 mx-1">
                
                <input type="text" class="form-control" id="postcodeSponsor" placeholder="postcode" name="postcodeSponsor">
                </div>

            <div class="form-group col-md-5 mx-1">
                
                <input type="text" class="form-control" id="plaatsSponsor" name="plaatsSponsor" placeholder="plaats">
                
            </div>
        </div>
        <div class="form-group">
                
                <input type="text" class="form-control" id="landSponsor" name="landSponsor" placeholder="land sponsor">
            </div>


            <div class="form-group">
                
                <input type="email" class="form-control" id="emailSponsor" name="emailSponsor" placeholder="email sponsor">
            </div>

            <div class="form-group">
                
                <input type="text" class="form-control" id="telefoonSponsor" name="telefoonSponsor" placeholder="telefoon sponsor">
            </div>


        <div class="form-group">
            
            <textarea class="form-control" id="overDeSponsor" rows="3" name="overDeSponsor" placeholder="over de sponsor"></textarea>
        </div>

        <div class="form-group">
            <label for="afbeeldingSponsor">afbeelding sponsor</label>
            <input type="file" id="afbeeldingSponsor" name="afbeeldingSponsor">
        </div>

   <button type="submit" name="sponsortoevoegen" class="btn btn-primary knop-sponsor-toevoegen">sponsor toevoegen</button>
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