<?php
include "classes/class_db.php";
include "header.php";
include "classes/class_sponsor.php";
include "classes/class_view_sponsor.php";


//include "nav.php";


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

<!--SPONSOR TOEVOEGEN-->

<div class="content container">
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
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
                <label for="landSponsor">land sponsor</label>
                <input type="text" class="form-control" id="landSponsor" name="landSponsor">
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
            <input type="file" id="afbeeldingSponsor" name="afbeeldingSponsor">
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

//include "footer.php";
?>