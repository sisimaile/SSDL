<?php
include "header.php";
include "nav.php";

if (isset($_POST['wijzig'])){
    $sponsorgegevens_id = $_POST['id'];
    $sponsornaam = $_POST['naamsponsor'];
    $sponsorstraat = $_POST['straatsponsor'];
    $sponsorhuisnummer = $_POST['huisnummersponsor'];
    $sponsorpostcode = $_POST['postcodesponsor'];
    $sponsorplaats = $_POST['plaatssponsor'];
    $sponsoremail = $_POST['emailsponsor'];
    $sponsortelefoonnummer = $_POST['telefoonsponsor'];
    $sponsortekst = $_POST['overdesponsor'];
    $sponsorlogo = $_POST['afbeeldingsponsor'];

    $newsponsor = new Sponsor();
    $newsponsor->wijzigSponsor($sponsorgegevens_id, $sponsornaam, $sponsorstraat, $sponsorhuisnummer, $sponsorpostcode, $sponsorplaats, $sponsoremail, $sponsortelefoonnummer, $sponsortekst, $sponsorlogo);
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
    <link rel="stylesheet" type="text/css" href="css/style_sponsor-wijzigen.css">
    
    <link rel="shortcut icon" type="image/png" href="images/favicon1.png">
  </head>
  <body>

<div class="content">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-12 my-5">
                <h1 class="display-4">Sponsor wijzigen</h1>
            </div>

        </div>
    </div>



    <!--TWO COLUMN SECTION sponsoren-->
    <div id="sponsors">
        <h3 class="">huidige gegevens</h3>
        <?php
            $gegevensid = $_GET['id'];

            $sponsor = new view();
            $sponsor->viewoneSponsor($gegevensid);
        ?>

<div class="container">
    <div class="row">
        <div class="col-md">
            <h3 class="">nieuwe gegevens</h3>
        <div class="content container-fluid nieuwe-gegevens-sponsoren">
            <form action="sponsor_wijzigen.php" method="POST">
                <div class="form-group ">
                    <label for="naamsponsor">Naam</label>
                    <input type="text" class="form-control" id="naamsponsor" name="naamsponsor" >
                </div>

                <div class="form-row">
                    <div class=" form-group col-md-6">
                        <label for="straat">Straat</label>
                        <input type="text" class="form-control" id="straat" name="straatsponsor" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="huisnummersponsor">Huisnummer</label>
                        <input type="text" class="form-control" id="huisnummersponsor" name="huisnummersponsor" >
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="postcodeSponsor">postcode</label>
                        <input type="text" class="form-control" id="postcodeSponsor">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="plaatsSponsor">plaats</label>
                        <input type="text" class="form-control" id="plaatsSponsor" name="plaatssponsor">

                    </div>
                </div>

                <div class="form-group">
                    <label for="emailSponsor">email sponsor</label>
                    <input type="email" class="form-control" id="emailSponsor" name="emailsponsor">
                </div>

                <div class="form-group">
                    <label for="telefoonSponsor">telefoon sponsor</label>
                    <input type="text" class="form-control" id="telefoonSponsor" name="telefoonsponsor">
                </div>


                <div class="form-group">
                    <label for="overDeSponsor">over de sponsor</label>
                    <textarea class="form-control" id="overDeSponsor" rows="3" name="overdesponsor"></textarea>
                </div>

                <div class="form-group">
                    <label for="afbeeldingSponsor">afbeelding sponsor</label>
                    <input type="text" class="form-control" id="afbeeldingSponsor" name="afbeeldingsponsor">
                </div>

                <input type="hidden" name="id" value="<?php $gegevensid = $_GET['id']; echo $gegevensid; ?>">

                <input type="submit" name="wijzig" value="submit" class="btn btn-primary knop">
            </form>
        </div>

    </div>
        </div>
    </div>
</div>
        


</div>

<br>
<br>



<?php
include "footer.php";
?>
