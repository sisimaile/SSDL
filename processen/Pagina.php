<?php

include_once('Connection.php');


class Pagina extends Connection
{
    protected function getAllPaginas()
    {
        $sql = "SELECT * FROM pagina";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;

        if ($numRows > 0){
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

    public function getOnePagina($id){
    $sqlonepagina = "SELECT * FROM `pagina` WHERE `Pagina_ID` = '$id'";
    $result = $this->connect()->query($sqlonepagina);
    $numRows = $result->num_rows;

        if ($numRows > 0){
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

    public function getOnePaginatitel($titel){

        
        $sqlonepagina = "SELECT * FROM `pagina` WHERE `Pagina_titel` = '$titel'";
        $result = $this->connect()->query($sqlonepagina);
        $numRows = $result->num_rows;

        

        if ($numRows > 0){
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

    public function addPaginas($titel, $message, $image)
    {
        if(!empty($titel) && !empty($message)){
            $sqltitelcheck = "SELECT * FROM `pagina` WHERE `Pagina_titel` = '$titel'";
            $result = $this->connect()->query($sqltitelcheck);
            $results = $result->num_rows;

            if ($results > 0){
                header("Location: pagina-toevoegen.php?pagina-bestaat-al");
            }else{
                $sqltoevoegen = "INSERT INTO `pagina` (Pagina_titel, Pagina_tekst, Pagina_image) VALUES ('$titel', '$message', '$image')";
                $link = $this->connect()->query($sqltoevoegen);
                if ($link){
                    header("Location: homepage.php?pagina-aangemaakt");
                }else{
                    header("Location: pagina-toevoegen.php?pagina-is-niet-aangemaakt");
                }

            }
        } else {
            echo "titel, tekst of image is leeg";
        }

    }

    public function deletePagina($id){
        if (!empty($id)) {
            $sqldelete = "DELETE FROM `pagina` WHERE `Pagina_ID` = '$id'";
            $result = $this->connect()->query($sqldelete);
            if (isset($result)) {
                header("Location: pagina-lijst.php?pagina-verwijdert");
            } else {
                header("Location: pagina-lijst.php?pagina-niet-verwijdert");
            }
        }else{
            header("Location: pagina-lijst.php?pagina-niet-verwijdert2");
        }
    }

    public function changepagina($id, $titel, $message, $image){
        if (!empty($id) && !empty($titel) && !empty($message)){
            $sqlchange = "UPDATE `pagina` SET `Pagina_titel`= '$titel', `Pagina_tekst`= '$message', `Pagina_image`= '$image' WHERE `Pagina_ID`= '$id'";
            $result = $this->connect()->query($sqlchange);

            if (isset($result)){
                header("Location: pagina-lijst.php?pagina-verandert");
            }else{
                header("Location: pagina-lijst?pagina-niet-verandert");
            }
        }else{
            header("Location: pagina-lijst.php?geen-titel-of-tekst-ingevuld");
        }
    }
}