<?php

include_once "Connection.php";

class Sponsor extends Connection {

    public function sponsor_toevoegen ($naam_sponsor, $email_sponsor, $telefoon_sponsor, $overde_sponsor, $plaats_sponsor, $straat_sponsor, $huisnummer_sponsor, $postcode_sponsor, $afbeelding_sponsor) {

        if (!empty($naam_sponsor) && !empty($email_sponsor) && !empty($telefoon_sponsor) && !empty($overde_sponsor) &&!empty($plaats_sponsor) &&!empty($straat_sponsor) && !empty($huisnummer_sponsor) && !empty($postcode_sponsor) && !empty($afbeelding_sponsor)){

            $sqlsponsornaamcheck = "SELECT * FROM `lidgegevens` WHERE `Lid_gebruikersnaam` = '$naam_sponsor'";
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

     public function sponsor_edit($ID_sponsor, $naam_sponsor, $straat_sponsor, $huisnummer_sponsor,  $postcode_sponsor, $plaats_sponsor, $land_sponsor, $email_sponsor, $telefoon_sponsor, $overde_sponsor, $afbeelding_sponsor ){

        $sponsor_id = $_POST['sponsorAanpassen'];
        $editSponsor ="UPDATE sponsor SET  Sponsor_Naam = '$naam_sponsor' , Sponsor_Straat = '$straat_sponsor', Sponsor_Huisnummer = '$huisnummer_sponsor', Sponsor_Postcode = '$postcode_sponsor',  Sponsor_Plaats = '$plaats_sponsor', Sponsor_Land = '$land_sponsor', Sponsor_Email = '$email_sponsor', 
        Sponsor_Telefoonnummer = '$telefoon_sponsor', Sponsor_Overdesponsor = '$overde_sponsor', Sponsor_Afbeelding = '$afbeelding_sponsor'  WHERE Sponsor_ID = $ID_sponsor";
        $save= $this->connect()->query($editSponsor);

        $sponsorupdaten = new view;
        $sponsorupdaten->retrieveFromDb();
        


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
}

   


