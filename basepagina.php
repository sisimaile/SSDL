<?php
include "header.php";
include "nav.php";

include_once 'processen/Pagina.php';
include_once 'processen/ViewPagina.php';

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
