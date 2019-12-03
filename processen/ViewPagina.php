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
                echo '
                <div class="row">
                    <div class="col-md-6">
                    <h1 class="showOnaPaginah3">' . $data['Pagina_titel'] . ' </h1>
                    <p class="showOnePaginep"> ' . $data['Pagina_tekst'] . ' </p>
   
                    <img src="images/' . $data['Pagina_image'] . '" alt="pagina.php image" class="img-fluid"> 
                    </div>

                </div>
                ';
            }
        }else{
            echo "<p class='showOnePaginep'>pagina niet gevonden</p>";
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
                            <h1>Welkom!</h1>
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
                                    <form action="activiteiten-overzichtpage.php" method="get">
                                        <button type="submit" class="btn btn-sidebar">Onze activiteiten</button>
                                        <input type="hidden" value="activiteiten" name="pagina">
                                    </form>
                                </div>
                            
                            </div>
                            <div class="row-md-6 info-over-ons3">
                                <form action="sponsorenpage.php" method="get">
                                    <button type="submit" class="btn btn-sidebar">Onze sponsoren</button>
                                    <input type="hidden" value="sponsoren" name="pagina">
                                </form>
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
            echo '<div class="row">
                    <div class="col-md-12 col-lg-6">
                            <div class="card" style="width: 25rem;">
                            <div class="card-body showactiviteitenpPagina">
                            <h5 class="card-title showactiviteitenpPagina-h5">' . $data['Pagina_titel'] . '</h5>
                            <p>' . $data['Pagina_tekst'] . '</p>
                        </div>
                    </div>
                </div>';
        }
    }

    public function showsponsorPagina($titel){
        $datas = $this->getOnePaginatitel($titel);

        foreach ($datas as $data){
            echo '<div class="row">
                    <div class="col-md-6">
                        <div class="card showsponsorpagina" style="width: 25rem;">
                            <div class="card-body">
                                <h1 class="display-4 showsponsorpagina-titel">Meet the ' . $data['Pagina_titel'] . '</h1>
                            </div>
                        </div>
                    </div>    
                </div>';
        }
    }

    public function showbeheerderlinks(){
        echo '<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-center">Beheerder</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="pagina-lijst.php" class="text-center">Beheer pagina`s</a>
                    </li>
                    <li>
                        <a href="leden-beheer.php" class="text-center">Beheer leden</a>
                    </li>
                    <li>
                        <a href="beheer-sponsor.php" class="text-center">aanmaken sponsor</a>
                    </li>
                    <li>
                        <a href="beheer-activiteit.php" class="text-center">aanmaken activiteit</a>
                    </li>
                </ul>';
    }

    public function showoveronsextra(){
        echo '<div>
                <p>extra informatie voor leden</p>
              </div>';
    }

}