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
                            <div class="col-lg-6 text-center">
                            <img src="images/' . $sponsor['Lid_logo'] . '" alt="sponsor logo">
                            </div>
                            <div class="col-md-12 col-lg-6 text-center">
                                <h2>' . $value['Lid_gebruikersnaam'] . '</h2>
                                <p>' . $sponsor['Lid_tekst'] . '</p>
                                <br>
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
}



