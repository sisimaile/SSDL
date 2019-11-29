<?php

include_once('Connection.php');

class lid extends Connection
{
    protected function getAllleden()
    {
        $sqlselectallleden = "SELECT * FROM `lidgegevens` WHERE `Lid_rol` = 'lid' OR `Lid_rol` = 'deelnemer'";
        $result = $this->connect()->query($sqlselectallleden);
        $numRows = $result->num_rows;

        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }

    public function deleteLid($lidgegevensid){
        if (!empty($lidgegevensid)) {
            $sqldeletelidgegevens = "DELETE FROM `lidgegevens` WHERE `Lidgegevens_ID` = '$lidgegevensid'";
            $resultlid = $this->connect()->query($sqldeletelidgegevens);

            $sqldeletelid = "DELETE FROM `lid` WHERE `FK_lidgegevens_ID` = '$lidgegevensid'";
            $resultgegevens = $this->connect()->query($sqldeletelid);
            
            if (isset($resultlid) && isset($resultgegevens)) {
                header("Location: leden-beheer.php?lid-verwijdert");
            } else {
                header("Location: leden-beheer.php?lid-niet-verwijdert");
            }
        }else{
            header("Location: leden-beheer.php?lid-niet-verwijdert2");
        }
    }

    public function addLid($username, $password, $passwordcheck, $email, $telefoonnummer, $plaats, $adres){
        if (!empty($username) && !empty($password) && !empty($passwordcheck) && !empty($email) &&!empty($telefoonnummer) &&!empty($plaats) && !empty($adres)){

            $sqlgebruikersnaamcheck = "SELECT * FROM `lidgegevens` WHERE `Lid_gebruikersnaam` = '$username' AND `Lid_rol` = 'lid'";
            $result = $this->connect()->query($sqlgebruikersnaamcheck);
            $results = $result->num_rows;

            if ($results > 0){
                header("Location: leden-aanmelden.php?gebruikersnaam-bestaat-al");
            } else {
                if ($password == $passwordcheck) {
                    $hashedpassword =  hash('sha256', $password);
                    $rol = "lid";

                    $conn = $this->connect();

                    $sqlaanmeldenlidgegevens = "INSERT INTO `lidgegevens` (Lid_gebruikersnaam, Lid_wachtwoord, Lid_rol) VALUES ('$username', '$hashedpassword', '$rol')";
                    $resultaanmeldengegevens = $conn->query($sqlaanmeldenlidgegevens);

                    $lastinsertedID = $conn->insert_id;

                    $conn->close();
                    $conn2 = $this->connect();

                    $FKlidgegevens = $lastinsertedID;

                    $sqlaanmeldenlid = "INSERT INTO `lid` (Lid_email, Lid_telefoonnummer, Lid_plaats, Lid_adres, FK_lidgegevens_ID) VALUES ('$email', '$telefoonnummer', '$plaats', '$adres', '$FKlidgegevens')";
                    $resultaanmeldenlid = $conn2->query($sqlaanmeldenlid);
                    if ($resultaanmeldenlid){
                        echo "hij werkt";
                        header("Location: login.php?account-aangemaakt");
                    } else {
                        echo "sql error: " . $conn2->error;
                        return;
                    }


                }else{
                    header("Location: leden-aanmelden.php?wachtwoorden-komen-niet-overeen");
                }

            }

        }else{
            header("Location: leden-aanmelden.php?niet-alle-velden-zijn-ingevuld");
        }
    }

    public function loginLid($username, $password){
        if (!empty($username) && !empty($password)){

            $hashedpassword =  hash('sha256', $password);

            $sqllogincheck = "SELECT * FROM `lidgegevens` WHERE `Lid_gebruikersnaam` = '$username' AND `Lid_wachtwoord` = '$hashedpassword'";
            $result = $this->connect()->query($sqllogincheck);
            $results = $result->num_rows;

            if ($results > 0){
                $_SESSION['lid'] = $username;
                header("Location: homepage.php?u-bent-ingelogd");
            }else{
                echo "de gebruikersnaam of wachtwoord klopt niet";
            }
        }else{
            echo "niet alle velden zijn ingevuld";
        }
    }

    public function addDeelnemer($naam, $email, $telefoonnummer, $plaats, $adres, $activiteitid){
        var_dump($naam, $email, $telefoonnummer, $plaats, $adres, $activiteitid);
        if (!empty($naam) && !empty($email) &&!empty($telefoonnummer) &&!empty($plaats) && !empty($adres)){

            $sqlgebruikersnaamcheck = "SELECT * FROM `lidgegevens` WHERE `Lid_gebruikersnaam` = '$naam' AND `Lid_rol` = 'deelnemer'";
            $result = $this->connect()->query($sqlgebruikersnaamcheck);
            $results = $result->num_rows;

            if ($results > 0){
                header("Location: activiteiten-aanmelden.php?gebruikersnaam-bestaat-al");
            } else {

                $conn = $this->connect();
                $rol = "deelnemer";

                $sqlaanmeldendeelnemergegevens = "INSERT INTO `lidgegevens` (Lid_gebruikersnaam, Lid_rol) VALUES ('$naam', '$rol')";
                $resultaanmeldendeelnemergegevens = $conn->query($sqlaanmeldendeelnemergegevens);

                if ($resultaanmeldendeelnemergegevens){
                    header("Location: activiteiten-aanmelden?pagina=home");
                } else {
                    echo "sql error: " . $conn->error;
                    return;
                }

                $lastinsertedgegevensID = $conn->insert_id;

                $conn->close();
                $conn2 = $this->connect();

                $FKlidgegevens = $lastinsertedgegevensID;

                $sqlaanmeldendeelnemer = "INSERT INTO `lid` (Lid_email, Lid_telefoonnummer, Lid_plaats, Lid_adres, FK_lidgegevens_ID) VALUES ('$email', '$telefoonnummer', '$plaats', '$adres', '$FKlidgegevens')";
                $resultaanmeldendeelnemer = $conn2->query($sqlaanmeldendeelnemer);

                $lastinsertedlidID = $conn2->insert_id;

                $conn2->close();
                $conn3 = $this->connect();

                $FK_Lid_ID = $lastinsertedlidID;

                $sqlaanmeldendeelnemeractiviteit = "INSERT INTO `deelnemer` (FK_Lid_ID, FK_Activiteit_ID) VALUES ('$FK_Lid_ID', '$activiteitid')";
                $resultaanmeldendeelnemeractiviteit = $conn3->query($sqlaanmeldendeelnemeractiviteit);

                if ($resultaanmeldendeelnemeractiviteit){
                    header("Location: homepage.php?pagina=home");
                } else {
                    echo "sql error: " . $conn2->error;
                    return;
                }

            }

        }else{

        }

    }

    public function getallledenid($fkledenid){
        if (!empty($fkledenid)) {
            $sqlgetlidid = "SELECT `Lid_ID` FROM `lid` WHERE `FK_lidgegevens_ID` = '$fkledenid'";
            $resultgetlidid = $this->connect()->query($sqlgetlidid);
            while ($row = $resultgetlidid->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        } else {
            echo 'error';
        }
    }

    public function getallactiviteiten($lidid)
    {
        if (!empty($lidid)) {
            $sqlgetactiviteiten = "SELECT * FROM `deelnemer` WHERE `FK_Lid_ID` = '$lidid'";
            $resultgetactiviteiten = $this->connect()->query($sqlgetactiviteiten);

            $numRows = $resultgetactiviteiten->num_rows;

            return $numRows;
        } else {

        }
    }

}