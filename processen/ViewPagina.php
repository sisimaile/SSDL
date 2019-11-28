<?php


class ViewPagina extends Pagina
{
    public function showAllpaginas(){
        $datas = $this->getAllPaginas();

        foreach ($datas as $data){
            echo $data['Pagina_ID'];
            echo $data['Pagina_titel'];
            echo $data['Pagina_tekst'];
            echo "<form action='pagina-lijst.php' method='post'>
                    <input type='submit' value='delete' name='paginadelete'>
                    <input type='hidden' name='id' value='" . $data['Pagina_ID'] . "'>
                  </form>";
            echo "<form action='pagina-change.php' method='get'>
                    <input type='submit' value='change' name='paginaupdate'>
                    <input type='hidden' name='id' value='" . $data['Pagina_ID'] . "'>
                  </form>";
            echo "<br>";
            echo "<img src='images/" . $data['Pagina_image'] . "'alt='pagina.php image'>";
            echo "<br>";
        }
    }

    public function showAllPaginasTitel(){
        $datas = $this->getAllPaginas();

        foreach ($datas as $data){
            echo $data['Pagina_ID'];
            echo " <form action='basepagina.php' method='get'>
                        <input type='submit' value='submit' name='paginalink'>
                        <input type='hidden' name='id' value='" . $data['Pagina_ID'] . "'> 
                   </form>";
            echo "<br>";
        }
    }

    public function showOnePagina($id){
        $result = $this->getOnePagina($id);

        if ($result) {
            foreach ($result as $data) {
                echo $data['Pagina_ID'];
                echo $data['Pagina_titel'];
                echo "<img src='images/" . $data['Pagina_image'] . "'alt='pagina.php image'>";
            }
        }else{
            echo "pagina niet gevonden";
        }
    }
}