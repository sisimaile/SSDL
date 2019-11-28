<?php

include 'processen/Connection.php';
include 'processen/lid.php';
include 'processen/ViewLid.php';

if (isset($_POST['liddelete'])){
    $lidgegevensID = $_POST['gegevensid'];

    $delete = new lid();
    $delete->deleteLid($lidgegevensID);
}

?>


<section id="pagina-lijst">
    <?php
    $paginas = new ViewLid();
    $paginas->showAllLeden();
    ?>
</section>
</body>