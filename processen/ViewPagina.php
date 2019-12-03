<?php

include_once "Pagina.php";

class ViewPagina extends Pagina
{
    public function showAllpaginas(){
        $datas = $this->getAllPaginas();

        foreach ($datas as $data){
            echo $data['Pagina_ID'];
            echo $data['Pagina_titel'];
            echo $data['Pagina_tekst'];
            echo "<form action='pagina-lijst.php' method='post'>
                    <input type='submit' value='delete' name='paginadelete' class='btn-sidebar'>
                    <input type='hidden' name='id' value='" . $data['Pagina_ID'] . "'>
                  </form>";
            echo "<form action='pagina-change.php' method='get'>
                    <input type='submit' value='change' name='paginaupdate' class='btn-sidebar' >
                    <input type='hidden' name='id' value='" . $data['Pagina_ID'] . "'>
                  </form>";
            echo "<br>";
            echo "<img src='images/" . $data['Pagina_image'] . "'alt='pagina.php image' class='img-fluid'>";
            echo "<br>";
        }
    }

    public function showAllPaginasTitel(){
        $datas = $this->getAllPaginas();

        foreach ($datas as $data){
            if ($data['Pagina_titel'] == 'home' or $data['Pagina_titel'] == 'over-ons' or $data['Pagina_titel'] == 'activiteiten' or $data['Pagina_titel'] == 'sponsoren') {

            }else{
                echo " <form action='basepagina.php' method='get'>    
                            <input type='submit' class='text-center btn btn-sidebar' value='" . $data['Pagina_titel'] . "' name='paginalink'>
                            <input type='hidden' name='id' value='" . $data['Pagina_ID'] . "'> 
                       </form>";
            }
        }
    }

    public function showOnePagina($id){
        $result = $this->getOnePagina($id);

        if ($result) {
            foreach ($result as $data) {
                echo $data['Pagina_titel'];
                echo $data['Pagina_tekst'];
                echo "<img src='images/" . $data['Pagina_image'] . "'alt='pagina.php image' class='img-fluid'>";
            }
        }else{
            echo "pagina niet gevonden";
        }
    }

    public function showhomePagina($titel){
        $datas = $this->getOnePaginatitel($titel);
    
        foreach ($datas as $data) {
            echo '<img src="images/' . $data['Pagina_image'] . '" alt="" class="img-fluid">
                        <div class="centered0">
                        <h1 class="display-2 showhomePaginah1">Bedankt!</h1>
                        <h3 class="showhomePaginah3">' . $data['Pagina_tekst'] . '</h3>
                        </div>';
        }
    }

    public function showoveronspagina($titel){
        $datas = $this->getOnePaginatitel($titel);

        foreach ($datas as $data) {
            echo '<div class="row welkom-over-ons">
                        <div class="col welkom-over-ons1 text-center">
                            <h1>Welkomtest</h1>
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis pariatur animi quas assumenda!</h5>
                        </div>
                    </div>


                    <div class="container">
                    <div class="row">
                        <div class="col welkom-over-ons2">
                            <img src="images/' . $data['Pagina_image'] . '" alt="" class="img-fluid">
                        </div>
                    </div>
                    </div>

                    <div class="container">
                    <div class="row info-over-ons">
                        <div class="col-md-8 info-over-ons1 ">
                            <p>' . $data['Pagina_tekst'] . '</p>
                        </div>
                        <div class="col-md-4">
                            <div class="row-md-6 info-over-ons2">
                                <div class="col">
                                    <button class="btn btn-primary">Onze activiteiten</button>
                                </div>
                            
                            </div>
                            <div class="row-md-6 info-over-ons3">
                            <button class="btn btn-primary">Onze sponsoren</button>
                            </div>
                        </div>
                </div>
                </div> ';
        }
    }

    public function showactiviteitenPagina($titel)
    {
        $datas = $this->getOnePaginatitel($titel);

        foreach ($datas as $data){
            echo '<div class="container home-over-ons">
    <div class="row ">
        <div class="col-md-12 col-lg-6 ">
            <h2 class="display-3">' . $data['Pagina_titel'] . '</h2>
            
            <p>' . $data['Pagina_tekst'] . '</p>
            <br>
        </div>
        <div class="col-lg-6">       
        </div>
    </div>
</div>';
        }
    }

    public function showsponsorPagina($titel){
        $datas = $this->getOnePaginatitel($titel);

        foreach ($datas as $data){
            echo '<div class="row text-center">
            <div class="col-12 ">
                <h1 class="display-4">Meet the ' . $data['Pagina_titel'] . '</h1>
            </div>
        </div>

        <p class="test">' . $data['Pagina_tekst'] . '</p>';
        }
    }

}