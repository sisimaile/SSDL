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

    public function addPaginas($titel, $message, $image)
    {
        if(!empty($titel) && !empty($message) && !empty($image)){
            $sqltiteltest = "SELECT * FROM `pagina` WHERE `Pagina_titel` = '$titel'";
            $result = $this->connect()->query($sqltiteltest);
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
}