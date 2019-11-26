<?php


class ViewPagina extends Pagina
{
    public function showAllpaginas(){
        $datas = $this->getAllPaginas();

        foreach ($datas as $data){
            echo $data['Pagina_ID'];
            echo $data['Pagina_titel'];
            echo $data['Pagina_tekst'];
            echo "<img src='images/" . $data['Pagina_image'] . "'alt='pagina image'>";
            echo "<br>";
        }
    }
}