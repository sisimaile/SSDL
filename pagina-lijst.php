<?php

include 'processen/Connection.php';
include 'processen/Pagina.php';
include 'processen/ViewPagina.php';

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

