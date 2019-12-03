<?php

include "class_sponsor.php";

class view extends Sponsor {

    public function getallSponsors(){
        $result = $this->retrievegegevens();
       
        foreach ($result as $value){
            $gegevensid = $value['Lidgegevens_ID'];

            $sponsor = $this->retrievesponsor($gegevensid);

                echo '<div class="container ">
                        <div class="row paddng my-3">
                            <div class="card get-all-sponsors" style="width: 25rem;">
                                    <img src="images/' . $sponsor['Lid_logo'] . '" alt="sponsor logo" class="card-img-top">
                                <div class="card-body">
                                        <h3 class="card-title get-all-sponsors-title">' . $value['Lid_gebruikersnaam'] . '</h3>
                                        <p class="card-text get-all-sponsors-p">' . $sponsor['Lid_tekst'] . '</p>
                                </div>
                            </div>
                        </div>
                    </div>';
                if (isset($_SESSION['lid'])){
                    if ($_SESSION['lid'] == 'admin'){
                        echo '<form action="sponsorenpage.php" method="post">
                                            <input type="submit" class="btn btn-primary mx-2" name="deleteSponsor" value="delete sponsor">
                                            <input type="hidden" name="id" value="' . $value['Lidgegevens_ID'] . '"> 
                                    </form>

                                    <form action="sponsor_wijzigen.php" method="get">
                                            <input type="submit" class="btn btn-primary mx-2" name="wijzigSponsor" value="wijzig sponsor">
                                            <input type="hidden" name="id" value="' . $value['Lidgegevens_ID'] . '">
                                    </form>';
                    }
                }
        }
    }

    public function viewoneSponsor($gegevensid){
        
        $result = $this->retrieveonegegevens($gegevensid);

        foreach ($result as $value){
            $gegevensid = $value['Lidgegevens_ID'];

            $sponsor = $this->retrievesponsor($gegevensid);

            echo '<div class="container ">
                        <div class="row paddng my-4">
                            <div class="col-lg-6 ">
                                <h3 class="help">Naam: ' . $value['Lid_gebruikersnaam'] . ' </h3>
                                <h3 class="help">Adres: ' . $sponsor['Lid_adres'] . ' </h3>
                                <h3 class="help">Plaats: ' . $sponsor['Lid_plaats'] . ' </h3>
                                <h3 class="help">Email: ' . $sponsor['Lid_email'] . ' </h3>
                                <h3 class="help">Telefoonnummer: ' . $sponsor['Lid_telefoonnummer'] . ' </h3>
                                <h3 class="help">Tekst: ' . $sponsor['Lid_tekst'] . ' </h3>
                                <h3 class="help">Logo: ' . $sponsor['Lid_logo'] . ' </h3>
                            </div>
                        </div>
                    </div>';
        }
    }
}



