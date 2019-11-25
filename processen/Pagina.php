<?php

include_once('Connection.php');

class Pagina
{
    private $db;

    public function __construct()
    {
        $this->db = new Connection();
        $this->db = $this->db->DB();
    }

    public function List_Pagina()
    {
        $db = $this->db;
        $st = $db->prepare("SELECT * FROM pagina");
        $st->execute();

        while ($result = $st->fetch(PDO::FETCH_ASSOC)){
            $result['Pagina_ID'];
            $result['Pagina_titel'];
            $result['Pagina_tekst'];
            $result['Pagina_image'];

            foreach ($result as $pagina){
                $pagina_titel = $pagina['1'];
                
            }
        }
    }

}