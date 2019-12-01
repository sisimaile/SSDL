<?php

class viewActivity extends ActivityValidator {

    public function showAllActivities () {
        $datas = $this->retrieveactivity();
        foreach ($datas as $data) {
            echo "<div class='col-md-3'>
                        <div class='card showallactivitiescard' style='width: 25rem;'>
                        <img src= 'images/" . $data['Activiteit_image'] . "' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title showAllActivities-h5'>" . $data['Activiteit_Naam'] . "</h5>
                            <h6 class='card-subtitle mb-2 text-muted showAllActivities-h6'>" . $data['Activiteit_Datum'] . "</h6>
                            <p class='card-text showAllActivities-text'>" . $data['Activiteit_Beschrijving'] . "</p>
                            <p class='card-text showAllActivities-text'>plaats: " . $data['Activiteit_Plaats'] . " - adres: " . $data['Activiteit_Straat'] . " " . $data['Activiteit_Huisnummer'] . " - Postcode: " . $data['Activiteit_Postcode'] . "</p>

                        <div>
                            <form action='activiteit-change.php' method='get'>
                                <input type='submit' value='change' class='btn btnactiviteitaanpassen text-center' name='activiteitupdate'>
                                <input type='hidden' name='id' value='" . $data['Activiteit_ID'] . "'>
                            </form>
                        </div>
                        
                        <div>
                            <form action='activiteiten-overzichtpage.php' method='post'>
                                <input type='submit' value='delete' class='btn btnactiviteitverwijderen' name='activiteitdelete'>
                                <input type='hidden' name='id' value='" . $data['Activiteit_ID'] . "'>
                            </form>
                        </div>
                        
                        <div>
                            <form action='activiteiten-aanmelden.php' method='post'>
                                <input type='submit' value='aanmelden' class='btn btnactiviteitaanmelden' name='aanmelden'>
                                <input type='hidden' name='id' value='" . $data['Activiteit_ID'] . "'>
                            </form>
                            "; $activiteitid = $data['Activiteit_ID'];
                                $aantaldeelnemers = $this->getallDeelnemers($activiteitid);
                                echo '<p class="showallactiviteiten-aantaldeelnemers">aantal deelnemers: ' . $aantaldeelnemers . "</p>
                        </div>
                            
                        </div>
                        </div>
                    </div>";

        }
    }

    public function showOneActiviteit($id){
        $result = $this->getOneActiviteit($id);

        foreach ($result as $data) {
            echo "Naam: " . $data['Activiteit_Naam'];
            echo "<br>";
            echo "Datum: " . $data['Activiteit_Datum'];
            echo "<br>";
            echo "Straat: " . $data['Activiteit_Straat'];
            echo "<br>";
            echo "Huisnummer: " . $data['Activiteit_Huisnummer'];
            echo "<br>";
            echo "Postcode: " . $data['Activiteit_Postcode'];
            echo "<br>";
            echo "Beschrijving: " . $data['Activiteit_Beschrijving'];
            echo "<br>";
            echo "Image: <img src='images/" . $data['Activiteit_image'] . "'alt='pagina.php image'>";
        }
    }
}