<?php

class viewActivity extends ActivityValidator {

    public function showAllActivities () {
        $datas = $this->retrieveactivity();
        foreach ($datas as $data) {
            echo "<div class='col-md-3'>
                  <div class='card' style='width: 18rem;'>
                    <img src= 'images/" . $data['Activiteit_image'] . "' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>" . $data['Activiteit_Naam'] . "</h5>
                        <h6 class='card-subtitle mb-2 text-muted'>" . $data['Activiteit_Datum'] . "</h6>
                        <p class='card-text'>" . $data['Activiteit_Beschrijving'] . "</p>
                        <p class='card-text'>plaats: " . $data['Activiteit_Plaats'] . " - adres: " . $data['Activiteit_Straat'] . " " . $data['Activiteit_Huisnummer'] . " - Postcode: " . $data['Activiteit_Postcode'] . "</p>
                    </div>
                    <div>
                        <form action='activiteit-change.php' method='get'>
                            <input type='submit' value='change' name='activiteitupdate'>
                            <input type='hidden' name='id' value='" . $data['Activiteit_ID'] . "'>
                        </form>
                    </div>
                    <div>
                        <form action='activiteiten-overzichtpage.php' method='post'>
                            <input type='submit' value='delete' name='activiteitdelete'>
                            <input type='hidden' name='id' value='" . $data['Activiteit_ID'] . "'>
                        </form>
                    </div>
                    <div>
                        <form action='activiteiten-aanmelden.php' method='post'>
                            <input type='submit' value='aanmelden' name='aanmelden'>
                            <input type='hidden' name='id' value='" . $data['Activiteit_ID'] . "'>
                        </form>
                        "; $activiteitid = $data['Activiteit_ID'];
                            $aantaldeelnemers = $this->getallDeelnemers($activiteitid);
                            echo 'aantal deelnemers: ' . $aantaldeelnemers . "
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