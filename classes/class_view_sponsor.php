<?php
session_start();

class view extends Sponsor {

    public function retrieveFromDb() {
        $sql = "SELECT * FROM sponsor";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;

        if($numRows > 0){
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data; 
        }
    }

    public function viewSponsor () {

        $items = $this->retrieveFromDb();

       foreach($items as $item) {

          echo '<form action= ' .  $_SERVER["PHP_SELF"]  . ' method="POST" class="container">
        <div class="form-group ">
            <label for="naamsponsor">Naam</label>
            <input type="text" class="form-control" id="naamsponsor" name="naamSponsor" value=' . $item['Sponsor_Naam'] . '>
            
            <div class="form-row">
            <div class=" form-group col-md-6">
                <label for="straat">Straat</label>
                <input type="text" class="form-control" id="straat" name="straatSponsor" value=' . $item['Sponsor_Straat'] . '>
                
            </div>
            <div class="form-group col-md-6">
                <label for="huisnummersponsor">Huisnummer</label>
                <input type="text" class="form-control" id="huisnummersponsor" name="huisnummersponsor" value=' . $item['Sponsor_Huisnummer'] . '>
            </div>
           
            <div class="form-row">
            <div class="form-group col-md-4">
                <label for="postcode">postcode</label>
                <input type="text" class="form-control" id="postcode" name="postcodeSponsor" value=' . $item['Sponsor_Postcode'] . ' >
                
            </div>

            <div class="form-group col-md-6">
                <label for="plaats">plaats</label>
                <input type="text" class="form-control" id="plaats" name="plaatsSponsor" value=' . $item['Sponsor_Plaats'] . ' >
             </div>

             <div class="form-group">
             <label for="landSponsor">land sponsor</label>
             <input type="text" class="form-control" id="landSponsor" name="landSponsor" value=' . $item['Sponsor_Land'] . ' >
            </div>


         <div class="form-group">
             <label for="emailSponsor">email sponsor</label>
             <input type="email" class="form-control" id="emailSponsor" name="emailSponsor" value=' . $item['Sponsor_Email'] . ' >
         </div>

         <div class="form-group">
             <label for="telefoonSponsor">telefoon sponsor</label>
             <input type="text" class="form-control" id="telefoonSponsor" name="telefoonSponsor" value=' . $item['Sponsor_Telefoonnummer'] . '>
         </div>


     <div class="form-group">
         <label for="overDeSponsor">over de sponsor</label>
         <textarea class="form-control" id="overDeSponsor" name="overDeSponsor" rows="3" value=' . $item['Sponsor_Overdesponsor'] . '></textarea>
     </div>

     <div class="form-group">
         <label for="afbeeldingSponsor">afbeelding sponsor</label>
         <input type="file" id="afbeeldingSponsor" name="afbeeldingSponsor" value=' . $item['Sponsor_Afbeelding'] . ' >
     </div>
        </div>
        </div>
        

        <button type="submit" name="sponsorVerwijderen" value=' . $item['Sponsor_ID'] . ' class="btn btn-primary">sponsor verwijderen</button>
        <button type="submit" name="sponsorAanpassen" value=' . $item['Sponsor_ID'] . ' class="btn btn-primary">sponsor aanpassen</button>
        </form>
        </div>';
       }
        

        if (isset($_POST['sponsorVerwijderen'])) {
            
            $sponsorverwijderen = new Sponsor;
            $sponsorverwijderen->sponsor_delete($_POST['sponsorVerwijderen']);
        }

            

        if(isset($_POST['sponsorAanpassen'])) {
            $ID_sponsor = $item['Sponsor_ID'];
            $naam_sponsor = $_POST['naamSponsor'];
            $straat_sponsor = $_POST['straatSponsor'];
            $huisnummer_sponsor = $_POST['huisnummersponsor'];
            $postcode_sponsor = $_POST['postcodeSponsor'];
            $plaats_sponsor = $_POST['plaatsSponsor'];
            $land_sponsor = $_POST['landSponsor'];
            $email_sponsor = $_POST['emailSponsor'];
            $telefoon_sponsor = $_POST['telefoonSponsor'];
            $overde_sponsor = $_POST['overDeSponsor'];
            $afbeelding_sponsor = $_POST['afbeeldingSponsor'];
            
            $sponsoraanpassen = new Sponsor;
            $sponsoraanpassen->$ID_sponsor = $ID_sponsor;
            $sponsoraanpassen->naam_sponsor = $naam_sponsor;
            $sponsoraanpassen->straat_sponsor = $straat_sponsor;
            $sponsoraanpassen->huisnummer_sponsor =  $huisnummer_sponsor;
            $sponsoraanpassen->postcode_sponsor = $postcode_sponsor;
            $sponsoraanpassen->plaats_sponsor = $plaats_sponsor;
            $sponsoraanpassen->land_sponsor = $land_sponsor;
            $sponsoraanpassen->email_sponsor = $email_sponsor;
            $sponsoraanpassen->telefoon_sponsor = $telefoon_sponsor;
            $sponsoraanpassen->overde_sponsor = $overde_sponsor;
            $sponsoraanpassen->afbeelding_sponsor = $afbeelding_sponsor;
            $sponsoraanpassen->sponsor_edit($ID_sponsor,  $naam_sponsor, $straat_sponsor, $huisnummer_sponsor, $postcode_sponsor, $plaats_sponsor, $land_sponsor, $email_sponsor, $telefoon_sponsor, $overde_sponsor, $afbeelding_sponsor);
            
        }

   


    }
}



