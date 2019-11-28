<?php
include "header.php";
include "nav.php";
include_once "processen/class_view_sponsor.php";
include_once "processen/class_sponsor.php";

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
        <h3 class="display-4">huidige gegevens</h3>
        <?php
            $gegevensid = $_GET['id'];

            $sponsor = new view();
            $sponsor->viewoneSponsor($gegevensid);
        ?>

        <h3 class="display-4">nieuwe gegevens</h3>
        <div class="content container">
            <form action="sponsor_wijzigen.php" method="POST">
                <div class="form-group ">
                    <label for="naamsponsor">Naam</label>
                    <input type="text" class="form-control" id="naamsponsor" name="naamsponsor" placeholder="Chamomilla">
                </div>

                <div class="form-row">
                    <div class=" form-group col-md-6">
                        <label for="straat">Straat</label>
                        <input type="text" class="form-control" id="straat" name="straatsponsor" placeholder="Europalaan">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="huisnummersponsor">Huisnummer</label>
                        <input type="text" class="form-control" id="huisnummersponsor" name="huisnummersponsor" placeholder="20">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="postcodeSponsor">postcode</label>
                        <input type="text" class="form-control" id="postcodeSponsor" placeholder="8303 JI" name="postcodesponsor">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="plaatsSponsor">plaats</label>
                        <input type="text" class="form-control" id="plaatsSponsor" name="plaatssponsor" placeholder="Emmeloord">

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
                    <input type="text" id="afbeeldingSponsor" name="afbeeldingsponsor">
                </div>

                <input type="hidden" name="id" value="<?php $gegevensid = $_GET['id']; echo $gegevensid; ?>">

                <input type="submit" name="wijzig" value="submit" class="btn btn-primary">
            </form>
        </div>

    </div>


</div>





<?php
include "footer.php";
?>
