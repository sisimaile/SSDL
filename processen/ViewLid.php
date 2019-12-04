<?php

include_once 'lid.php';

class ViewLid extends lid
{
    public function showAllLeden(){
        $datas = $this->getAllleden();
        if (!empty($datas)) {
            foreach ($datas as $data) {
                echo $data['Lid_gebruikersnaam'];
                echo "<br>";
                echo $data['Lid_rol'];
                echo "<br>";
                $fkledenid = $data['Lidgegevens_ID'];
                $ledenid = $this->getallledenid($fkledenid);
                foreach ($ledenid as $lidid){
                    echo "aantal activiteiten: ";
                    $activiteiten = $this->getallactiviteiten($lidid['Lid_ID']);
                    echo $activiteiten;
                }
                echo "<br>";
                echo "<form action='leden-beheer.php' method='post'>
                        <input type='submit' value='delete' name='liddelete'>
                        <input type='hidden' name='gegevensid' value='" . $data['Lidgegevens_ID'] . "'>
                      </form>";
                echo "<br>";
                echo "<br>";
            }
        } else{
            echo "geen leden";
        }
    }
}