<?php


class ViewLid extends lid
{
    public function showAllLeden(){
        $datas = $this->getAllleden();
        if (!empty($datas)) {
            foreach ($datas as $data) {
                echo $data['Lid_ID'];
                echo $data['Lid_email'];
                echo $data['Lid_telefoonnummer'];
                echo $data['Lid_tekst'];
                echo $data['Lid_plaats'];
                echo $data['Lid_adres'];
                echo $data['FK_lidgegevens_ID'];
                echo "<br>";
                echo "<img src='images/" . $data['Lid_logo'] . "'alt='lid image'>";
                echo "<form action='leden-beheer.php' method='post'>
                        <input type='submit' value='delete' name='liddelete'>
                        <input type='hidden' name='id' value='" . $data['Lid_ID'] . "'>
                        <input type='hidden' name='fk' value='" . $data['FK_lidgegevens_ID'] . "'>
                      </form>";
                echo "<br>";
                echo "<br>";
            }
        } else{
            echo "geen leden";
        }
    }
}