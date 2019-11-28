<?php


class ViewLid extends lid
{
    public function showAllLeden(){
        $datas = $this->getAllleden();
        if (!empty($datas)) {
            foreach ($datas as $data) {
                echo $data['Lid_gebruikersnaam'];
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