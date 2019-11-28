<?php
include "header.php";
include "nav.php";

include 'processen/Connection.php';
include 'processen/Pagina.php';
include 'processen/ViewPagina.php';

?>

<section id="pagina-content">
    <?php
        $selectedPagina = new ViewPagina();
        $selectedPagina->showOnePagina($_GET["id"]);
    ?>
</section>

<?php
include "footer.php";
?>
