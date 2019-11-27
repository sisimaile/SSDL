<?php

include 'processen/Connection.php';
include 'processen/Pagina.php';
include 'processen/ViewPagina.php';

include "header.php";
include "nav.php";


if (isset($_POST['paginachange'])){
    $paginaID = $_POST['id'];
    $paginatitel = $_POST['titel'];
    $paginatekst = $_POST['tekst'];
    $paginaimage = $_POST['image'];

    $change = new Pagina();
    $change->changepagina($paginaID, $paginatitel, $paginatekst, $paginaimage);
}

?>

<div class="container-fluid content">
    <div class="row">
        <div class="col-6 paginaveranderen-box">
            <section id="pagina-content">
                <h3>Huidige gegevens</h3>
                <?php
                    $selectedPagina = new ViewPagina();
                    $selectedPagina->showOnePagina($_GET["id"]);
                ?>
        </div>

        <div class="col-6 nieuwe-gegevens text-center">
                <h3>Nieuwe gegevens</h3>
                <?php
                echo "<form action='pagina-change.php' method='post'>
                    <div class='form-group'>
                    <p>Titel:</p>
                    <input type='text' name='titel'><br>
                    </div>

                    <div class='form-group'>
                    <p>tekst:</p>
                    <textarea name='tekst'></textarea><br>
                    </div>

                    <div class='form-group'>
                    <input type='text' name='image'> <br><br>
                    </div>

                    <div class='form-group'>
                    <input type='submit' class='btn btn-primary' value='change' name= 'paginachange'>
                    <input type='hidden' value='" . $_GET['id'] . "' name='id'>
                    </div>
                </form>"
                ?>
            </section>
        </div>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>