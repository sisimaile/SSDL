<?php
include "class_sponsor.php";

class view extends Sponsor {

    public function getallSponsors(){
        $result = $this->retrievegegevens();

        foreach ($result as $value){
            $gegevensid = $value['Lidgegevens_ID'];

            $sponsor = $this->retrievesponsor($gegevensid);

                echo '<div class="container ">
                        <div class="row paddng my-4">
                            <div class="card get-all-sponsors" style="width: 25rem;">
                                    <img src="images/' . $sponsor['Lid_logo'] . '" alt="sponsor logo" class="card-img-top">
                                <div class="card-body ">
                                    <h3 class="card-title get-all-sponsors-title">' . $value['Lid_gebruikersnaam'] . '</h3>
                                    <p class="card-text get-all-sponsors-p">' . $sponsor['Lid_tekst'] . '</p>
                                <form action="sponsorenpage.php" method="post">
                                        <input type="submit" class="btn btn-primary mx-2" name="deleteSponsor" value="delete sponsor">
                                        <input type="hidden" name="id" value="' . $value['Lidgegevens_ID'] . '"> 
                                </form>

                                <form action="sponsor_wijzigen.php" method="get">
                                        <input type="submit" class="btn btn-primary mx-2" name="wijzigSponsor" value="wijzig sponsor">
                                        <input type="hidden" name="id" value="' . $value['Lidgegevens_ID'] . '">
                                </form>
                        </div>
                        </div>
                        </div>';
        }
    }

    public function viewoneSponsor($gegevensid){
        $result = $this->retrieveonegegevens($gegevensid);

        foreach ($result as $value){
            $gegevensid = $value['Lidgegevens_ID'];

            $sponsor = $this->retrievesponsor($gegevensid);

            echo '<div class="container ">
                        <div class="row paddng my-4">
                            <div class="col-lg-6 text-center">
                                <h3>Naam: ' . $value['Lid_gebruikersnaam'] . ' </h3>
                                <h3>Adres: ' . $sponsor['Lid_adres'] . ' </h3>
                                <h3>Plaats: ' . $sponsor['Lid_plaats'] . ' </h3>
                                <h3>Email: ' . $sponsor['Lid_email'] . ' </h3>
                                <h3>Telefoonnummer: ' . $sponsor['Lid_telefoonnummer'] . ' </h3>
                                <h3>Tekst: ' . $sponsor['Lid_tekst'] . ' </h3>
                                <h3>Logo: ' . $sponsor['Lid_logo'] . ' </h3>
                            </div>
                        </div>
                    </div>';
        }
    }
}



