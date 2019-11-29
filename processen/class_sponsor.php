<?php

include_once "Connection.php";

class Sponsor extends Connection {

    public function sponsor_toevoegen ($naam_sponsor, $email_sponsor, $telefoon_sponsor, $overde_sponsor, $plaats_sponsor, $straat_sponsor, $huisnummer_sponsor, $postcode_sponsor, $afbeelding_sponsor) {

        if (!empty($naam_sponsor) && !empty($email_sponsor) && !empty($telefoon_sponsor) && !empty($overde_sponsor) &&!empty($plaats_sponsor) &&!empty($straat_sponsor) && !empty($huisnummer_sponsor) && !empty($postcode_sponsor) && !empty($afbeelding_sponsor)){

            $sqlsponsornaamcheck = "SELECT * FROM `lidgegevens` WHERE `Lid_gebruikersnaam` = '$naam_sponsor' AND `Lid_rol` = 'sponsor'";
            $result = $this->connect()->query($sqlsponsornaamcheck);
            $results = $result->num_rows;

            if ($results > 0){
                header("Location: beheer-sponsor.php?sponsor-bestaat-al");
            } else {
                $password = "{$naam_sponsor}{$plaats_sponsor}123";
                $hashedpassword =  hash('sha256', $password);
                $rol = "sponsor";

                $conn = $this->connect();

                $sqlaanmeldensponsorgegevens = "INSERT INTO `lidgegevens` (Lid_gebruikersnaam, Lid_wachtwoord, Lid_rol) VALUES ('$naam_sponsor', '$hashedpassword', '$rol')";
                $resultaanmeldengegevens = $conn->query($sqlaanmeldensponsorgegevens);

                $lastinsertedID = $conn->insert_id;

                $conn->close();
                $conn2 = $this->connect();

                $FKlidgegevens = $lastinsertedID;
                $adres = $postcode_sponsor + ', ' + $straat_sponsor + ', ' + $huisnummer_sponsor;

                $sqlaanmeldenlid = "INSERT INTO `lid` (Lid_email, Lid_telefoonnummer, Lid_tekst, Lid_plaats, Lid_adres, Lid_logo, FK_lidgegevens_ID) VALUES ('$email_sponsor', '$telefoon_sponsor', '$overde_sponsor', '$plaats_sponsor', '$adres', '$afbeelding_sponsor', '$FKlidgegevens')";
                $resultaanmeldenlid = $conn2->query($sqlaanmeldenlid);
                if ($resultaanmeldenlid){
                    echo "hij werkt";
                    header("Location: login.php?account-aangemaakt");
                } else {
                    echo "sql error: " . $conn2->error;
                    return;
                }


            }

        }else{
            header("Location: beheer-sponsor.php?niet-alle-velden-zijn-ingevuld");
        }
    }


    public function deleteSponsor($sponsorgegevensid){
        if (!empty($sponsorgegevensid)) {
            $sqldeletelidgegevens = "DELETE FROM `lidgegevens` WHERE `Lidgegevens_ID` = '$sponsorgegevensid'";
            $resultlid = $this->connect()->query($sqldeletelidgegevens);

            $sqldeletelid = "DELETE FROM `lid` WHERE `FK_lidgegevens_ID` = '$sponsorgegevensid'";
            $resultgegevens = $this->connect()->query($sqldeletelid);

            if (isset($resultlid) && isset($resultgegevens)) {
                header("Location: sponsorenpage.php?sponsor-verwijdert");
            } else {
                header("Location: sponsorenpage.php?sponsor-niet-verwijdert");
            }
        }else{
            header("Location: sponsorenpage.php?sponsor-niet-verwijdert2");
        }
    }

    public function retrievegegevens() {
        $sqlgegevensselect = "SELECT * FROM `lidgegevens` WHERE `Lid_rol` = 'sponsor'";
        $result = $this->connect()->query($sqlgegevensselect);
        $numRows = $result->num_rows;


        if($numRows > 0){
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function retrievesponsor($gegevensid){
        $sqllidselect = "SELECT * FROM `lid` WHERE `FK_lidgegevens_ID` = '$gegevensid'";
        $sponsors = $this->connect()->query($sqllidselect);
        $rows = $sponsors->num_rows;

        if ($rows > 0){
            while ($row = $sponsors->fetch_assoc()){
                $datasponsor = $row;

                return $datasponsor;
            }
        }
    }

    public function retrieveonegegevens($gegevensid) {
        $sqlgegevensselect = "SELECT * FROM `lidgegevens` WHERE `Lidgegevens_ID` = '$gegevensid'";
        $result = $this->connect()->query($sqlgegevensselect);
        $numRows = $result->num_rows;


        if($numRows > 0){
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function wijzigSponsor($sponsorgegevens_id, $sponsornaam, $sponsorstraat, $sponsorhuisnummer, $sponsorpostcode, $sponsorplaats, $sponsoremail, $sponsortelefoonnummer, $sponsortekst, $sponsorlogo){
        var_dump($sponsorgegevens_id, $sponsornaam, $sponsorstraat, $sponsorhuisnummer, $sponsorpostcode, $sponsorplaats, $sponsoremail, $sponsortelefoonnummer, $sponsortekst, $sponsorlogo);
        if (!empty($sponsorgegevens_id) && !empty($sponsornaam) && !empty($sponsorstraat) && !empty($sponsorhuisnummer) && !empty($sponsorpostcode) && !empty($sponsorplaats) && !empty($sponsoremail) && !empty($sponsortelefoonnummer) && !empty($sponsortekst) && !empty($sponsorlogo)) {
            $sqlwijzigsponsorgegevens = "UPDATE `lidgegevens` SET `Lid_gebruikersnaam` = '$sponsornaam' WHERE `Lidgegevens_ID` = '$sponsorgegevens_id'";
            $result = $this->connect()->query($sqlwijzigsponsorgegevens);

            $sponsoradres = $sponsorpostcode . ' - ' . $sponsorstraat . ' - ' . $sponsorhuisnummer;
            $sqlwijzigsponsor = "UPDATE `lid` SET `Lid_email` = '$sponsoremail', `Lid_telefoonnummer` = '$sponsortelefoonnummer', `Lid_tekst` = '$sponsortekst', `Lid_plaats` = '$sponsorplaats', `Lid_adres` = '$sponsoradres', `Lid_logo` = '$sponsorlogo' WHERE `FK_lidgegevens_ID` = '$sponsorgegevens_id'";
            $resulttwee = $this->connect()->query($sqlwijzigsponsor);

            header("Location: sponsorenpage.php?sponsor-gewijzigd");
        }else{
            header("Location: sponsorenpage.php?niet-alle-velden-ingevuld");
        }
    }
}

   


