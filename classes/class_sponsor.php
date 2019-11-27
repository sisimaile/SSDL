<?php

class Sponsor extends db {
    public $naam_sponsor;
    public $straat_sponsor;
    public $huisnummer_sponsor;
    public $postcode_sponsor;
    public $plaats_sponsor;
    public $land_sponsor;
    public $email_sponsor;
    public $telefoon_sponsor;
    public $overde_sponsor;
    public $afbeelding_sponsor;
    public $ID_sponsor;

    

    public function sponsor_toevoegen ($naam_sponsor, $straat_sponsor, $huisnummer_sponsor, $postcode_sponsor, $plaats_sponsor, $land_sponsor, $email_sponsor, $telefoon_sponsor, $overde_sponsor, $afbeelding_sponsor) {
    
        $addSponsor ="INSERT INTO `sponsor` (Sponsor_Naam, Sponsor_Straat, Sponsor_Huisnummer, Sponsor_Postcode, Sponsor_Plaats, Sponsor_Land, Sponsor_Email, Sponsor_Telefoonnummer, Sponsor_Overdesponsor, Sponsor_Afbeelding) 
        VALUES ('$naam_sponsor', '$straat_sponsor', '$huisnummer_sponsor', '$postcode_sponsor', '$plaats_sponsor', '$land_sponsor', '$email_sponsor', '$telefoon_sponsor', '$overde_sponsor', '$afbeelding_sponsor')";
        $test = $this->connect()->query($addSponsor);
       
    }

    public function sponsor_delete(){
        $mysqli = new mysqli ('localhost', 'root', '', 'ssdl') or die(mysqli_error($mysqli));
        $sponsor_id = $_POST['sponsorVerwijderen'];
        
      
        $mysqli->query("DELETE FROM sponsor WHERE Sponsor_ID = $sponsor_id");
    }

     public function sponsor_edit($ID_sponsor, $naam_sponsor, $straat_sponsor, $huisnummer_sponsor,  $postcode_sponsor, $plaats_sponsor, $land_sponsor, $email_sponsor, $telefoon_sponsor, $overde_sponsor, $afbeelding_sponsor ){

        $sponsor_id = $_POST['sponsorAanpassen'];
        $editSponsor ="UPDATE sponsor SET  Sponsor_Naam = '$naam_sponsor' , Sponsor_Straat = '$straat_sponsor', Sponsor_Huisnummer = '$huisnummer_sponsor', Sponsor_Postcode = '$postcode_sponsor',  Sponsor_Plaats = '$plaats_sponsor', Sponsor_Land = '$land_sponsor', Sponsor_Email = '$email_sponsor', 
        Sponsor_Telefoonnummer = '$telefoon_sponsor', Sponsor_Overdesponsor = '$overde_sponsor', Sponsor_Afbeelding = '$afbeelding_sponsor'  WHERE Sponsor_ID = $ID_sponsor";
        $save= $this->connect()->query($editSponsor);

        $sponsorupdaten = new view;
        $sponsorupdaten->retrieveFromDb();
        


    }

          
    }

   


