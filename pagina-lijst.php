<?php

include 'processen/Connection.php';
include 'processen/Pagina.php';
include 'processen/ViewPagina.php';

if (isset($_POST['paginadelete'])){
    $paginaID = $_POST['id'];

    $delete = new Pagina();
    $delete->deletePagina($paginaID);
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Pagina beheer</title>
</head>
</html>

<body>
    <section id="pagina-lijst">
        <?php
            $paginas = new ViewPagina();
            $paginas->showAllpaginas();
        ?>
    </section>
</body>

